import Animals from "./pages/animals/Animals.vue";
import Colors from "./pages/colors/Colors.vue";
import Users from "./pages/users/Users.vue";

export default [
    {
        path: "/",
        name: "users",
        component: Users,
    },
    {
        path: "/animals",
        name: "animals",
        component: Animals,
    },
    {
        path: "/colors",
        name: "colors",
        component: Colors,
    },
];
