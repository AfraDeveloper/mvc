<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
Home Page <?= $name ?>
<form action="/add" method="post">
    <input type="text" name="name">
    <button type="submit">submit</button>
</form>
</body>
</html>
