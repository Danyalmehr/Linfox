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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   
    <title>About us</title>
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>
    
    <div class="container-fluid">
    	<div class="row">
        	<div class="col">
            	
            		<h2>About Us</h2>
            		<p>worldofsoccer.com is more than an ordinary soccer-dedicated web site.
We are a team of fervent football fans who live and breathe the most beautiful game and who are keen to share their passion and excitement with the rest of the world. Our mission is simple – we want to spread our love for soccer and share it with all of our kindred spirits.
Whether it is the latest news of the general nature you are after, the transfer dealings you can find in our transfer news and rumours section, filled with the up-to-the-minute transfer stories from local sources, or the extensive coverage of all relevant soccer events around the globe – through well-informed and opinionated articles from our top writers – worldofsoccer.com is the place to visit.
For all of those who like to push their love for soccer to a higher level and are ardent about following detailed statistics that they can put in a good use to win a (responsible) bet or two, we are here to offer an extensive betting guide and an in-depth betting section regularly updated with the comprehensive match predictions, betting promotions and tips.
Fans who are looking for the best ticket price deals can also turn to worldofsoccer.com for help since our soccer tickets section will allow them to find tickets for all the desired soccer events at the best prices.</p> <br>

            	
            </div>
        </div>
    </div>
	<?php include("include/footer.inc") ?>
</body>
</html>