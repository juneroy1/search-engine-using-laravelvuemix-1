import { createRouter, createWebHistory } from "vue-router";
import "./bootstrap";

import { createApp } from "vue/dist/vue.esm-bundler.js";
import Routes from "./routes";
const app = createApp({});

const router = createRouter({
    routes: Routes,
    history: createWebHistory(),
});

app.use(router);

app.mount("#app");
