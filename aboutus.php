<?php

session_start();

	include("connection.php");
	include("functions.php");


?>



<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>About Us</title>
	
	 <style>
.glow-on-hover {
    width: 220px;
    height: 50px;
    border: none;
    outline: none;
    color: #fff;
    background: #111;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 10px;
}
.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}
.glow-on-hover:active {
    color: #000
}

.glow-on-hover:active:after {
    background: transparent;
}
.glow-on-hover:hover:before {
    opacity: 1;
}
.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #111;
    left: 0;
    top: 0;
    border-radius: 10px;
}
@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}

</style>
</head>
<body style="background:#292929">
   
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><b>On Road Vehicle Breakdown Help Assistance</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="">Home</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="signup.php">signup</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="feedback.php">Feedback</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="aboutus.php">About Us</a>
      </li>
      
	</ul>
	
	  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome "?></a>
      </li>
  </ul>
  </div>
	
  </div>
</nav>
   
    <table id="home" border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#292929">
        <tr>
            <td>
                <table border="0" width="85%" cellpadding="15" cellspacing="0" align="center">
                    <tr>
                        <td align="center" valign="middle">
                            <h2>
                                <font face="arial" color="#f3971b" size="9">
                                  <u>  About Us</u>
                                </font>
                            </h2>
							<tr>
                        <td align="center">
                            <img src="Images/logan-meis-7qLT-Msda1k-unsplash.jpg"  width="80%">
                        </td>
                        
                       
                        </td>
                    </tr>
                </table>
            </td>

        </tr>


    </table>
    <!--End Home-->

    <!--Start About-->
    <table id="about" border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#292929">
        <tr>
            <td>
                <table border="0" width="85%" cellpadding="15" cellspacing="0" align="center">
                    <!-- Heading Start-->
                    <tr>
                        <td height="189" align="center" valign="middle" colspan="4">
                                <font face="arial" color="#f3971b" size="7">
                                <u>    About ORVBA</u>
                                </font>
                                <hr width="79" color="#f3971b">
                        
                        </td>
                    </tr>
                    <!--Heading End-->
                    <tr>
                        <td width="49%">
                            <img src="Images/damir-kopezhanov-w-bRrLmXODg-unsplash.jpg" alt="Saurabh Shukla"  width="96%">
                        </td>
                        <td width="60%">
                            <font face="arial" color="#ffffff" size="4">
                            
                               ~ On Road Vehicle Breakdown Assistance is going to be good solution for the people who seek help in the remote location with mechanical issues of their vehicle.<br>
							   ~This system to help those who are in need when their car break down along the roads. <br>
							   ~This service helps to overcome this issue by providing mechanic details in one click.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            &nbsp;
                        </td>
                    </tr>
                </table>
            </td>

        </tr>


    </table>

        <table id="services" border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#c2c0c3">
        <tr>
            <td>
                <table border="0" width="85%" cellpadding="15" cellspacing="0" align="center">
                    <!-- Heading Start-->
                    <tr>
                        <td height="180" align="center" valign="middle" colspan="3">
                                <font face="arial" color="#292929" size="6">
                                     Contact Us
                                </font>
                                <hr width="100" color="##292929">
                        
                        </td>
                    </tr>
                    <!--Heading End-->
                    <tr>
                       <td width="60%">
                            <font face="arial" color="#292929" size="5">
                              <p align="left">~ Yash Chudasama <br> Mobile No: +91 6325897412 </p>
                              <p align="center">~ Vaibhav Chauhan <br> Mobile No: +91 7895897412 </p>
                              <p align="right">~ Sunil Joshi <br> Mobile No: +91 632536582 </p> 							  
							  </td> 
                    </tr>
                    <tr>
                        <td>
                            &nbsp;
                        </td>
                    </tr>
                </table>
            </td>

        </tr>


    </table>
	
    <table id="testimonial" border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#353535">
        <tr>
            <td>
                <table border="0" width="85%" cellpadding="15" cellspacing="0" align="center">
                    <!-- Heading Start-->
                    <tr>
                        <td height="180" align="center" valign="middle" colspan="3">
                          <a  href="welcome.php"><button class="glow-on-hover" type="button">BACK TO HOME PAGE</button></a>
                         </td>
                    </tr>           
				</table>
			</td>
		</tr>
	</table> 
</body>
</html>