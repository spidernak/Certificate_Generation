import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: "/hello",
        name: "hello",
        component: () => import('../components/hello.vue')
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router