<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>XSS demo</title>
</head>
<body>
<?php
include('navbar/navbar.html')
?>
    <h1>XSS demo</h1>
    <form method="post" action="process_xss.php">
        <input type="text" name="zoekwoord">
        <input type="submit" name="submit" value="GOO">
    </form>

</body>
</html>
