$(document).ready(function() {
    // Validate form on submit
    $('form').submit(function(event) {
      var form = $(this);
  
      // Check if form is valid
      if (form[0].checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
      }
  
      form.addClass('was-validated');
    });
  
    // Reset form validation on input change
    $('form :input').change(function() {
      $(this).closest('form').removeClass('was-validated');
    });
  });
  