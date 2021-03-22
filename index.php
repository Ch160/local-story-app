<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
          $("#myInput").on("keyup",function(){
            var value =
            $(this).val().toLowerCase();
            $("#myList li").filter(function(){
              $(this).toggle($(this).text().toLowerCase().index0f(value)>-1)
            });
          });
        });
    </script> 
      
    
    <title>Home</title>
</head>
<body> 
        <!---Logo bar begins--->
       <header class="header">
            <div class="images">
               <img src="assets/images/natstorelogo.png" class="logo" alt="Local-Story App">
            </div>
        <!---Logo bar ends----->
                     <!---Navigation bar begins--->
                     <nav class="navbar">
                         <ul class="nav-links">  
                             <li><a href="readstory.php">Read Story</a></li>
                             <li><a href="index.php">Home</a></li>
                             <li><a href="about.php">About Us</a></li>
                             <li><a href="contact.php">Contact Us</a></li>
                             <li><a href="signin.php">Login</a></li>
                          </ul>
                      </nav>
                     <!----Navigation bar ends----->
        </header>
    <main>
    <!--The main body begins-->
    <section class="container">
         <h2>Welcome to a Home of Local Story Adventure</h2> 
        
        <div class="form"> 
          <form action="search.php" method="POST">
              <input type="text" placeholder="Enter a Town" name="enter town">
              <button type="submit" class="search">Submit</button>
          </form>
              
        </div>
      </section>    
      
           <aside>  
               <div class="images">
                   <img src="assets/images/banner3(3).jpg" class="banner" alt="banner">
               </div>
        
           </aside>
        
            <div class="text">
                <p>Stories have always been a primal form of communication.</p>
                <p>They connect us to a larger self and universal "truth"</p>
                <p>Pamela B.Rutledge, The Psychological Power of Storytelling.</p> 
            </div>   
    </main>
    <!---The main body ends--->
    <footer>
        <div class="footer">
           <div class="navbar1">
             <a href="#" class="active"></a>
             <a href="signup1.php">SignUp</a>
             <a href="blog.php">Blog</a>
             <a href="privacy.php">Privacy Policy</a>
            </div>      
      
           <h3>Copyright(c)2021.RGU SOC IT Module Project.</h3>
        </div>
        
        </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<script src="script.js"><script>
</html>
