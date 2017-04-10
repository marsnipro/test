<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #00FF00;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$name =  "";
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
}
  
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <input type="submit" name="LED ON" value="ledOn">  
  <input type="submit" name="LED OFF" value="ledOff">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
?>

</body>
</html>