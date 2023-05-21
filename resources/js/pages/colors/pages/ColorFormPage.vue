<template>
    <div>color form page</div>
</template>
<script>
export default {
    name: "ColorFormPage",
    data() {
        return {};
    },
    methods: {
        getOptionColorlist() {
            axios.get("/api/color").then((response) => {
                console.log("response color", response);
            });
        },
    },
    created() {
        this.getOptionColorlist();
    },
};
</script>
