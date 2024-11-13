
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>About Us</title>
     <style>
@import url('https: //fonts.googleapis.com/css2?family=Poppins: wght@200;300;400&display=swap'); 
*{
     margin: 0px;
     padding: 0px;
     /*background-color: gray;*/
     box-sizing: border-box;
     font-family: 'Poppins',sans-serif;
     background-color: gray;


}
.section{
     width: 100%;
     background-color: gray;

}
.section .container{
     width: 82%;
     display: inline-block;
     margin: 1px auto;
     

     padding: 20px 8px;
}
.container . title {
width: 100%;
text-align: center;
margin-bottom: 50px;
}
.container . title h1{
     text-transform: uppercase;
     font-size: 35px;
     color: blueviolet;
}
.container . title h1: :after{
     content: "";
     height: 6px;
     width: 100px;
     background-color: #c4d156;
     border-radius: 25px;
     display: block;
     margin: auto;

}
.content{
     float: left ;
     width: 120%;

}
.image-section{
     float:right;
     width: 40%;
}
.image-section img{
     width: 100%;
     height: :auto;

}


}
.content .article h3{
     color: #a3a3a3;
     font-size: 40px;

}
.content .article p{
     margin-top: 20px;
     font-size: 16px;
     line-height: 1.5;
     color: #333;

}

</style>
</head>
<body>
     <?php 
     include 'navbar2.php';
     ?>
     <div class="section">
          <div class="container">
               <div class="title">
                    <h1>About Us</h1>
                    
               </div>
               <div class="container">
                    <div class="article">
                         <h4>
                         The chaat variants are all based on fried dough, with various other ingredients. The original chaat is a mixture of potato pieces, crisp fried bread dahi vada or dahi bhalla, gram or chickpeas and tangy-salty spices, with sour Indian chili and saunth (dried ginger and tamarind sauce), fresh green coriander leaves and yogurt for garnish, but other popular variants included alu tikkis or samosa (garnished with onion, potatoes, coriander, peas, hot spices and a dash of curd), bhel puri, dahi puri, panipuri, dahi vada, papri chaat, and sev puri.
                         </h4><br>
                         <b>
                         There are common elements among these variants including dahi (yogurt); chopped onions and coriander; sev (thin dried yellow salty noodles); and chaat masala, typically consisting of amchoor (dried mango powder), cumin, kala namak (Himalayan black rock salt), coriander, dried ginger, salt, black pepper, and red pepper. The ingredients are combined and served on a small metal plate or a banana leaf, dried and formed into a bowl.
                         </i><br>
                         <i>
                               Chaat is normally a combination of junk food (like fried crunchy things), spices, yogurt (curd), onions, or a varied assortment of other ingredients. It’s normally considered savory  as opposed to sweet, but then again, chaat is often a mind blowing combination of all flavors, sweetness sometimes being mingled with spicy and sour.
                         </i>
                         <br>
                         <i>Bhelpuri is a savoury snack originating from India, and is also a type of chaat. It is made of puffed rice, vegetables and a tangy tamarind sauce, and has a crunchy texture.

                         Bhel is often identified as a 'beach snack', strongly associated with the beaches of Mumbai, such as Chowpatty or Juhu. One theory for its origin is that it was invented at a restaurant called Vithal near Victoria Terminus. According to another theory, bhelpuri was conceived by the city's Gujarati community, who made it by adding complex flavours to the simple North Indian chaat. Gujarati housewives began making it, and invented several varieties like the pakodi puri, and as it spread in popularity so many different communities like the Mangaloreans and Sindhis made their own versions.</i>
                         </b>
                    </div>
               </div>
               <!-- <div class="image_section"> -->
                    <img src="images/P2.jpg"> 
                    
               <!-- </div> -->
          </div>

     </div>

</body>
</html>


 	