import Animals from "./pages/animals/Animals.vue";
import Colors from "./pages/colors/Colors.vue";
import UserListPage from "./pages/users/pages/UserListPage.vue";
import UserFormPage from "./pages/users/pages/UserFormPage.vue";

export default [
    {
        path: "/users",
        name: "users.list",
        component: UserListPage,
    },
    {
        path: "/user/create",
        name: "users.create",
        component: UserFormPage,
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
