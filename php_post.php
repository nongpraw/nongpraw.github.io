<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>PHP POST</title>
</head>
<body>
  <from method ="post=" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fame">
    <input type="submit" value="Submit">
</from>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name =$_POST['Fname'];
  $name =$_POST['lname'];
  if (empty($name)){
    echo "Name is empty";
  } else{
    echo $name. " " .$lname ;
  }
}    
?>


</body>
</html>