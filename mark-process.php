<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location: index.php');
    exit;
}
//must appear BEFORE the <html> tag
session_start();
include_once('database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/test.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

      <link type="text/css" href="css/theme.css" rel="stylesheet">
    <script src="js/nav.js"></script>
    <script src="js/read_more.js"></script>

        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>



    <link type="text/css" href="css/theme.css" rel="stylesheet">

    <title> Take test </title>

	<style>

    .user-admin-menu>h2 {text-align: center;
    /* Black background with 0.5 opacity */
    color: Black;}

    .user-admin-menu
    {
      align-items: center;text-align: center;
      background: rgb(0,0,0,0.1); /* Fallback color */
      background: rgba(0, 0, 0, 0.1); /* Black background with 0.5 opacity */
      color: #ff7733;
      padding:3%;
    }
      .container-menu {
      position: relative;
      width: auto;
      display: inline-block;

    }
  ul.unstyled, ol.unstyled {
     margin-left: 0;
     list-style: none;
}
		.span3 {

			margin-right: 4em;
		}
    .widget-menu {
    background: #fff;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
     border-radius: 3px;
    overflow: hidden;
}

	</style>
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>

    <div class="container-fluid">

      <?php include("admin-side-dash.html") ?>
      <div class="row">
      <div class="col-md-12">
        <div class="user-admin-menu">
          <?php
                 $selected = $_POST['options'];
                // echo "<h2>You marked user as : $selected</h2>";
                 $ans_id = mysqli_real_escape_string($con, $_POST['ans_id']);
                     $updateqry = "UPDATE useranswer SET ans_status='$selected'
                     WHERE ans_id = $ans_id";
                     if(mysqli_query($con,$updateqry))
                     {
                       echo "<h2> the question for the user was succesfully marked as $selected!! </h2>". mysqli_error($con);

                     }
                     else
                     {
                       echo "<h2> something is wrong </h2>". mysqli_error($con);;
                     }


                 ?>

           </div>
          </div>
            </div>
                </div>

	<?php include("include/footer.inc") ?>

<script type="text/javascript" src="formjs.js">

</script>

  </body>
</html>
