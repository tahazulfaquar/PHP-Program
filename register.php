
<html>
 <link rel="icon" href="icon.png" type="image/icon type">
<head>
<title>Register</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<body bgcolor="beige">
<center style="
     padding:178px 10px 10px 10px;">

   <div class="container">
   <div class="box">
  <form action="server.php" method="GET" autocomplete="off">
 <h1><b>Register</b></h1>
    
     <input type="text" id="ip2" name="username" placeholder="Username" style="border-radius: 5px;border-color: black; padding: 5px;" required/><br><br>

     <input type="email" id="ip2" name="email" placeholder="E-mail" style="border-radius: 5px;border-color: black; padding: 5px;"required/><br><br>

     <input type="password" id="pwd" name="password" placeholder="Password" style="border-radius: 5px;border-color: black;padding: 5px;"required/><br><br>

  	<input type="password" id="pwd" name="password" placeholder="Confirm Password" style="border-radius: 5px;border-color: black;padding: 5px;"required/><br><br>

     <button class="button" type="submit" id="btn" name="login" default style="border-radius: 5px;border-color: black;padding: 5px;">Submit</button><br><br>
<font style="    text-decoration: none;
    color: black;
    font-family: system-ui;">Already have an account ?</font>
<a href="login.php"style="color: black;
         text-decoration: none;
         font-family: system-ui;"><b>Login.</a></b>

  </form>
</div>
</div>
</center>
<script src="vanilla-tilt.min.js"></script>
<script>
  VanillaTilt.init(document.querySelector(".box"), {
		max: 10,
		speed: 400
	});
</script>
</body>
<style>
.box{
   box-shadow: 0 20px 20px rgba(0,0,0,0.2);
    box-shadow: 0 2px 38px rgb(0 0 0 / 75%);
    width: 19rem;
    min-height: 53vh;
    border-radius: 10px;
    background: crimson;
}

 input:focus::placeholder{
   color:transparent;
   
   
}
input::placeholder{
  color:#aaa;
  transition:color 0.3s ease;
}



.button:hover{
  background:beige;
  cursor:pointer;
}
</style>

</html>

