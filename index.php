<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Contact Us - PHP</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
<body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">PHP Contact Form</a>
        </div>
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <form action="contact_us.php" method="POST" role="form" id="contact_form">
          	<legend>Contact Us</legend>
          
          	<div class="form-group">
          		<label for="">Name</label>
          		<input type="text" class="form-control" name="name" id="name" placeholder="Name">
          	</div>
          	<div class="form-group">
          		<label for="">Email</label>
          		<input type="text" class="form-control" id="email" name="email" placeholder="Email">
          	</div>
          	<div class="form-group">
          		<label for="">Subject</label>
          		<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
          	</div>
          
          	<button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>

      <hr>

      <footer>
       
      </footer>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            $('#contact_form').on('submit', function(e) {
            	e.preventDefault();
            	var formData = $(this).serialize();

              $(this).find('input').each(function(key, value) {
                  if ( $(value).val().length === 0 ) {
                    console.log($(value).attr('name') + " Can't be empty");
                  }
              });
            	// Form Validation
            	// Server Messages
            	// $.ajax({
            	// 	url: "contact_us.php",
            	// 	type: "POST",
            	// 	data: formData,
            	// 	datatType: "json"
            	// }).done(function( data ) {
            	// 	console.log( data );
            	// }).fail(function( data ) {
            	// 	console.log( data );
            	// });
            });
        </script>
    </body>
</html>