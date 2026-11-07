import { createRouter, createWebHistory} from "vue-router";
import HomePage from "@/js/pages/HomePage.vue";
import ArtsPage from "@/js/pages/ArtsPage.vue";

const routes = [
    {path: '/', name: 'home', component: () => import('@/js/pages/HomePage.vue') },
    {path: '/arts', name: 'arts', component: () => import('@/js/pages/ArtsPage.vue') },
    {path: '/:pathMatch(.*)*', name: 'not-found', component: () => import('@/js/pages/NotFoundPage.vue') },
];

const router = createRouter({
    history: createWebHistory(),
    routes: routes,
    scrollBehavior (to, from, savedPosition) {
        return savedPosition || { top: 0 }
    }
})

export default router;
