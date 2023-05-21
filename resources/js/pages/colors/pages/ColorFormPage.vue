<template>
    <div>
        <form @submit="registeredNewColor">
            <div class="container">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="name">Name:</label>
                        <input type="text" v-model="item.name" id="name" />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="description">Description:</label>
                        <input
                            type="text"
                            v-model="item.description"
                            id="description"
                        />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>
<script>
export default {
    name: "ColorFormPage",
    data() {
        return {
            item: {},
        };
    },
    methods: {
        getOptionColorlist() {
            axios.get("/api/color").then((response) => {
                console.log("response color", response);
            });
        },
        registeredNewColor(e) {
            e.preventDefault();
            console.log("this.item", this.item);
            axios.post("/api/color", this.item).then((response) => {
                console.log("response create color", response);
            });
        },
    },
    created() {
        this.getOptionColorlist();
    },
};
</script>
