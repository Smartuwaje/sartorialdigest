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
                            <h1>About Sartorial Digest</h1><br><br>
                            <table align="left" style="margin-right:20px;">
                                <tr>
                                    <td align="left"><img src="imgs/festivals.jpg" width="500px"></td>
                                </tr>
                             </table>    
                            <p style="padding-top:10px;">
                                    <span style="font-size:20px;">Everyone</span> travels in their own way and according to very personal criteria; geography,  language and
                                    culture.
                                </p><br><br>
                                <p>
                                Staying abreast about potential travel destinations is one of the most basic forms
                                 of information-hunting that globe-trotters and home-bodies alike endorse when planning 
                                 to hit the road or board a plane. Different regions, countries, and even distinct areas 
                                 in home communities provide escapism from the routine of everyday living and help broaden 
                                 perspectives with local culture and unique natural environments.<br><br>

                                It’s easy to get caught up in what you already know about a travel destination, but a
                                 compelling visitor website helps returning and new tourists navigate which locations and 
                                 other details will make the most out of their adventures, be they abroad, near home, or
                                  somewhere in between.
                                </p>
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