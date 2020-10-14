<!DOCTYPE html>
<html>
<head>
	<title>Chemistry</title>
<style>
	*{
		margin: 0;
		padding: 0;
		
	}
	.hero{
        width: 100%;
        height: 100%;
        background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(2.png);
        background-position: center;
        background-size: cover;
        position: absolute;
	}
	.form-box{
		width: 380px;
		height: 480px;
		position: relative;
		margin: 6% auto;
		background: #fff;
		padding: 5px;
		overflow: hidden;
	}
	.button-box{
		width: 220px;
		margin: 35px auto;
		position: relative;
		box-shadow: 0 0 20px 9px #ff61241f;
		border-radius: 30px;
	}
	.toggle-but{
		padding: 10px 30px;
		cursor: pointer;
		background: transparent;
		border: 0;
		outline: none;
		position: relative;
	}
	#but{
		top: 0;
		left: 0;
		position: absolute;
		width: 110px;
		height: 100%;
		background: linear-gradient(to right,#ff105f,#ffad06);
		border-radius: 30px;
		transition: .5s;
	}
	.lol{
		width: 100%;
		padding: 10px 30px;
		cursor: pointer;
		display: block;
		margin: auto;
		background: linear-gradient(to right,#ff105f,#ffad06);
		border: 0;
		outline: none;
		border-radius: 30px;
	}
</style>
</head>
<body>
<div class="hero">
	<div class="form-box">
<div class="button-box">
	<div id="but"></div>
	<button type="button" onclick="login()" class="toggle-but">Text</button>
	<button type="button" onclick="register()" class="toggle-but">Number</button>
</div>



<div>
	<form id="login"style="position: absolute;top: 30%;left: 30.5%;" action="text.php" method="post">
		<h1>Chamistry Name:</h1><br><input type="text" name="ft" style="width: 100px;height: 33px;"><input type="text" name="lt" style="width: 80px;height: 33px;"><br><br><button type="subbmit" class="lol">subbmit</button>
	</form>
</div>


<div style="font-size: 30px;">
	<form id="register" style="position: absolute;top: 30%;left: 110%;" action="chamistry.php" method="post">
	<div style=" display: inline-flex;"><h1>C</h1><sub><input type="text" name="c" style="width: 30px;height: 15px;"></sub>
		<h1>H</h1><sub><input type="text" name="h" style="width: 30px;height: 15px;"></sub>
		<sub><input type="text" name="a" style="width: 40px;height: 15px;"></sub><br><br></div>
	<div>
		<button type="submit" class="lol">submit</button>
	</div>
	</form>
</div>
</div>
	<script>
	var x = document.getElementById("login");
	var y = document.getElementById("register");
	var z = document.getElementById("but");

	function register(){
		y.style.left = "120px";
		x.style.left = "510px";
		z.style.left = "110px";
	}
	function login(){
		y.style.left = "510px";
		x.style.left = "120px";
		z.style.left = "0px";
	}
	</script>
</div>
</body>
</html>
