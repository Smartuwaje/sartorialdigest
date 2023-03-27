<?php
// Include config file
require_once "dbconnect.php";
$sql = $_GET['sql'];
 
?>

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
                   
                   <table width="80%">
                        <tr>
                            <td align="center"> 
                            <div class="wrapper">
                                <h2>Sign Up</h2> <span style="color:red"><?php echo $sql; ?></span>
                                <p>Please fill this form to create an account.</p>

                                <form action="upload.php?pg=2" method="post" enctype="multipart/form-data">
                                <table>
                                    <tr>
                                        <td>FirstName</td>
                                        <td><input type="text" name="txtFname"></td>
                                    </tr>
                                    <tr>
                                        <td>LastName</td>
                                        <td><input type="text" name="txtLname"></td>
                                    </tr>
                                    <tr>
                                        <td>Email Address</td>
                                        <td><input type="text" name="txtEmail"></td>
                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td><input type="password" name="txtPassword"></td>
                                    </tr>
                                    <tr>
                                        <td>Location</td>
                                        <td><input type="text" name="txtLocation"></td>
                                    </tr>
                                    <tr>
                                        <td>Profile Picture</td>
                                        <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2"><input type="submit" value="Create account" name="submit"></td>
                                    </tr>

                                    
                                </table
                                </form>
                            </div>    
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