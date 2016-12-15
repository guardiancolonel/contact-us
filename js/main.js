$(function() {
	$('#contact_form').on('submit', function(e) {
            	e.preventDefault();
              var validForm = form_validation($(this));            
            	
            	// Server Messages
              if ( validForm === true) {
                var formData = $(this).serialize();
                  $.ajax({
                  url: "contact_us.php",
                  type: "POST",
                  data: formData,
                  datatType: "json"
                }).done(function( data ) {
                  console.log( data );
                }).fail(function( data ) {
                  console.log( data );
                });
              }
            	
            });

  function form_validation(form) {
    var validForm = true;
    form.find('input').each(function(key, value) {
        if ( $(value).val().length === 0 ) {
          $(value).parent().addClass('has-error');
          validForm = false;
        }

        if ( $(value).attr('name') === 'email' ) {
          if ( ! validateEmail( $(value).val() ) ) {
            $(value).parent().addClass('has-error');
            validForm = false;
          }
        }
    });

    return validForm;
  }

  function validateEmail(email) {
      var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
  }
});
