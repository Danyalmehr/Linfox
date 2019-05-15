     <nav class="container-fluid navbar navbar-expand-lg bg-light navbar-light" style="padding:1%; border-bottom:1px solid black;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="collapsibleNavbar">
            <!-- md-auto: left, ml-auto: right, mx-auto: center -->
            <ul class="navbar-nav md-auto">
			
			 <li class="nav-item">
                    <a class="nav-link" href="dashboard.php" id="0" onClick="nav_item_selected(0)"> Home </a>
                </li>
                <li class="nav-item"><a class="nav-link" id="1" onClick="nav_item_selected(1)" href="courses.php"> Courses </a></li>
    
                           
			      <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="2" onClick="nav_item_selected(2)" data-toggle="dropdown"> Test
                    </a>
                    <div class="dropdown-menu">
						<a class="dropdown-item" href="test.php"> Take test </a>
                        <a class="dropdown-item" href="previousresults.php"> Previous test result </a>
                    </div>
				 </li>               
				
              			
            </ul>
        </div>
		<?php if(isset($_SESSION['valid_user'])): ?>
		
		
			
		
              		
				<?php
					$conn  = db_connect();
					$user_check = $_SESSION['valid_user'];
					$ses_sql = "select fname from user where email='$user_check'";
					$result = $conn -> query($ses_sql);
					$row = $result -> fetch_assoc();
					$fname = $row['fname'];?>
					
					
				<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="5" onClick="nav_item_selected(4)" data-toggle="dropdown"> 
				  <?php echo " Welcome $fname! "; ?>
                    </a>
                    <div class="dropdown-menu">
 						<a class="nav-link" href="index.php" id="5" onClick="nav_item_selected(5)">Sign-out</a>                        
                    </div>
				 </li>       
					
		
					
				</a>
                </li>
				<?php else: ?>	
                <li class="nav-item">
                    
                </li>
                
               
                <?php endif; ?>
    </nav>