<template>

    <div>
      <canvas id="summaryChart"></canvas>
  
      <!-- Tabla que muestra el resumen -->
      <vue-good-table
        :columns="columns"
        :rows="summaryData"
        :paginate="true"
        :search-options="{ enabled: true }"
      />
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  import { Chart, BarElement, BarController, CategoryScale, Decimation, Filler, Legend, Title, Tooltip} from 'chart.js';

  import { Bar } from 'vue-chartjs'
  import { VueGoodTable } from 'vue-good-table-next';
  import 'vue-good-table/dist/vue-good-table.css';
  
  export default {
    components: {
      VueGoodTable,
    },
    data() {
      return {
        summaryData: [],
        columns: [
          { label: 'ID', field: 'id' },
          { label: 'Total Users', field: 'total_users' },
          { label: 'Extraction Date', field: 'extraction_date' },
        ],
      };
    },
    mounted() {
      axios
        .get('/api/summary')
        .then((response) => {
          this.summaryData = response.data;
          this.renderChart();
        })
        .catch((error) => {
          console.error(error);
        });
    },
    methods: {
      renderChart() {
        const ctx = document.getElementById('summaryChart').getContext('2d');
        new Chart(ctx, {
          type: 'bar',
          data: {
            labels: this.summaryData.map((item) => item.extraction_date),
            datasets: [
              {
                label: 'Total Users',
                data: this.summaryData.map((item) => item.total_users),
                backgroundColor: 'rgba(75, 192, 192, 0.6)',
              },
            ],
          },
          options: {
            scales: {
              y: {
                beginAtZero: true,
              },
            },
          },
        });
      },
    },
  };
  </script>
  
  <style scoped>
  /* Estilos personalizados para la tabla y el gráfico */
  </style>
  