<?php require_once "dbconnect.php"; ?>

<?php

session_start();

$pg = $_GET['pg'];
$id = $_GET['sql'];

$_SESSION["id"] = $_GET['sql'];

$xID = $_SESSION["id"] ;

    $sql = "Select * from users where id='$id'";
    
    $result = mysqli_query($conn, $sql); 
    $num = mysqli_num_rows($result);

    while($row = mysqli_fetch_assoc($result)) {

        $txtFname=  $row["fname"];
        $txtLname=  $row["lname"];

     }

if ($pg == 2)

     {

        $txtTitle = $_POST['txtTitle'];
        $txtLocation = $_POST['txtLocation'];
        $txtDesc = $_POST['txtDesc'];
        $txtID = $_POST['txtID'];
       
        $sql = "INSERT INTO stories_tble (title, location, msg, userID) VALUES ('$txtTitle', '$txtLocation', '$txtDesc', '$txtID')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo " <script language='JavaScript'>
            location.href='stories1.php?sql=$txtID';
            </script>";
         }
        else{
            echo " <script language='JavaScript'>
            location.href='stories1.php?sql=$txtID';
            </script>";
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
                                    <a href="welcome.php?sql=<?php echo $id ; ?>" class="active">Home</a>
                                    <a href="stories1.php?sql=<?php echo $id ; ?>">Stories</a>
                                    <a href="index.php">Log out</a>
                            </div>
                            </td>
                            <td valign="top" style="padding-left:20px"  width="90%">
                                <h3>Welcome <?php echo $txtFname ." ". $txtLname; ?>  </h3>
                                <table width="100%" style="margin-top:20px;">
                                    <tr>
                                        <td>                                                
                                            <div class="wrapper">
                                            <h2>Share A Story</h2>
                                            
                                            <form action="stories.php?pg=2" method="post">
                                            <table>
                                                <tr>
                                                    <td>Title</td>
                                                    <td><input type="text" name="txtTitle"> <input type="hidden" name="txtID" value="<?php echo $id; ?>"> </td>
                                                </tr>
                                                <tr>
                                                    <td>Location</td>
                                                    <td><input type="text" name="txtLocation"></td>
                                                </tr>
                                                <tr>
                                                    <td>Description</td>
                                                    <td>
                                                        <textarea style="width:500px;height:200px;" name="txtDesc"></textarea></td>
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