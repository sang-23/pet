// Function to add a new form section
function addFormSection() {
  var container = document.getElementById('container');
  var template = document.getElementById('template');

  // Clone the template
  var clone = template.content.cloneNode(true);

  // Add the cloned section to the container
  container.appendChild(clone);
}

// Function to remove a form section
function removeFormSection(button) {
  var section = button.parentNode;
  var container = section.parentNode;

  // Remove the section from the container
  container.removeChild(section);
}