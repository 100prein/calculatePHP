<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,  initial-scale=1.0">
    <title> Document </title>
</head>
<body>
    <?php
$num1Err = $num2Err =$num3Err = $num4Err = $num5Err =$num6Err = 0.00;
$num1=$num2=$num3=$num4=$num5= $num6 = 0.00;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["num1"])) {
    $num1Err = "number is required";
  } else {
    $num1 = test_input($_POST["num1"]);
  }
  if (empty($_POST["num2"])) {
    $num2Err = "number is required";
  } else {
    $num2 = test_input($_POST["num2"]);
  }
  if (empty($_POST["num3"])) {
    $num3Err = "number is required";
  } else {
    $num3 = test_input($_POST["num3"]);
  }
  if (empty($_POST["num4"])) {
    $num4Err = "number is required";
  } else {
    $num4 = test_input($_POST["num4"]);
  }
  if (empty($_POST["num5"])) {
    $num5Err = "number is required";
  } else {
    $num5 = test_input($_POST["num5"]);
  }
  if (empty($_POST["num6"])) {
    $num6Err = "number is required";
  } else {
    $num6 = test_input($_POST["num6"]);
  }
  $Pp = 1000 * 9.81 * $num4 * $num5;
  $E = $num2 * $Pp;
  $NofP = ($num3*$num1)/($num4 * 10 * 3600);
  $Et = $NofP  * $E;
  $PV = $Et / 4.5;
  
  $NumberOfPanels  = ((5 * $PV) * 1000) / $num6;
  $NumberOfBatteries = (($Et/10)*3)/10;
  $NumberOfInverters = (5 * $PV)/40; 


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Welcome to the Calculator!</h2>
<h3>Please put in your numbers, not letters.</h3>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
Number 1: <input type="double" name="num1">
  <span class="error">* <?php echo $num1Err;?></span>
  <br><br>
  Number 2: <input type="double" name="num2">
  <span class="error">* <?php echo $num2Err;?></span>
  <br><br>
  Number 3: <input type="double" name="num3">
  <span class="error">* <?php echo $num3Err;?></span>
  <br><br>
  Number 4: <input type="double" name="num4">
  <span class="error">* <?php echo $num4Err;?></span>
  <br><br>
  Number 5: <input type="double" name="num5">
  <span class="error">* <?php echo $num5Err;?></span>
  <br><br>
  Number 6: <input type="double" name="num6">
  <span class="error">* <?php echo $num6Err;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $num1;
echo "<br>";
echo $num2;
echo "<br>";
echo $num3;
echo "<br>";
echo $num4;
echo "<br>";
echo $num5;
echo "<br>";
echo $num6;
echo "<br>";
echo $NumberOfPanels;
echo "<br>";
echo $NumberOfBatteries ;
echo "<br>";
echo $NumberOfInverters;
echo "<br>";
?>

</body>
</html>