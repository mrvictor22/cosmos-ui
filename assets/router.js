import { createRouter, createWebHistory } from 'vue-router';
import Login from './components/Login.vue';  // Adjust the path if necessary

const routes = [
    {
        path: '/login',
        name: 'login',
        component: Login
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
