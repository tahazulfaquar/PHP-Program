
<html>
    <link rel="icon" href="icon.png" type="image/icon type">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
<head>
  <title>About</title>
</head>
<body>

     <div class="main_container">
       <div class="nav">

     
   <input type="checkbox" id="icon" role="button">
<label for="icon"><ion-icon  name="menu-outline" class="icon"></ion-icon></label>

           <ul  id="menu">
             <li><a href="imp.php"><ion-icon name="home" class="icons"></ion-icon>Home</a></li>
             <li><a class="active" href="about.php"><ion-icon name="person" class="icons"></ion-icon>About</a></li>
             <li><a href="register.php"><ion-icon name="person-add" class="icons"></ion-icon>Register</a></li>
             <li><a href="login.php"><ion-icon name="log-out" class="icons"></ion-icon>Logout</a></li>
           </ul>

       </div>
<div class="main_banner">
                <div class="content">
                     <h1>Taha Zulfiquar</h1>
                    <div class="fade">
                   <img class="img"src="me.jpg" >
                   </div>

                            <center> <h2> Thankyou for visiting my site.</h2></center>

                         </div>


                </div>
  </div>
         <div class="footer">
            &copy;India 2021
         </div>
      </div>
<script src="vanilla-tilt.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="app.js"></script>
<script>


</script>
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

.main_container{

    background: white;
    margin: auto;

}
.icons{
    padding-right: 8px;
}

.nav{
    width: 100%;
    height: 50px;
    background-color: beige;
    position: fixed;


}
.heading{
    padding: 10px 10px 10px 10px;
}
.nav ul {
  margin: 0px;
  animation: nav-load 0.3s ease-in ;
}
.nav bars div{
    height: 4px;
    background-color: black;
}

.nav ul li{
   display: inline-block;
   margin: 0 8px;
   line-height: 50px;
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
    padding: 13px;
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

.logo{
    height: 20px;
    padding: 16px 12px 0px 0px;
    cursor: pointer;
    float: right;
}
.img{
    height: 380px;
    width: 298px;
    margin: 10px 0px 10px 0px;
    }



.banner{
    width: 99.6%;
    height: 100px;
    background-color: white;

}
 .main_banner{
    width: 100%;
    height: 661px;
    background-color: white;
    padding-top: 45px;
    font-size: 16px;
    text-align: center;
}

.content .img:hover{

    transform:scale(1.1) ;
    transition: 0.2s ease;
    box-shadow: 0 10px 25px rgba(0,0,0,0.5);
}

.content{
    animation: slide-in 0.5s;
    color:black;
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
    animation: slide-in 0.3s;

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
    font-size: 15px;
    width: 100%; 
    color: white;
    margin: 0 auto;
    text-align: center;
    padding-top: 69px;
    height: 625px;
    animation: slide-in 0.3s;

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
    font-size: 14px;
    width: 100%;
    color: white;
    margin: 0 auto;
    text-align: center;
    padding-top: 69px;
    height: 625px;
    animation: slide-in 0.3s;

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
    animation: all slide-in 0.3s;

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
    height: 479px;
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
    animation: all slide-in 0.3s;
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
