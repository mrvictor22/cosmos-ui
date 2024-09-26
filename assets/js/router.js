import { createRouter, createWebHistory } from 'vue-router';
import SummaryChart from '../components/SummaryChart.vue';
import Login from '../components/Login.vue';

const routes = [
    { path: '/login', component: Login },
    { path: '/summary', component: SummaryChart }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;