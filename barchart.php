<!DOCTYPE html>
<html>
<head>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    /* Style for the chart container */
    #chartContainer {
      width: 300px; /* Set the desired width */
      height: 200px; /* Set the desired height */
    }
  </style>
</head>
<body>
  <!-- Division containing the chart -->
  <div id="chartContainer">
    <canvas id="myChart"></canvas>
  </div>

  <script>
    // Sample data for the bar chart
    const data = {
      labels: ['Sun', 'Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat'],
      datasets: [{
        data: [9, 40, 10, 30, 5, 13, 20],
        backgroundColor: [], // Empty array to store dynamic colors
        borderWidth: 0 // Setting border width to 0 to remove the border lines
      }]
    };

    // Set dynamic colors based on bar values
    const colors = data.datasets[0].data.map(value => {
      if (value < 10) {
        return 'rgba(45, 205, 110, 0.7)';
      } else if (value < 50) {
        return 'rgba(255, 255, 55, 0.7)';
      } else {
        return 'rgba(255, 99, 132, 0.7)';
      }
    });

    // Assign dynamic colors to the dataset
    data.datasets[0].backgroundColor = colors;

    // Create the bar chart
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
      type: 'bar',
      data: data,
      options: {
        maintainAspectRatio: false,
        responsive: true,
        scales: {
          x: {
            grid: {
              display: false // Hiding vertical gridlines
            }
          },
          y: {
            grid: {
              display: false // Hiding horizontal gridlines
            },
            beginAtZero: true
          }
        },
        plugins: {
          legend: {
            display: false // Hiding the legend/title
          }
        }
      }
    });
  </script>
</body>
</html>
