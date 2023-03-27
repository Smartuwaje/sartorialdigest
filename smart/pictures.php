<?php require_once "dbconnect.php"; ?>

<?php

session_start();
$pg =$_GET['pg'];
$pstID = $_GET['PstID'];
$id = $_GET['id'];


if ($pg == 2)
{

    $txtID = $_POST['txtID'];
    $fileName = $_FILES['image']['fileToUpload'];

    $sql = "Select * from stories_tble where id='$txtID'";

    $result = mysqli_query($conn, $sql); 
    $num = mysqli_num_rows($result);

    while($row = mysqli_fetch_assoc($result)) {

         $id=  $row["userID"];

     }
    
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
   
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
             echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                 echo "File is not an image.";
                 $uploadOk = 0;
            }
    }
    
    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
     } else {

        $txtPic = $_FILES["fileToUpload"]["name"];
        
       $sql = "INSERT INTO gallery_tble (picID, pic) VALUES ('$txtID', '$txtPic')";
          $result = mysqli_query($conn, $sql);
          if ($result) {
              
            echo " <script language='JavaScript'>
            location.href='stories1.php?sql=$id';
            </script>";

           }
          else{
              
            echo " <script language='JavaScript'>
            location.href='stories1.php?sql=$id';
            </script>";

          }
      
        
           
    }

}

?>

<html>
    <head>
        <title>Welcome to Satorial Digest</title>
    </head>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    
    <style>
.vertical-menu {
  width: 200px; /* Set a width if you like */
}

.vertical-menu a {
  background-color: #eee; /* Grey background color */
  color: black; /* Black text color */
  display: block; /* Make the links appear below each other */
  padding: 12px; /* Add some padding */
  text-decoration: none; /* Remove underline from links */
}

.vertical-menu a:hover {
  background-color: #ccc; /* Dark grey background on mouse-over */
}

.vertical-menu a.active {
  background-color: #000; /* Add a green color to the "active/current" link */
  color: white;
} 
.
 </style>

    <body>
        <table border="0px;" width="100%" cellspacing="1">
            <tr>
                <td>
                    <table width="100%">
                        <tr>
                            <td bgcolor="#000">&nbsp;</td>
                        </tr>
                    </table>
                    <table class="banner" width="100%">
                        <tr>
                            <td><img src="imgs/logo.png" width="250px"></td>
                            
                        </tr>
                    </table>
                    
                    <table witdth="100%">
                        <tr>
                            <td valign="top">
                            <div class="vertical-menu">
                                    <a href="welcome.php?sql=<?php echo $id; ?>" class="active">Home</a>
                                    <a href="stories1.php?sql=<?php echo $id; ?>">Stories</a>
                                    <a href="index.php">Log out</a>
                                    
                                </div>
                            </td>
                            <td valign="top" style="padding-left:20px"  width="90%">
                                <h3>Upload Pictures </h3>
                                <table width="100%" style="margin-top:20px;">
                                    <tr>
                                        <td>                                                
                                            <div class="wrapper">
                                            <h2>Share A Story</h2>
                                            
                                            <form action="pictures.php?pg=2" method="post" enctype="multipart/form-data">
                                            <table>
                                                <tr>
                                                    <td>Upload Picture</td>
                                                    <td>
                                                        <input type="file" name="fileToUpload" id="fileToUpload"> 
                                                        <input type="hidden" name="txtID" value="<?php echo $pstID; ?>"> 
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td colspan="2"><input type="submit" value="Submit" name="submit"></td>
                                                </tr>

                                             </table
                                             </form>

                                        </td>
                                        
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                  
                    
                    <table style="margin: 30px;">
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                    <?php include 'footer.php';?>
                   
                </td>
            </tr>
        </table>
    </body>
</html>