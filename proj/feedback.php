<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
include 'navbar.php';
 ?>
 <title>Feedback Form</title>
<style>
          @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
body{
     /*top: 13px;*/
     font-family: 'Open Sans',sans-serif;
     background-color: gray;

}
*{
     margin: 0.97px;
     padding: 0;
     box-sizing: border-box;
}
h1{
     text-align: center;
     padding: 15px 0;
     color: blue;

}
h1:hover{
     color: red;
}
.contact{
     width: 400px;
     max-width: 90%;
     margin-top: 20px;
     margin: 0 auto;

}
.contact-input{
     margin-bottom: 10px;
}
.contact-input > label{
     display: block;
     margin-bottom: 5px;
}
.contact-input > label:hover{
     color:  red;
}
.contact-input > input, .contact-input > textarea{
     width: 100%;
     height: 30px;
     border-radius:2px ;
     border: 1px solid black;
     outline: none;
     padding-left: 5px;

}
.contact-input > textarea{
     height: 130px;
     padding: 5px;
}
.contact-button{
     padding: 10px 25px;
     font-size: 20px;
     border: none;
     outline: none;
     background-color: blue;

     color: whitesmoke;
     cursor: pointer;
     border-radius: 10px;

}
.contact-button:hover{
     background-color: red;
}
     </style>

<h1>FeedBack</h1>

<div class="contact">
     <form method="post" action="contactus_dt.php">
          <div class="contact-input">
               <label>Name</label>
               <input type="text" name="name">
          </div>
          <div class="contact-input">
               <label>Mobile No</label>
               <input type="text" name="mob">
          </div>
          <div class="contact-input">
               <label>Email</label>
               <input type="email" name="email">
          </div>
          <div class="contact-input">
               <label>Message</label>
               <textarea name="msg"></textarea>
          </div>
          <button type="submit" class="contact-button"> Send</button>
     </form>

</div>
<?php 
include 'footer.php';
}else{
     header("Location: index.php");
     exit();
}
 ?>
 