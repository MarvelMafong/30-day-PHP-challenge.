<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style type="style.css">
body{
    background-color: rgb(184, 119, 245);
    color: black;
    text-align: center;
    padding-top: 30px;
    box-sizing: border-box;
    text-decoration: none;    
}
.submit-btn{
    color: blue;
    text-decoration: none;
    padding: 15px 15px;
}
form{
margin: auto;
border: 2px solid whitesmoke;
width: 25%;
height: 250px;
border-radius: 6px;
box-shadow: 5px 5px 10px;
}


</style>
</head>
<body>
    <form method="POST" action="process.php">
      <p> Enter the First Number  </p>
        <input type="number" name="num1"> <br>
       <p> Enter  the Second Number </p> 
        <input type="number" name="num2"> <br>
        <p> Select Operation </p>
        <select name="operation">
            <option value="+"> + </option>
            <option value="-"> - </option>
            <option value="*"> * </option>
            <option value="/"> / </option>
            <option value="%"> % </option>
            <option value="^"> ^ </option>
            <option value="sqrt"> sqrt </option> 
        </select><br><br>
        <btn class="submit-btn">
        </form>
        <input type="submit" name="Submit" value="SUBMIT"> 
</div>


<?php
$a = $_POST['num1'];
$b = $_POST['num2'];
$z = null;
$operator = $_POST['operation'];

if (isset($_POST['Submit'])){
    switch($operator){

        case'+':
             $z = $a + $b;
             echo"Adding these two Numbers gives {$z}";
           break;
        
           case'-':
            $z = $a - $b;
            echo"Subtracting these two Numbers gives {$z}";
          break;

          case'*':
            $z = $a * $b;
            echo"Multiplying these two Numbers gives {$z}";
          break;

          case'/':
            $z = $a / $b;
            echo"Dividing these two Numbers gives {$z}";
          break;

          case'%':
            $z = $a % $b;
            echo" The Modulus of these two Numbers is {$z}";
          break;

          case'Power':
            $z = $a ^ $b;
            echo"The Power of these two Numbers is {$z}";
          break;

          case'sqrt':
            $z = sqrt($a);
            echo "The sqrt of this Numbers is {$z}";
          break;
          
        default:
          echo "error";
        break;
}
}
?>
</body>
</html>