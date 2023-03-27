<?php require_once "dbconnect.php"; ?>

<html>
    <head>
        <title>Welcome to Satorial Digest</title>
    </head>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        
        .navbar {
             overflow: hidden;
             background-color: #333;
            }

        .navbar a {
          float: left;
          font-size: 16px;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }
        
        .dropdown {
          float: left;
          overflow: hidden;
        }
        
        .dropdown .dropbtn {
          font-size: 16px;  
          border: none;
          outline: none;
          color: white;
          padding: 14px 16px;
          background-color: inherit;
          font-family: inherit;
          margin: 0;
        }
        
        .navbar a:hover, .dropdown:hover .dropbtn {
          background-color: red;
        }
        
        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }
        
        .dropdown-content a {
          float: none;
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
        }
        
        .dropdown-content a:hover {
          background-color: #ddd;
        }
        
        .dropdown:hover .dropdown-content {
          display: block;
        }
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
                            <td width="90%" valign="bottom" align="right">
                            <?php include 'nav.php';?>
                            </td>
                        </tr>
                    </table>
                    
                   
                    <table width="100%">
                        <tr>
                            <td valign="top" style="padding-left: 200px;padding-right: 200px;font-family: Verdana, Geneva, Tahoma, sans-serif;font-size:12px;">

<br><br>
                            <h1>Stories</h1><br><br>
                           
<?php

$sql = "Select * from stories_tble order by ID desc";
$result = mysqli_query($conn, $sql); 
$num = mysqli_num_rows($result);

while($row = mysqli_fetch_assoc($result)) {

?>              
                            
                            <div class="container">

<?php

$userID = $row["userID"];
$sql2 = "Select * from users where id = '$userID'";
$result2 = mysqli_query($conn, $sql2); 

while($row2 = mysqli_fetch_assoc($result2)) {


?>
                                    <img src="uploads/<?php echo $row2["pic"]; ?>" alt="Avatar" style="width:90px">

                                    <b><p><span><?php echo $row["title"]; ?></span> <?php echo $row["location"]; ?></p></b>
                                    <p>
                                    <?php echo $row["msg"]; ?>  
                                   </p><br><br>
                                   <span>
                                    <input type="button" value="Read More >>" width="300px;" style="background-color: aqua;width: 200px;height: 30px;" onclick="window.location.href='read.php?id=<?php echo $row["id"]; ?>';">
                                  </span>
                                  </div>
<?php

   
}
}
?>
                                  
                                  
                                  
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