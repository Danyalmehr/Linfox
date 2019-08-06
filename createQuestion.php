<?php
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


	<div class="col-md-3">
	 <div class="span3">
                        <div class="sidebar" style="display: inline">
                            <ul class="widget widget-menu unstyled">
                                <li class="left_icon"><a href="dashboard1.php"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>


                                <li class="active left_icon"><a href="Stest.php"><i class="menu-icon icon-inbox"></i>Test</a></li>



                                <li class="left_icon"><a href="previousresults.php"><i class="menu-icon icon-file"></i>Results </a></li>
								                        <li class="left_icon"><a href="certificates.php"><i class="menu-icon icon-certificate"></i>Certificates </a></li>
								                                <li class="left_icon"><a href="index.php"><i class="menu-icon icon-signou"></i>Logout </a></li>

							</ul>

                        </div>

                    </div>
	</div>
<?php
  $lockqry = "LOCK TABLES question READ";
  $fetchqry= "SELECT que_id FROM question ORDER BY que_id DESC LIMIT 1";
  $result = mysqli_query($con,$fetchqry);
  $row = mysqli_fetch_array($result);
  $lastQue_id = $row['que_id'];
  echo "$lastQue_id";
 ?>

    <div class="container-fluid">
          	<div class="row">
              	<div class="col-md-8">
                 <table class="table" id="dynamic_field">
                   <tr><center class="table_heading">This is the question page  <?php echo" test "?><Center></tr>
                    <tr>
                         <th>Question</th>
                         <th>Option 1</th>
                         <th>Option 2</th>
                         <th>Option 3</th>
                         <th>Option 4</th>
                         <th>Correct Answer</th>
                         <th><button name="button" id="add" class="btn button_add btn_success"> <span> add question </span> </button></th>

                    </tr>

                  <form class="" action="insertquestion.php" method="post" id="questionform">
                   <tr>
                      <td><input required type="text" name="data[question][]" value=""></td>
                      <td><input required type="text" name="data[option1][]" value=""></td>
                      <td><input required type="text" name="data[option2][]" value=""></td>
                      <td><input required type="text" name="data[option3][]" value=""></td>
                      <td><input required type="text" name="data[option4][]" value=""></td>
                      <td><input required type="text" name="data[answer][]" value=""></td>

                   </tr>

				             </table>
                     <button class="button" name="submit" style="vertical-align:middle"> <span> SUBMIT </span> </button>
                     </form>

                 </div>

                    </div>
                </div>

                <script>

                $("#add").click(function() {
                  <?php $lastQue_id += 1; ?>
                  $("#dynamic_field").append('<tr id="row"><td><input required type="text" name="question[]" form="questionform" /></td> <td><input type="text" name="data[option1][]" form="questionform" required/> </td> <td><input type="text" name="data[option2][]" form="questionform" required/></td> <td><input type="text" name="data[option3][]" value="" form="questionform" required/></td> <td><input type="text" name="data[option4][]" value="" form="questionform" required/></td> <td><input type="text" name="data[answer][]" value="" form="questionform" required/></td> <td><button name="remove" id="remove" class="btn btn_remove">Remove</button></td></tr>'
                  );


                  });

                  $(document).on('click', '.btn_remove', function(){
                    var button_id = $(this).attr("id");
                    $('#row').remove();
                });

                </script>




	<?php include("include/footer.inc") ?>


  </body>
</html>
