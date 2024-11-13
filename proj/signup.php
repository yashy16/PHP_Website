<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="newcss1.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
     <!--<form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>" id="name"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

     	<button type="submit">Sign Up</button>
          <a href="index.php" class="ca">Already have an account?</a>
     </form>-->
     <form method="post" action="save_sign_up_data.php">
          <label id="msg" style="color: red; font-weight: bolder;"></label><br>

          <label for="name">Name</label><br>
          <input type="text" name="name" id="name" placeholder="Enter your name">
          <label id="msg" style="color: red; font-weight: bolder;"></label><br>

          <label for="name">Username</label><br>
          <input type="text" name="uname" id="uname" placeholder="Enter UserName">
          <label id="msg" style="color: red; font-weight: bolder;"></label><br>

          <label for="name">Password</label><br>
          <input type="password" name="pass" id="pass" placeholder="Enter Password">

          <label for="name">Confirm Password</label><br>
          <input type="password" name="cpass" id="cpass" placeholder="Confirm Password">
          
          <input type="submit" value="Sign Up" id="sub"  disabled>
          <a href="index.php" class="ca">Already have an account?</a>
     </form>
     <script>
          $(document).ready(function(){
            $("#name").focusout(function(){
              if($(this).val().match(/^[a-zA-Z ]*$/) == null)
              {
                    $("#msg").text("Please use alphabets and space");
                     $("#sub"). attr("disabled", true);
              }
              else
              {
                    $("#msg").text("");
                    $("#sub"). attr("disabled", false);
              }
            });
          });
          $(document).ready(function(){
            $("#cpass").focusout(function(){
              if($(this).val() != $("#pass").val())
              {
                    $("#msg").text("Password Mismatch");
                     $("#sub"). attr("disabled", true);
              }
              else
              {
                    $("#msg").text("");
                    $("#sub"). attr("disabled", false);
              }
            });
          });
           $(document).ready(function(){
            $("#pass").focusout(function(){
              if($("#cpass").val()!="")
              {
                    if($("#cpass").val() != $("#pass").val())
                   {
                         $("#msg").text("Password Mismatch");
                          $("#sub"). attr("disabled", true);
                   }
                   else
                   {
                         $("#msg").text("");
                         $("#sub"). attr("disabled", false);
                   }
              }
            });
          });
     </script>
</body>
</html>