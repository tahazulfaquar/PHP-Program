
<html>

<head>
 <link rel="icon" href="icon.png" type="image/icon type">
<title>Log In</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body bgcolor="beige">
<center style="
     padding:178px 10px 10px 10px;">

 <div class="container">
   <div class="box">
   <form name="f1"action="validate.php"  method="POST" autocomplete="off">
<h1><b>Log In</b></h1>

    <input  type="text" name="username" placeholder="Username" style="border-radius: 5px; padding: 5px;border-color:black" required/><br><br>

     <input type="password" id="pwd" name="password" placeholder="Password" style="border-radius: 5px;padding: 5px;border-color:black"required /><br><br>

     <button class="button" type="submit" id="btn" name="login" value="login">Login</button><br><br>


<font style="    text-decoration: none;
    color: black;
    font-family: Helvetica;">Not having a account ?</font><a style="    text-decoration: none;
    color: black;
    font-family: Helvetica;" href="register.php"><b> Register Here.</a></b>
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
.box {
    box-shadow: 0 20px 20px rgba(0,0,0,0.2);
    box-shadow: 0 2px 38px rgb(0 0 0 / 75%);
    width: 19rem;
    min-height: 39vh;
    border-radius: 10px;
    background: crimson;
}
 input:focus::placeholder{
   color:transparent;
   
   
}
input::placeholder{
  color:#aaa;
  transition:color .3s ease;
}

.button{
border-radius:5px;
 padding: 5px;
 border-color:black;
 cursor:pointer;
}

.button:hover{
  background:beige;
}
</style>
</html>

