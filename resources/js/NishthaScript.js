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
    var markup = "<tr><td><p class='customerName'>"+ name +"</p><p class='customerEmail'>"+ email +"</p></td><td>" + contactNo + "</td><td>" + petType + "</td><td>"+ petName +"</td><td>" + remainingWeeks + "</td></tr>";

    $('#myTable').DataTable().row.add($(markup)).draw(false);

 
    $('.res').val('');
    $(".exampleModal").modal('hide');
  });

  // Produces width of .barChart
$(document).ready(function() {
    $('.graph-bar').each(function() {
       var dataWidth = $(this).data('value');
       $(this).css("width", dataWidth + "%");
    });
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
   // Function to check if the current week is between 6 and 8 (inclusive)
function checkWeekStatus(startingDate) {
  // Get the current date
  var currentDate = new Date();

  // Calculate the number of weeks between the starting date and the current date
  var weeks = Math.floor((currentDate - startingDate) / (7 * 24 * 60 * 60 * 1000));

  // Check if the current week is between 6 and 8 (inclusive)
  if (weeks >= 6 && weeks <= 8) {
    console.log("ongoing");
  } else {
    console.log("upcoming");
  }
}
