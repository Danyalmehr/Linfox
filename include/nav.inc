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
       
    </nav>