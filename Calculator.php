<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
</head>
<body>
  <form action="calculator.php" method="post" >
    Enter Number 1: <input type="number" name="num1"> <br>
    OP:<input type="text" name="op"> <br>
    Enter Number 2:<input type="number" name="num2"> <br>
    <input type="submit">
  </form>

  <?php 
  // Building a simple calculator using if statements
 $num1 = $_POST["num1"];
 $op = $_POST["op"];
 $num2 = $_POST["num2"];

    if($op == "+"){
      echo $num1 + $num2;
    }elseif($op == "-"){
      echo $num1 - $num2;
    }elseif($op == "*"){
      echo $num1 * $num2; 
    }elseif($op == "/"){
      echo $num1 / $num2;
    }else {
      echo "Invalid Operator";  
    }
 ?>
  
</body>
</html>