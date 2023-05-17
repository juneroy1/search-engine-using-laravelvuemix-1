<template>
    <div>{{ users }}</div>
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
    },
    created() {
        this.getOptionUsersList();
    },
};
</script>
