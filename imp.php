<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home Page</title>
    <link rel="icon" href="icon.png" type="image/icon type">
</head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
<script src="jquery-3.4.0.min.js"></script>

<body>


     <div class="main_container">
    <div class="nav" >

<input type="checkbox" id="icon" role="button">
<label for="icon"><ion-icon  name="menu-outline" class="icon"></ion-icon></label>

           <ul  id="menu">


             <li><a class="active" href="imp.php"><ion-icon name="home" class="icons"></ion-icon>Home</a></li>

             <li><a  href="about.php"><ion-icon name="person" class="icons"></ion-icon>About</a></li>

             <li><a  href="register.php"><ion-icon name="person-add" class="icons"></ion-icon>Register</a></li>

             <li><a  href="login.php"><ion-icon name="log-out" class="icons"></ion-icon>Log out</a></li>
              
           </ul>


         </div> 
         <div class="banner">
            <div class="main_banner">
             <center> <div class="box">
<h1><a class="tag" target="_blank" href="https://www.google.com/">Google</a></h1>
     <p class="text">Google LLC is an American multinational technology company that specializes in Internet-related services and products, which include online advertising technologies, a search engine, cloud computing, software, and hardware. It is considered one of the big four Internet stocks along with Amazon, Facebook, and Apple.</p>
<p class="text">Google was founded in September 1998 by Larry Page and Sergey Brin while they were Ph.D. students at Stanford University in California. Together they own about 14% of its publicly-listed shares and control 56% of the stockholder voting power through super-voting stock. The company went public via an initial public offering (IPO) in 2004. In 2015, Google was reorganized as a wholly owned subsidiary of Alphabet Inc.. Google is Alphabet's largest subsidiary and is a holding company for Alphabet's Internet properties and interests. Sundar Pichai was appointed CEO of Google on October 24, 2015, replacing Larry Page, who became the CEO of Alphabet. On December 3, 2019, Pichai also became the CEO of Alphabet.</p>
            </div>
</center>
</div>
         <div style="
   "class="footer">
            &copy;India 2021
         </div>

      </div><script src="vanilla-tilt.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="app.js"></script>

</body>
<style>body{
   width:100%;
    height:100%;
    margin: 0px;
    font-family:'Poppins',sans-serif;
    
}
input[type=checkbox]{
    display: none;
    
} 
input[type=checkbox]:checked ~ #menu{
    display: block;
   
    
}
.box {
    box-shadow: 0 20px 20px rgb(0 0 0 / 20%);
    box-shadow: 0 2px 38px rgb(0 0 0 / 75%);
    width: 1000px;
    height: 396px;
    border-radius: 10px;
    background: crimson;
    margin: 65px;

}

.main_container{
    
    background: white;
    margin: auto;  

}

.nav{
    width: 100%;
    height: 50px;
    background-color: beige;
    position: fixed;
    animation:  nav-load 0.3s ease-in ;   
}
.icons{
    padding-right: 8px;    
}



.heading{
    padding: 10px 10px 10px 10px;
}
.nav ul{
   margin:5px;
  animation: nav-load 0.3s ease-in ;  
}



.nav ul li{
   display: inline-block;
   margin: 0 8px;
   line-height: 40px;
}
.nav ul li a{
    text-decoration: none;
    color: black;
    font-size: 14px;
    text-transform: uppercase;
    border: 1px solid transparent;
    padding: 7px 10px;
    border-radius: 3px;
}
.nav ul li a.active,
.nav ul li a:hover{  
    border: 1px solid black;
    transition: 0.5s;
    background-color: crimson;
    font-weight: bold;
    color: white;
    border-radius:2px;
 
}
.icon {
    background: transparent;
    cursor: pointer;
    display: none;
    height: 24px;
    padding: 11px;
    width: 24px;
    float: right; 
    
    
}
.icon:hover{
 background: crimson;
 color:white;
 border:1px solid black;
 border-radius:50px;
 transition: 0.5s;
}



.tag{
    text-decoration: none;
    color: white;
}

.logo{
    height: 20px;
    padding: 16px 12px 0px 0px;
    cursor: pointer;
    float: right;
}

.banner{  
    width: 100%;
    height: 50px;
    background-color: white;
}

 .main_banner{
    font-size: 21px;
    font-family: ;
    color: white;
    margin: 0 auto;
    text-align: center;
    padding-top: 69px;
    height: 637px;
    animation: slide-in 0.5s; 
}
.text{

  margin:20px
}
.content{
    width: 100%;
    height: 300px;
    background-color: white;
    
}
.footer{
    background: black;
    color: white;
    text-align: center;
    height: 22px;
    margin: 0;
    width: 100%;
    padding-top: 8px;
}


@keyframes nav-load {
 0% {
  transform: translateY(-100%);
 }
 100%{
  transform: translateY(0%);
 }
}
@keyframes slide-in {
 0% {
  transform: translateX(-100%);
 }
 100%{
  transform: translateX(0%);
 }
}
@media screen and (max-width:1080px) {
  body{
   width:100%;
    height:100%;
    margin: 0px;
    font-family:'Poppins',sans-serif;
    
}
.box{
    box-shadow: 0 20px 20px rgb(0 0 0 / 20%);
    box-shadow: 0 2px 38px rgb(0 0 0 / 75%);
    width: 50rem;
    height: 60vh;
    border-radius: 10px;
    background: crimson;
}
   .main_banner{
    font-size: 17px;
    width: 100%;
    color: white;
    margin: 0 auto;
    text-align: center;
    padding-top: 69px;
    height: 625px;
  
    
  }
.text{

  margin:20px
}
.footer{
    background: black;
    color: white;
    text-align: center;
    height: 22px;
    margin: 0;
    width: 100%;
    padding-top: 8px;
}
}
@media screen and (max-width:930px) {
  body{
   width:100%;
    height:100%;
    margin: 0px;
    font-family:'Poppins',sans-serif;
    
}
.box{
    box-shadow: 0 20px 20px rgb(0 0 0 / 20%);
    box-shadow: 0 2px 38px rgb(0 0 0 / 75%);
    width: 40rem;
    height: 60vh;
    border-radius: 10px;
    background: crimson;
}
   .main_banner{
    font-size: 16px;
    width: 100%;
    color: white;
    margin: 0 auto;
    text-align: center;
    padding-top: 69px;
    height: 625px;
    
    
  }
.text{

  margin:20px
}
.footer{
background: black;
    color: white;
    text-align: center;
    height: 22px;
    margin: 0;
    width: 100%;
    padding-top: 8px;
}
}
@media screen and (max-width:750px) {
  body{
   width:100%;
    height:100%;
    margin: 0px;
    font-family:'Poppins',sans-serif;
    
}
.box{
    box-shadow: 0 20px 20px rgb(0 0 0 / 20%);
    box-shadow: 0 2px 38px rgb(0 0 0 / 75%);
    width: 35rem;
    height: 60vh;
    border-radius: 10px;
    background: crimson;
}
   .main_banner{
    font-size: 16px;
    width: 100%;
    color: white;
    margin: 0 auto;
    text-align: center;
    padding-top: 69px;
    height: 625px;
  
    
  }
.text{
  margin:20px
  }
.footer{
    background: black;
    color: white;
    text-align: center;
    height: 22px;
    margin: 0;
    width: 100%;
    padding-top: 8px;
}
}
@media screen and (max-width:680px) {
body{
   width:100%;
    height:100%;
    margin: 0px;
    font-family:'Poppins',sans-serif;
    
}
.box{
    box-shadow: 0 20px 20px rgb(0 0 0 / 20%);
    box-shadow: 0 2px 38px rgb(0 0 0 / 75%);
    width: 30rem;
    height: 60vh;
    border-radius: 10px;
    background: crimson;
}
.nav ul li a{
    text-decoration: none;
    color: black;
    font-size: 12px;
    text-transform: uppercase;
    border: 1px solid transparent;
    padding: 9px 4px;
    border-radius: 3px;
    
}
   .main_banner{
    font-size: 14px;
    width: 100%;
    color: white;
    margin: 0 auto;
    text-align: center;
    padding-top: 69px;
    height: 625px;
    
    
  }
.text{
  margin:20px
}
.footer{
   background: black;
    color: white;
    text-align: center;
    height: 22px;
    margin: 0;
    width: 100%;
    padding-top: 8px;
}
}
@media screen and (max-width:555px) {
 body{
   width:100%;
    height:100%;
    margin: 0px;
    font-family:'Poppins',sans-serif;
    
}

  .nav ul{
    position: fixed;
    background: beige;
    height: 589px;
    width: 50%;
    padding: 50px;
    display:none;  
}
.box{ 
   box-shadow: 0 20px 20px rgb(0 0 0 / 20%);
    box-shadow: 0 2px 38px rgb(0 0 0 / 75%);
    width: 24rem;
    height: 60vh;
    border-radius: 10px;
    background: crimson;
}
.nav ul li{
    display: flex;
    flex-direction: column;
    
    padding:45px;
    text-align:center;
    line-height:30px;
   
}


 .icon{
   display:block;
   
}
.main_banner{
    font-size: 13px;
    color: white;
    margin: 0 auto;
    text-align: center;
    padding-top: 69px;
    height: 625px;
    
    width: 100%;
    
  }
.text{

  margin:20px
}
.footer{
    background: black;
    color: white;
    text-align: center;
    height: 22px;
    margin: 0;
    width: 100%;
    padding-top: 8px;
}
}



</style>
</html>

