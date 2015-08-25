
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Números Primos</title>

    <!-- Bootstrap css CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
    <!-- Google Fonts CDN -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Indie+Flower" type="text/css"  />
    <!-- CSS propio -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) CDN -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- jQueryUI CDN -->
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <!-- Bootstrap CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <!-- Modernizr CDN -->
    <script src="http://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.7.2.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



  </head>
  <body>

    <div class="container">

       	<div class="row">

    		<div class="col-xs-12">

		    	<form action="primos.php" method="POST" class="form-inline">
		        	<input type="text" class="form-control" name="numero" placeholder="introduce un número">
		        	<input type="submit" class="btn btn-default" value="comprobar">
		        </form>	

    		</div><!-- .col -->

    	</div><!-- .row -->

    </div><!-- .container -->
    
  </body>
</html>

