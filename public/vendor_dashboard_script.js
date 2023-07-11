// profile image code
function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgInp").change(function(){
    readURL(this);
}) 

//datatable code
var exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = exampleModal.querySelector('.modal-title')
  var modalBodyInput = exampleModal.querySelector('.modal-body input')

  modalTitle.textContent = 'New message to ' + recipient
  modalBodyInput.value = recipient
})

$('.inputFormClass').on('submit', function (e) {
    e.preventDefault();
    var name = $("#recipient-name").val();
    var email = $("#Email").val();
    var contactNo = $("#ContactNo").val();
    var petType = $("#pet-type").val();
    var petName = $("#PetName").val();
    var remainingWeeks = $("#RemainingWeeks").val();
    var markup = "<tr><td>  <div class='d-flex align-items-center'> <div class='dataColumnOne'><a href='#'><p class='customerName mb-0'>"+ name +"</p></a><p class='customerEmail mb-0'>"+ email +"</p></div></div></td><td>" + contactNo + "</td><td>" + petType + "</td><td>"+ petName +"</td><td>" + remainingWeeks + "</td></tr>";

    $('#myTable').DataTable().row.add($(markup)).draw(false);

 
    $('.res').val('');
    $(".exampleModal").modal('hide');
  });

$(document).ready(function() {
    $("#myTable").DataTable({
      aaSorting: [],
      responsive: true,
  
      columnDefs: [
        {
          responsivePriority: 1,
          targets: 0
        },
        {
          responsivePriority: 2,
          targets: -1
        }
      ]
    });
  
    $(".dataTables_filter input")
      .attr("placeholder", "Search here...")
      .css({
        width: "300px",
        display: "inline-block"
      });
  
    $('[data-toggle="tooltip"]').tooltip();
   

});


// chart
// Sample data for number of customers per week
const customersPerWeek = [800, 650, 720, 860, 520, 680, 750];

// Function to draw the line chart
function drawLineChart(data) {
  const ctx = document.getElementById('line-chart').getContext('2d');

  // Create a gradient for the background grid
  const gradient = ctx.createLinearGradient(0, 0, 0, 300);
  gradient.addColorStop(0, '#f7f7f7');
  gradient.addColorStop(1, '#ffffff');

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
      datasets: [
        {
          label: 'Customers',
          data: data,
          borderColor: '#0066FF',
          backgroundColor: gradient,
          pointBackgroundColor: '#0066FF',
          pointRadius: 4,
          borderWidth: 2,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        y: {
          beginAtZero: true,
          max: 1000,
          grid: {
            color: '#ebebeb',
          },
          ticks: {
            stepSize: 200,
          },
        },
      },
      plugins: {
        tooltip: {
          enabled: false,
          mode: 'index',
          intersect: false,
          custom: function (tooltip) {
            // Tooltip Element
            let tooltipEl = document.getElementById('chartjs-tooltip');

            // Create tooltip element if it doesn't exist
            if (!tooltipEl) {
              tooltipEl = document.createElement('div');
              tooltipEl.id = 'chartjs-tooltip';
              tooltipEl.classList.add('custom-tooltip');
              document.body.appendChild(tooltipEl);
            }

            // Hide if no tooltip
            if (tooltip.opacity === 0) {
              tooltipEl.style.opacity = 0;
              return;
            }

            // Set tooltip content and position
            if (tooltip.dataPoints) {
              const dataPoint = tooltip.dataPoints[0];
              const dataset = tooltip.chart.data.datasets[0];

              // Get the current coordinates of the hovered point
              const pointX = tooltip.chart.scales.x.getPixelForValue(dataPoint.label);
              const pointY = tooltip.chart.scales.y.getPixelForValue(dataPoint.raw);

              // Update tooltip content
              tooltipEl.innerHTML = dataset.label + ': ' + dataPoint.raw;

              // Set tooltip position
              tooltipEl.style.opacity = 1;
              tooltipEl.style.left = pointX + 'px';
              tooltipEl.style.top = pointY + 'px';
            }
          },
        },
      },
    },
  });
}

// Call the function to draw the line chart with the provided data
drawLineChart(customersPerWeek);


// Doughnut-chart
const chartData = {
    labels: ["Dogs", "Cats", "Hamsters", "Birds", "Others"],
    data: [30, 17, 10, 7, 36],
  };
  
  const myChart = document.querySelector(".my-chart");
  const ul = document.querySelector(".programming-stats .details ul");
  
  new Chart(myChart, {
    type: "doughnut",
    data: {
      labels: chartData.labels,
      datasets: [
        {
          label: "Language Popularity",
          data: chartData.data,
        },
      ],
    },
    options: {
      borderWidth: 10,
      borderRadius: 2,
      hoverBorderWidth: 0,
      plugins: {
        legend: {
          display: false,
        },
      },
    },
  });
  
  const populateUl = () => {
    chartData.labels.forEach((l, i) => {
      let li = document.createElement("li");
      li.innerHTML = `${l}: <span class='percentage'>${chartData.data[i]}%</span>`;
      ul.appendChild(li);
    });
  };
  
  populateUl();





// // Sample data for pet categories
// const petsData = {
//     dogs: 300,
//     cats: 250,
//     birds: 150,
//     lizards: 100,
//     hamsters: 75,
//     others: 125,
//   };
  
//   // Function to draw the doughnut chart
//   function drawDoughnutChart(data) {
//     const ctx = document.getElementById('doughnut-chart').getContext('2d');
  
//     new Chart(ctx, {
//       type: 'doughnut',
//       data: {
//         labels: Object.keys(data),
//         datasets: [
//           {
//             data: Object.values(data),
//             backgroundColor: [
//               '#FF6384',
//               '#36A2EB',
//               '#FFCE56',
//               '#8B4A9B',
//               '#4BC0C0',
//               '#E7E9ED',
//             ],
//           },
//         ],
//       },
//       options: {
//         responsive: true,
//         maintainAspectRatio: false,
//         cutout: '70%',
//         plugins: {
//           legend: {
//             display: false,
//           },
//           tooltip: {
//             callbacks: {
//               label: function (context) {
//                 const label = context.label || '';
//                 const value = context.formattedValue || '';
  
//                 return label + ': ' + value;
//               },
//             },
//           },
//         },
//       },
//     });
//   }
  
//   // Fetch the pet data from the Laravel backend (replace with your own endpoint)
//   fetch('/pets-data')
//     .then((response) => response.json())
//     .then((data) => {
//       // Call the function to draw the doughnut chart with the retrieved data
//       drawDoughnutChart(data);
//     })
//     .catch((error) => {
//       console.error('Error:', error);
//     });
  