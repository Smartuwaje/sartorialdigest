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
            $sql = "UPDATE admin_tble SET xApproval='$id' WHERE id='$pstID'";
            $result = mysqli_query($conn, $sql); 

            echo " <script language='JavaScript'>
            location.href='userlog.php?sql=$id';
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
                            <td bgcolor="#000" style="color:#fff"><h1>e-Admin</h1></td>
                        </tr>
                    </table>
                    
                    <table witdth="100%">
                        <tr>
                            <td valign="top">
                                 <div class="vertical-menu">
                                    <a href="welcomeadmin.php" class="active">Home</a>
                                    <a href="welcomeadmin.php">Stories</a>
                                    <a href="userlog.php">Users Log</a>
                                    <a href="admin.php">Log Out</a>
                                </div>
                            </td>
                            <td valign="top" style="padding-left:20px"  width="90%">
                              
                                <table width="100%" style="margin-top:20px;">
                                    <tr>
                                        <td>                                                
                                           

                                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

                                        <table id="myTable">
                                        <tr class="header">
                                            <th style="width:60%;">First Name</th>
                                            <th style="width:40%;">Last Name</th>
                                            <th style="width:40%;">Email Address</th>
                                            <th style="width:40%;">&nbsp;</th>
                                        </tr>
    
    <?php

    $sql = "Select * from admin_tble";
    $result = mysqli_query($conn, $sql); 
     $num = mysqli_num_rows($result);
   

    while($row = mysqli_fetch_assoc($result)) {
        $xg = $row["xApproval"];

    ?>



                                        <tr>
                                            <td><?php echo $row["fname"]; ?></td>
                                            <td><?php echo $row["lname"]; ?></td>
                                            <td><?php echo $row["email"]; ?></td>
                                            <td>
                                                <?php
                                                if($row["xApproval"] == "0")
                                                    {
                                                ?>
                                                    <a href= "userlog.php?PstID=<?php echo $row["id"]; ?>&&pg=6&&sql=1">Approve</a>
                                                <?php
                                                    }
                                                else
                                                    {
                                            ?>
                                                <a href= "userlog.php?PstID=<?php echo $row["id"]; ?>&&pg=6&&sql=0">Dis-Approve</a>
                                                <?php
                                                    }
                                                ?>
                                                                                      
                                            </td>
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
                    <table style="background: #000;color: #fff;" width="100%" height="200px">
                        <tr>
                            <td valign="top">&nbsp;</td>                                                         
                        </tr>
                    </table>
                   
                </td>
            </tr>
        </table>
    </body>
</html>