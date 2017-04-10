<!DOCTYPE HTML>  
<html>
<head></head>
<body>  

<?php
// define variables and set to empty values
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <input type="submit" name="ledOn" value="LED ON">  
  <input type="submit" name="ledOff" value="LED OFF">  
</form>

</body>
</html>
