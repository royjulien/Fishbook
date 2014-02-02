	<nav>
    	<ul>
        	<li><a href="index.php?state=<?php echo $FB_STATE['status']; ?>">Status</a></li>
            
            <?php
				if($_SESSION['logged_in'] === true)
				{
					echo '<li><a href="index.php?state='.$FB_STATE['home'].'">Home</a></li>'."\n";
					echo '<li><a href="index.php?state'.$FB_STATE['activity'].'">Activity</a></li>'."\n";
        			echo '<li><a href="index.php?state=<'.$FB_STATE['action'].'">Action</a></li>'."\n";
				}
				else
				{
echo '<li><a href="index.php?state='.$FB_STATE['register'].'">Register</a></li>'."\n";				
				}
			?>
           
  	         	<ul>
  	              
                <?php
				if($_SESSION['logged_in'] === true)
				{
                	echo '<li><a href="index.php?state='.$FB_STATE['logout'].'">Logout</a></li>'."\n";

					echo '<li><a href="index.php?state='.$FB_STATE['profile'].'">Change Profile</a></li>'."\n";
				}
				else 
				{
                	echo '<li><a href="index.php?state='.$FB_STATE['login'].'">Login</a></li>'."\n";
				}
        		?>
                
                

                    
                    
                    
                    
                	
                </ul>
            </li>
        </ul>
    
	</nav>
    