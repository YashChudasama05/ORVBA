<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$contact_no = $_POST['contact_no'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($first_name) && !empty($last_name) && !empty($contact_no) && !empty($email) && !empty($password) && !is_numeric($first_name) && !is_numeric($last_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (id,first_name,last_name,contact_no,email,password) values ('$id','$first_name','$last_name','$contact_no','$email','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "<script>alert('Please enter some valid information !');</script>";
		}
	}
?>



<!doctype html>
<html lang="en">
  <head>
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Register</title>
	
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
      
	</ul>
	
  </div>
</nav>

    <table id="home" border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#292929">
        <tr>
            <td>
                <table border="0" width="85%" cellpadding="15" cellspacing="0" align="center">
                    <tr>
                        <td align="center" valign="middle" colspan="2">
                            <h2>
                                <font face="arial" color="#f3971b" size="9">
                                 <u> Welcome To ORVBA</u>
                                </font>
                            </h2>
					<tr>
                        <td>
                           <div class="container mt-4">
						   <font face="arial" color="skyblue">
							<h3><b>Please Register Here:</b></h3>
							</font>
							<hr/>
							
							<form action="" method="post" class="form-group col-md-9">
								<font face="arial" color="skyblue">
								  <label for="username">First Name</label>
								  <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
								</font>
								<br>
								<font face="arial" color="skyblue">
								  <label for="username">Last Name</label>
								  <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
								</font>
								<br>
								<font face="arial" color="skyblue">
								  <label for="inputcontact1">Contact Number</label>
								  <input type="text" class="form-control" name="contact_no" id="contact_no" placeholder="Contact Number">
								</font>
								<br>
								<font face="arial" color="skyblue">
								  <label for="exampleInputEmail1">E-mail ID</label>
								  <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail ID">
								</font>
								<br>
								<font face="arial" color="skyblue">
								  <label for="inputPassword4">Password</label>
								  <input type="password" class="form-control" name ="password" id="inputPassword4" placeholder="Password">
								</font>
								<br>
								<font face="arial" color="skyblue">
								  <label for="inputPassword4">Conform Password</label>
								  <input type="password" class="form-control" name ="cpassword" id="inputPassword4" placeholder="Conform Password">
								</font>
								<br>
								
								<button class="glow-on-hover" value="save" type="submit">Submit</button><br>
								&nbsp; <br>
								<a href="login.php"><button class="glow-on-hover" type="button">Or click to Login</button></a>
							</form>
							</div>
                        </td>                  
                        </td>
							<td width="55%">
								<img src="Images/lorenzo-hamers-9R0aYsnbE_4-unsplash.jpg" align="left" width="100%">
							</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!--End Home-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
