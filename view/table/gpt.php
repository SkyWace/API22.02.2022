<!DOCTYPE html>
<html>
<head>
  <title>Graphique de température et d'humidité</title>
  <style>
    canvas {
      -moz-user-select: none;
      -webkit-user-select: none;
      -ms-user-select: none;
    }
  </style>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
</head>
<body>
  <div style="width: 75%">
    <canvas id="myChart"></canvas>
  </div>

  <script>
    // Récupération des données depuis une API
    fetch('http://20.199.116.36:3000/api/v1/posts/1')
      .then(response => response.json())
      .then(data => {
        const temperatures = data.temperatures;
        const humidites = data.humidites;

        // Création du graphique
        const ctx = document.getElementById('myChart').getContext('2d');
        const chart = new Chart(ctx, {
          type: 'line',
          data: {
            labels: temperatures.map((temp, i) => `Mesure ${i + 1}`),
            datasets: [
              {
                label: 'Température (°C)',
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                data: temperatures,
              },
              {
                label: 'Humidité (%)',
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                data: humidites,
              },
            ],
          },
          options: {
            scales: {
              yAxes: [
                {
                  ticks: {
                    beginAtZero: true,
                  },
                },
              ],
            },
          },
        });
      })
      .catch(error => console.error(error));
  </script>
</body>
</html>