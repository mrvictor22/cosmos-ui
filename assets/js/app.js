/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import '../styles/app.css';
import { createApp } from 'vue';
import App from '../App.vue';
import router from './router';
import vuetify from './vuetify';
import vue3GoogleLogin from 'vue3-google-login'
import VueGoodTablePlugin from 'vue-good-table-next';
import {Bar}  from 'vue-chartjs'
import { Chart, BarElement, BarController, CategoryScale, Decimation, Filler, Legend, Title, Tooltip} from 'chart.js';

// import the styles 
import 'vue-good-table-next/dist/vue-good-table-next.css'
createApp(App)
  .use(router)
  .use(vuetify)
  .use(VueGoodTablePlugin)
  .use(Bar)
  .use(vue3GoogleLogin, {
    clientId: '54637398356-o71pk8nqpevjd860vrgr8r6ssmerkslh.apps.googleusercontent.com'
  })
  .mount("#app");