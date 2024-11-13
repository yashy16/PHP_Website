<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	
     <style type="text/css">
          body, html {
            height: 100%;
            margin: 0;
          }

          .bg {
            /* The image used */
            background-image: url("images/Pbg.jpg");

            /* Full height */
            height: 100%; 
            margin: 0;
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
          }
          #con{
               background: #555555;
               border: 1px solid black;
               padding: 15px;
               width: 30%;
               margin: 10%;
               color:  white;
          }
          input[type=submit], #a{
               background-color: #111111;
               color: white;
               padding: 5px;
               margin: 5px;
               border-radius: 10px;
          }
          input[type=submit]:hover, #a:hover{
               background-color: #666666;
               color: white;
               padding: 5px;
               margin: 5px;
               border-radius: 10px;
          }
     </style>
</head>
<body class="bg">
     <?php 
     include 'navbar2.php';
     ?>
     <div>     
          <center>
               <div id="con">
               <form action="login.php" method="post">
               	<h2>LOGIN</h2>
               	<?php if (isset($_GET['error'])) { ?>
               		<p class="error"><?php echo $_GET['error']; ?></p>
               	<?php } ?>
                   
                    <table width="100%">
                         <tr>
                              <td>
                                   <label for="uname">User Name</label>
                              </td>
                              <td>
                                   <input type="text" name="uname" placeholder="User Name" id="uname">
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <label>Password</label>
                              </td>
                              <td>
                                   <input type="password" name="password" placeholder="Password">
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <input type="submit" value="LogIn">
                              </td>
                              <td>
                                    <a href="signup.php" class="ca" id="a">Create an account</a>
                              </td>
                         </tr>
                    </table>
               </form>
               </div>
          </center>
     </div>
</body>
</html>