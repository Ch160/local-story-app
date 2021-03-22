<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <title>Sign-In</title>
</head>

<body>
    <header class="header">

        <div class="images">
            <img src="assets/images/natstorelogo.png" class="logo" alt="Local-Story App">
        </div>

        <nav class="navbar">
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>

    </header>


    <main class="container">

            <!-- Main body begins here-->
            <section class="form-wrapper-2">
                <h4 class="form-info"> kindly Login to access your account</h4>
               <div class="form-div">
                    <form action="signin.php" method="POST" id="create-form">
                        <input type="email" placeholder="Email" name="email">
                        <input type="password" placeholder="Password"  name="password">
                        <div class="login">
                        <input type="submit" value="Login">
                        </div>
                        <a href="signup1.php" class="ca">Create an Account</a>
                    </form>

                </div>

            </section>
             
    </main>
           <!---Main Body Ends----->
    <footer>
        <div class="footer">
            <h4>Copyright 2021. Robert Gordon University SoC IT Module Project by Okechukwu  </h4>

        </div>
    </footer>

    
     
     </body>
     
     </html>
     
     <?php
     
     include("connection.php"); //Establishing connection with our database
if(empty($_POST["email"]) || empty($_POST["password"]))
{
    echo "Both fields are required.";
}else
{
 $email=$_POST['email'];
 $password=$_POST['password'];

 //Checking to see if user exist in the database
 $sql="SELECT uid FROM 'users1' WHERE  email='$email' and password='$password'";

 //Code to direct to the next page if database exist
 $result=mysqli_query($conn,$sql);
 if($result)
 {

 if($result & mysqli_num_rows($result) == 1)
 {
 header("location: index.php"); // Redirecting To another Page
 }else
{
 echo "Incorrect username or password";
 }
}
}
?>