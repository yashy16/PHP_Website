<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
include 'navbar.php';
 ?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     
     <style >
          body{
              
               background-image: url('P1.jpg');
          }
          .topright {
           /*position: absolute;*/
           top: 0px;
           right: 0px;
           font-size: 18px;
          }

           img { 
           width: 15%;
           height: 12%;
           opacity: 0.8;
           margin-top: 1102px;
           /*float: right;*/
          }
          .section{
          width: 100%;

          }
          .section .container{
          width: 80%;
          display: inline-block;
          margin: 0.9px auto;
          padding: 50px 0px;
          }
          .container . title {
          width: 100%;
          text-align: center;
          margin-bottom: 50px;
          }

          .content{
          float: left ;
          width: 55%;

          }
          .image-section{
          float:right;
          width: 40%;
          }
          .image-section img{
          width: 100%;
          height: :auto;

          }
          .content .article h2{
          color: #a3a3a3;
          font-size: 17px;

          }
          .content .article h3{
          color: #a3a3a3;
          font-size: 17px;

          }
          .content .article b{
          margin-top: 20px;
          font-size: 16px;
          line-height: 1.5;
          color: #333;

          }

          
     </style>
     <body style=" background-color: lightgray">
          <div class="section">
               <div class="container">
                    <div class="title">
                         <h1>Hello, <?php echo $_SESSION['name']; ?></h1>

                         <div class="article">
                              <h3>Chaat is a term used for little Indian street food snacks – perhaps a more accurate English cultural translation is an appetizer (but not necessarily preceding a larger meal), or light snack.

                              To me, chaat is like a bag of potato chips… except it’s fresh, more flavorful, and filled with countless tasty ingredients.
                              </h3>
                              <!-- <img src="images/P2.jpg"> -->
                              <h4>
                              Chaat is normally a combination of junk food (like fried crunchy things), spices, yogurt (curd), onions, or a varied assortment of other ingredients. It’s normally considered savory  as opposed to sweet, but then again, chaat is often a mind blowing combination of all flavors, sweetness sometimes being mingled with spicy and sour.
                              Throughout India, I enjoyed eating at many chaat stalls; They are great places to stand up while shoveling in a quick snack that bursts with flavor. Pani puri and ghugni chaat can both be considered varieties of Indian chaat.
                              </h4>
                              <b> Variations</b>
                              Dahi Bhel Puri
                              Bhelpuri with dahi on top
                              Bhelpuri may also be garnished with a combination of chunks of diced raw sweet mango, diced onions, coriander leaves and chopped green chilies. It is sometimes served with papri puris, a deep-fried small round and crispy wheat bread.

                              <b>Other variants of bhelpuri:</b><br>

                              *Bhel sevpuri - a mixture of bhelpuri, chutney, papdi and sev.<br>
                              *Dahi bhel puri - a mixture of bhelpuri, chutney, papdi and dahi (yogurt).<br>
                              *Sev papdi chaat - similar to sevpuri but with multiple types of chutney, potatoes, and chat masala.<br>
                              *Churmuri - finely cut pieces of onion, tomato, coriander leaves along with chilli powder are mixed, adding a few drops of coconut oil. Sometimes fried or roasted groundnuts may be added.
                              
                              <!-- <img src="images/P2.jpg"> -->
                         </div>
                    </div>
               </div>
          </div>


          <!-- <div class="image_section" > -->
               <!-- <img src="images/P2.jpg"> -->


          <!-- </div> -->
     </body>

</head>

   
     


<?php 
// include 'footer.php';
}else{
     header("Location: index.php");
     exit();
}

 ?>
 