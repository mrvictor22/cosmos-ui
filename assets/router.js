import { createRouter, createWebHistory } from 'vue-router';
import SummaryChart from './components/SummaryChart.vue';

const routes = [
    { path: '/summary', component: SummaryChart }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
