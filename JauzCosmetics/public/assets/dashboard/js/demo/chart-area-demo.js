  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Maquillaje', 'Accesorios'],
      datasets: [{
        label: 'Numero de productos por categoría',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

  const barraLateral = document.getElementById('barChart');

  let barraChart = {
    label: 'Density of Planets (kg/m3)',
    data: [5427, 5243, 5514, 3933, 1326, 687, 1271, 1638],
    backgroundColor: [
      'rgba(0, 99, 132, 0.6)',
      'rgba(30, 99, 132, 0.6)',
      'rgba(60, 99, 132, 0.6)',
      'rgba(90, 99, 132, 0.6)',
      'rgba(120, 99, 132, 0.6)',
      'rgba(150, 99, 132, 0.6)',
      'rgba(180, 99, 132, 0.6)',
      'rgba(210, 99, 132, 0.6)',
      'rgba(240, 99, 132, 0.6)'
    ],
    borderColor: [
      'rgba(0, 99, 132, 1)',
      'rgba(30, 99, 132, 1)',
      'rgba(60, 99, 132, 1)',
      'rgba(90, 99, 132, 1)',
      'rgba(120, 99, 132, 1)',
      'rgba(150, 99, 132, 1)',
      'rgba(180, 99, 132, 1)',
      'rgba(210, 99, 132, 1)',
      'rgba(240, 99, 132, 1)'
    ],
    borderWidth: 2,
    hoverBorderWidth: 0
  };

  let chartOptions = {
    scales: {
      yAxes: [{
        barPercentage: 0.5
      }]
    },
    elements: {
      rectangle: {
        borderSkipped: 'left',
      }
    }
  };
  let barChart = new Chart(barraChart, {
    type: 'horizontalBar',
    data: {
      labels: ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune"],
      datasets: [barraChart],
    },
    options: chartOptions
  });