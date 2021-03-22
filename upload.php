<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <title>Uploading files</title>
</head>
<body>
  <form action="upload.php" method="POST" enctype="mutipart/form.data">
      <input type="name" placeholder="Name" name="name"><br><br>
      <input type="email" placeholder="Email" name="email"><br><br>
      
      <label>Upload Files</label>
      <p><input type="file" name="file"/></p>
      <p><input type="submit" name="upload" value="Upload"></p>
  </form>
     
 <?php
      if (isset($_POST['submit'])) {
        $file = $_FILES['file'];

        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];      
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        
       // files to allow //
        $allowed = array('word','pdf','jpg','jpeg','png');

        if (in_array($fileActualExt, $allowed)) {
          if ($fileError === 0) {
             if ($fileSize < 1000000) {
               $fileNameNew = uniqid('',true).".".$fileActualExt;
               $fileDestination = 'readstory.php/'.$fileNameNew;
               move_uploaded_file($fileTmpName, $fileDestination);
               header("Location: readstory.php?uploadsuccessful");
             } else {
                  echo "Your file is too big!";

             }
          } else {
                echo "There was an error uploading your file!";
          }
        } else {
             echo "successful!";
        }
      }
?>
     <!---Source: Dani Krossing. Youtube---->

</body>
</html>