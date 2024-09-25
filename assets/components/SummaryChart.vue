<template>
    <div>
      <canvas id="summaryChart"></canvas>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  import { Chart } from 'chart.js';
  export default {
    data() {
      return {
        summaryData: null,
      };
    },
    mounted() {
      axios.get('/api/summary')
        .then(response => {
          this.summaryData = response.data;
          this.renderChart();  // Render the chart with data
        })
        .catch(error => {
          console.error(error);
        });
    },
    methods: {
  renderChart() {
    const ctx = document.getElementById('summaryChart').getContext('2d');
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: this.summaryData.map(item => item.label),
        datasets: [{
          label: 'Summary Data',
          data: this.summaryData.map(item => item.value)
        }]
      }
    });
  }
}
  }
  </script>
  
  