<?php

//must appear BEFORE the <html> tag
session_start();
include_once('include/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/test.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/nav.js"></script>
    <script src="js/read_more.js"></script>

	 <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>

    <title>Previous Results</title>

	<style>

	@media only screen and (max-width: 768px) and (min-width: 428px) {

		h1, h2{
				font-size: 18px;
			}

		body .admin-side{
			width: 100%;
			display: inline;
		}


					.sidebar {
    width: 10%;
    height: 90%;
    position: relative;
			display: inline;


  }
 li a {float:left;
	height: 1%;
	 border-width: 0;

	  margin-left: 0.15em;
	 font-size: 9px;
		}

		i {
			float:left;

		}



		.results{
			margin-left: 25em;
		}


		}

		@media only screen and (max-width: 428px) {

			h1, h2{
				font-size: 18px;
			}

		body .admin-side{
			width: 100%;
			display: inline;
		}

		.sidebar {
    width: 10%;
    height: 90%;
    position: relative;
			display: inline;


  }
 li a {float:left;
	height: 1%;
	 border-width: 0;

	  margin-left: 0.05em;
	 font-size: 7px;
		}

		i {
			float:left;

		}
		}
		}

	</style>


</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>

    <div class="container-fluid">
      <?php include("user-side-dash.html") ?>

		<div class="sticky-top">


	</div>

    	<div class="row">


          <div class="span8">
                  	<h2> THIS IS certificates PAGE</h2>

        </div>
    </div>
	</div>
	<?php include("include/footer.inc") ?>
</body>
</html>
