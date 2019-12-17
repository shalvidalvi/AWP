<!DOCTYPE html>
<html>
<head>

</head>

<body>
    <?php ?>
   <form action="one.php" method="post">
       Name:<input type="password" name="name"><br>
       Num1:<input type="number" name="num1"><br>
       Num2:<input type="number" name="num2"><br>
       <input type="submit">

</form>
<br>
Your name:<?php echo $_POST["name"] ?><br>
Sum:<?php echo $_POST["num1"]+$_POST["num2"] ?> 
</body>
</html>
