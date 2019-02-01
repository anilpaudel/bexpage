<html>
<head>
<title>Simple Math With User Input</title>
</head>
<body bgcolor="#008000">
<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$a = $num1 + $num2;
$b = $num1 - $num2;
echo "<div style ='font:30px/21px Arial,tahoma,sans-serif;color:#ff0000'>The sum of the two numbers is ". $a;
echo "<div style ='font:30px/21px Arial,tahoma,sans-serif;color:#ff0000'>The difference of the two numbers is ". $b;
?>
<br>
<iframe width="400" height="250" src="https://www.youtube.com/embed/GYzUD70z8SE" frameborder="0" allowfullscreen></iframe>
</body>
</html>