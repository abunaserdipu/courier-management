import { createRouter, createWebHistory } from "vue-router";
import HomeLayout from "../components/layouts/HomeLayout.vue";
import AboutPage from "../components/pages/AboutPage.vue";
import TrackPage from "../components/pages/TrackPage.vue";

const router = createRouter({
    history: createWebHistory(),
    routes: [
        { path: "/", component: HomeLayout },
        { path: "/about", component: AboutPage },
        { path: "/track", component: TrackPage },
    ],
});

export default router;
