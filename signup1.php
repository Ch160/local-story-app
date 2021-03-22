<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <title>SignUp1</title>
    
</head>
<body>
      <!-----The header section---->
    <header class="header">
    <div class="images">
       <img src="assets/images/natstorelogo.png" class="logo" alt="Local Story App">
    </div>
    <!---Navigation bar begins------>
        <nav class="navbar">
           <ul class="nav-links">  
             <li><a href="index.php">Home</a></li>
             <li><a href="about.php">About Us</a></li>
             <li><a href="contact.php">Contact Us</a></li>
           </ul>
        </nav>
    <!----Navigation bar ends------>
    </header>
           <!---Header Ends----->
    <main class="container-2">
        <section>
            <!-- Main Body Begins  -->
            
            <h2>Welcome</h2>
        </section>
           <!---Sign-Up form begins----> 
        <section class="form-wrapper-1">
         <div class="form-div-1">   
             <h3>New User? Sign Up Here</h3>
              <form action="signup1.php" method="POST" id="create-form"> 
                <input type="text" placeholder="Username" name="uname"><br><br>
                <input type="text" placeholder="Firstname" name="fname"><br><br>
                <input type="text" placeholder="Lastname" name="lname"><br><br>
                <input type="email" placeholder="Email" name="email"><br><br>
                <input type="password" placeholder="Password" name="password"><br><br>
                <input type="password" placeholder="Confirm Password" name="Confirm-password"><br><br>
                <input type="submit" class="button" value="Sign Up" name="signup-button"/>
                
                <a href="index.php" class="Signup"></a>
              </form>
          </div>
        </section>
         <!----Sign-Up form ends---->       
    </main>
         <!---Main Body Ends-----> 
    <footer>
        <div class="footer">
            <h5>Copyright (c) 2021. Robert Gordon University SoC IT Module Project.</h5>

        </div>
    </footer>

    <?php 
           // Initializing form input field variables

        include('connection.php');

     if (isset($_POST['signup-button'])) {
        
        if(!empty($_POST['username']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['password']) &&  !empty($_POST['confirm-password'])){

        
        $userName = trim($_POST['username']);
        $firstName = trim($_POST['firstname']);
        $lastName = trim($_POST['lastname']);
        $email = trim($_POST['email']);
        $userPassword = trim($_POST['Password']);
        $confirmPassword = trim($_POST['confirm-password']);
        $passwordHash = password_hash($Password, PASSWORD_DEFAULT);
     
     $query = "insert into users1(username,firstname,lastname,email,password) values('$username','$firstname','$lastname','$email','$password')";
     
     $run=mysqli_query($conn,$query) or die(mysqli_error());

     if($run){
         echo "form submitted successfully";

     }
     else{
         echo "form not submitted";
     }
     //else{
    //    echo "all fields required";
     
    }
    }
    ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
 <script src="signup1.js"></script>


</body>
</html>

