<?php
$_SESSION['loggedin'] = isset($_SESSION['loggedin']) ? $_SESSION['loggedin'] : false;
$_SESSION['usertype'] = isset($_SESSION['usertype']) ? $_SESSION['usertype'] : "guest";

						if(isset($_SESSION['loggedin'])){
							if(!$_SESSION['loggedin']){
								echo "<a href='login.php' class='login-button'>Login</a>
							<a href='register.php' class='regis-button'>Register</a>";
							}
							else if($_SESSION['usertype']!='admin'){
								echo "<a href='myaccount.php'>My Account</a>
								<a href='logout.php'>Logout <small>(".$_SESSION['username'].")</small></a>";
								// echo $_SESSION['username'];
							}
							else if($_SESSION['usertype']=='admin'){
								echo "<a href='admin.php'>Admin Panel</a>
								<a href='logout.php'>Logout <small>(".$_SESSION['username'].")</small></a>";
								// echo $_SESSION['username'];
							}
							else{
								echo "<a href='login.php' class='login-button'>Login</a>
							<a href='register.php' class='regis-button'>Register</a>";
							}
							}
						
						else{
							echo "<a href='login.php' class='login-button'>Login</a>
							<a href='register.php' class='regis-button'>Register</a>";
						}
						
						?>