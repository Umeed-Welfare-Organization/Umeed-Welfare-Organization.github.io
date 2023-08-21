// Get a reference to the form element
var registrationForm = document.getElementById("registrationForm");

// Add a submit event listener to the form
registrationForm.addEventListener("submit", function(event) {
    // Prevent the form from submitting normally
    event.preventDefault();

    // Display an alert when the form is submitted
    alert("Form submitted!");
    
    // You can add more code here to handle form data, AJAX requests, etc.
});
