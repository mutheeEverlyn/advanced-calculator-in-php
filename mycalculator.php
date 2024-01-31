<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my calculator</title>
</head>
<body>
    <form method="post">
     <fieldset>
        <legend>my advanced calculator</legend>
        Enter firstNumber:<br/>
        <input type="number" name="num1"><br/><br/>
        Enter operator:<br/>
        <input type="text" name="op" ><br/><br/>
        Enter secondNumber:<br/>
        <input type="number" name="num2"><br/><br/>
        <input type="submit" name="submit" value="calculate">
    </fieldset>
    </form>
    <?php
    if (isset($_POST["submit"])){
        $num1=$_POST["num1"];
        $num2=$_POST["num2"];
        $op=$_POST["op"];
       if($op==="+"){
        echo $num1 + $num2;
       }
       elseif($op==="-"){
        echo $num1 - $num2;
       }
       elseif($op==="/"){
        echo $num1 / $num2;
       }
       elseif($op==="*"){
        echo $num1 * $num2;
       }
       elseif($op==="%"){
        echo $num1 % $num2;
       }
       else{
        echo "invalid operator";
       }

    }
    ?>
</body>
</html>