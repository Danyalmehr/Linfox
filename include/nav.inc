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
    <title>CSS MenuMaker</title>
 </head>
 <body>

  		<?php if(isset($_SESSION['valid_user'])): ?>

 				<?php
 					$conn  = db_connect();
 					$user_check = $_SESSION['valid_user'];
 					$ses_sql = "select fname from user where email='$user_check'";
 					$result = $conn -> query($ses_sql);
 					$row = $result -> fetch_assoc();
 					$fname = $row['fname']; ?>

          <div id='cssmenu' class="cssmenu">
          <ul>
             <li><a href='dashboard1.php'><span>Home</span></a></li>
             <li class='has-sub'><a href=''><span>Test</span></a>
                <ul>
                   <li class='last'><a href='Stest.php'><span>Take test</span></a></li>
                   <li class='last'><a href='Previousresult.php'><span>Previous test results</span></a></li>
                </ul>
             </li>


             <li class='has-sub'><a href=''><span> <?php echo " Welcome $fname ! "; ?></span></a>
                <ul>
                   <li class='last'><a href='index.php'><span>Sign-out</span></a></li>

                </ul>
             </li>


      </ul>
 				<?php else: ?>


                 <?php endif; ?>

 </div>
