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

     if ($pg == 6)

        {
            $pstID = $_GET['PstID'];
            $id = $_GET['sql'];
           $sql = "DELETE FROM stories_tble WHERE id='$pstID'";
            $result = mysqli_query($conn, $sql); 

            echo " <script language='JavaScript'>
            location.href='stories1.php?sql=$id';
            </script>";


        }

?>

<html>
    <head>
        <title>Welcome to Satorial Digest</title>
    </head>
    <script  type="javascript" src="js/table.js"></script>
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/main.css">
    
    
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
                                           

                                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

                                        <table id="myTable">
                                        <tr class="header">
                                            <th style="width:60%;">Title</th>
                                            <th style="width:40%;">Location</th>
                                            <th style="width:40%;">&nbsp;</th>
                                            <th style="width:40%;">&nbsp;</th>
                                            <th style="width:40%;">&nbsp;</th>
                                        </tr>
    
    <?php

    $sql = "Select * from stories_tble where userID='$id'";
    $result = mysqli_query($conn, $sql); 
    $num = mysqli_num_rows($result);

    while($row = mysqli_fetch_assoc($result)) {

    ?>



                                        <tr>
                                            <td><?php echo $row["title"]; ?></td>
                                            <td><?php echo $row["location"]; ?></td>
                                            <td><a href= "pictures.php?PstID=<?php echo $row["id"]; ?>&&id=<?php echo $id; ?>">Upload Pictures</a></td>
                                            <td><a href= "">Edit</a></td>
                                            <td><a href= "stories1.php?PstID=<?php echo $row["id"]; ?>&&pg=6&&sql=<?php echo $row["userID"]; ?>">Delete</a></td>
                                        </tr>
<?php

   

     }
?>
                                       
                                        </table>



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