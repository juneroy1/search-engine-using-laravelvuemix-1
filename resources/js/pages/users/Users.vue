<template>
    <div>
        <!-- {{ users }} -->
        <form @submit="submitCreateUser">
            <div class="container">
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="first_name" class="form-label"
                            >First name</label
                        >
                    </div>
                    <div class="">
                        <input
                            type="text"
                            class="form-control-lg w-100"
                            id="first_name"
                            placeholder="First name..."
                        />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="last_name" class="form-label"
                            >Last name</label
                        >
                    </div>
                    <div class="">
                        <input
                            type="text"
                            class="form-control-lg w-100"
                            id="last_name"
                            placeholder="Last name..."
                        />
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="middle_name" class="form-label"
                            >Middle name</label
                        >
                    </div>
                    <div class="">
                        <input
                            type="text"
                            class="form-control-lg w-100"
                            id="middle_name"
                            placeholder="Middle name..."
                        />
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="address" class="form-label">Address</label>
                    </div>
                    <div class="">
                        <input
                            type="text"
                            class="form-control-lg w-100"
                            id="address"
                            placeholder="Address..."
                        />
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="address" class="form-label">Address</label>
                    </div>
                    <div class="">
                        <!-- <textarea
                        type="text"
                        class="form-control-lg w-100"
                        id="address"
                        placeholder="Address..."
                    ><textarea/> -->
                        <textarea
                            class="form-control"
                            placeholder="Leave a comment here"
                            id="floatingTextarea2"
                            style="height: 100px"
                        ></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="position" class="form-label"
                            >Position</label
                        >
                    </div>
                    <div class="">
                        <input
                            type="text"
                            class="form-control-lg w-100"
                            id="position"
                            placeholder="Position..."
                        />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="birthdate" class="form-label"
                            >Birthdate</label
                        >
                    </div>
                    <div class="">
                        <input
                            type="date"
                            class="form-control-lg w-100"
                            id="birthdate"
                            placeholder="Birthdate..."
                        />
                    </div>
                </div>
                <div class="row">
                    <div
                        class="col-md-12 d-flex justify-content-end align-items-center"
                    >
                        <button type="submit" class="btn btn-primary w-25">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>
<script>
export default {
    name: "Users",
    data() {
        return {
            users: null,
        };
    },
    methods: {
        getOptionUsersList() {
            axios.get("/api/users").then((response) => {
                console.log("users response", response);
                if (response && response.data && response.data.users) {
                    this.users = response.data.users;
                }
            });
        },
        submitCreateUser(e) {
            e.preventDefault();
            console.log("e", e);
        },
    },
    created() {
        this.getOptionUsersList();
    },
};
</script>
