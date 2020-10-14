<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
	*{
		margin: 0;
		padding: 0;
	}
	body{
        width: 100%;
        height: 100%;
        background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(2.png);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: absolute;
	}

	body h1{
		width:500px;
		height: 40px;
		position: relative;
		margin: 6% auto;
		background: #fff;
		padding: 25px;
		overflow: hidden;
	}
</style>
<body>

</body>
</html>

<?php



$c = $_POST['c'];
$h = $_POST['h'];
$a = $_POST['a'];



echo"<h1>C<sub>$c</sub>H<sub>$h</sub>$a : ";

if($c==1){echo"Meth";}
elseif($c==2){echo"Eth";}
elseif($c==3){echo"Prop";}
elseif($c==4){echo"But";}
elseif($c==5){echo"Pent";}
elseif($c==6){echo"Hex";}
elseif($c==7){echo"Hept";}
elseif($c==8){echo"Oct";}
elseif($c==9){echo"Non";}
elseif($c==10){echo"Dec";}
else{echo"the result is not found";}

echo"";


if($h==2*$c+2){echo"ane";}
elseif($h==2*$c){echo"ene";}
elseif($h==2*$c-2){echo"yne";}
elseif($h==2*$c+1){
	if($a=="OH"){echo"anol";}
	elseif($a=="CHO"){echo"anal";}
	elseif($a=="COOH"){echo"anoic acid";}
	else{
	echo"-Pleace file last box rightly.";
}
}
else{
	echo"-Pleace file <b>H</b> rightly.";
}

echo"</h1>";


?>