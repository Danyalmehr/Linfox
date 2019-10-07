<?php
//must appear BEFORE the <html> tag
include_once('include/database.php');
?>



    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css\nav.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="script.js"></script>
    <title> CSS MenuMaker </title>
 </head>



 <style>
 .user_image{ border: 1px solid;
   border-radius: 50px;
 height: 60px;}
 </style>

 <body>

<?php if(isset($_SESSION['valid_user'])): ?>
        <?php
 					$conn  = db_connect();
 					$user_check = $_SESSION['valid_user'];
 					$ses_sql = "select fname, email , image_name, user_type from user where email='$user_check'";
 					$result = $conn -> query($ses_sql);
 					$row = mysqli_fetch_assoc($result);
 					$fname = $row['fname'];
          $user_type = $row['user_type'];
          $image_name = $row['image_name'];
          $email = $row['email'];

        ?>

          <div id='cssmenu' class="cssmenu">
          <ul>
            <li>  <?php echo " <img class='user_image' src='images/".  $image_name."' width='60px' height='auto'>";?></li>

            <?php if ($user_type == 'Admin')
              {
                echo "<li><a href='admindashboard.php'><span> Home </span></a></li>";
              }else {
                echo "<li><a href='dashboard.php'><span> Home </span></a></li>";
              }


              ?>


          <!-- <li class='has-sub'><a href=''><span> Test </span></a>
              <ul>
                <li class='last'><a href='Stest.php'><span> Take test </span></a></li>
                <li class='last'><a href='Previousresult.php'><span> View Previous Results </span></a></li>
              </ul>
            </li>-->

            <li class='has-sub'><a href=''><span> <?php echo " Welcome $fname! "; ?></span></a>

              <ul>
                <li class='last'><a href='signout.php'><span> Log Out </span></a></li>
              </ul>
            </li>
          </ul>

        <?php endif ?>
 </div>
