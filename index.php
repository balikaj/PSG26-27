<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kezdolap</title>
</head>
<?php
    $nevem = "balazs";

    if(isset($_POST["btnPost"]))
    {
        echo "meg nyomtad";
    }
    if(isset($_POST["btnDelete"]))
    {
        echo "";
    }
?>

<body>
    <h1>udv a kezdolapon, <?php print($nevem)?> !</h1>

    <form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

<form method="post">
<button name="btnPost">nyomd meg!</button>

</form>

<form  method="post">
    <button name="btnDelete">torold</button></form>

</body>
</html>





