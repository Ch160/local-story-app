<?php
      include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <title>Local-Story App</title>

</head>
<body>
<header class="header">
    <div class="images">
        <img src="assets/images/natstorelogo.png" class="logo" alt="Local-Story App">
    </div>
    <nav class="navbar">
       <ul class="nav-links">  
           <li><a href="layout.php">Home</a></li>
           <li><a href="#">About</a></li>
           <li><a href="#">Contact Us</a></li>
           <li><a href="#">Login</a><li>
           <li><a href="#">SignUp</a><li>
        </ul>
    </nav>
    </header>
    <main>
        <h1> Aberdeen </h1>
        <h2>Population Census</h2>
        <p> It is the third most populous city in Scotland.......</p>
        <div class="users1-container">
        <?php
             if (isset($_POST['submit-search'])) {
                 $search = mysqli_real_escape_string($conn,$_POST['search']);
                 $sql = "SELECT * FROM users1 WHERE a_title LIKE '%$search%' OR a_text LIKE '%$search%'OR a_author LIKE '%$search%'";
                 $result = mysqli_query($conn, $sql);
                $queryResult = mysqli_num_rows($result);
                 
                if ($queryResult > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<a href='article.php?title=".$row['a_title']."'> 
                        <div class='users1-box'>
                               <h3>".$row['a_title']."</h3>
                               <p>". $row['a_text']."</p>
                               <p>". $row['a_author']."</p>
                            </div></a>";
                    }
                } else {
                    echo "There are no results matching your search!";
                }
             }
        ?>                            

    </main>
    <footer>
        <div class="footer">
           <div class="navbar1">
              <a href="#" class="active"></a>
              <a href="blog.php">Blog</a>
              <a href="privacy.php">Privacy Policy</a>
           </div>
             <h3>Copyright(c)2021.RGU SOC IT Module Project.</h3>
       
        </div>      
        
        
    </footer>

</body>
</html>