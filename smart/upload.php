<?php

require_once "dbconnect.php";
 
$pg = $_GET["pg"];

if ($pg != "")
{

    $txtFname = $_POST['txtFname'];
    $txtLname = $_POST['txtLname'];
    $txtEmail = $_POST['txtEmail'];
    $txtPassword = $_POST['txtPassword'];
   echo  $txtLocation = $_POST['txtLocation'];
   
    $date =  'current_timestamp()';
    $fileName = $_FILES['image']['fileToUpload'];
    
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


          $sql = "Select * from users where email='$txtEmail'";
         
    
            $result = mysqli_query($conn, $sql);
           $num = mysqli_num_rows($result); 
          
                if($num != 0) {
                    
                    $sql = "Email account exist";
                        echo " <script language='JavaScript'>
                        location.href='login.php?sql=$sql';
                        </script>"; 
                }
                    else
                {

                 if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
      
                    {
                     $txtPic = $_FILES["fileToUpload"]["name"];
        
                  $sql = "INSERT INTO users (fname, lname, email, xlocation, pic, xpassword) VALUES ('$txtFname', '$txtLname', '$txtEmail', '$txtLocation','$txtPic', '$txtPassword')";
                  
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        $sql = "Account Created,  Please Login";
                        echo " <script language='JavaScript'>
                        location.href='login2.php?sql=$sql';
                        </script>"; 
                     }
                    else{
                     
                        $sql = "Record was not processed,  contact web administrator";
                        echo " <script language='JavaScript'>
                        location.href='login.php?sql=$sql';
                        </script>"; 
                    }
                
                    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                }
            
                else {
                    echo "Sorry, there was an error uploading your file.";
                    }
                 }
    }

}



else

{


?>



<?php
}
?>