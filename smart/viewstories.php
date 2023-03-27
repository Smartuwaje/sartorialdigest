<?php require_once "dbconnect.php"; ?>

<?php

session_start();
$id = $_GET['PstID'];

?>
<?php

$sql = "Select * from stories_tble where id = '$id '";
$result = mysqli_query($conn, $sql); 
$num = mysqli_num_rows($result);

while($row = mysqli_fetch_assoc($result)) {
$title= $row["title"];
$location= $row["location"];
$msg= $row["msg"];
$xDate = $row["xDate"];

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
                              
                               <a href="welcomeadmin.php" style="color:#000"> <b><<< Back </b> </a><br><br>

                               <b>Title</b>:  <?php echo $title; ?><br><br>
                               <b>Dated Posted</b>:  <?php echo $xDate; ?><br><br>
                               <b>Location</b>:  <?php echo $location; ?><br><br>
                               <b>Story</b>:  <?php echo $msg; ?>
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