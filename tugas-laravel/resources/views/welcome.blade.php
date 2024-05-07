<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELAMAT DATANG</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>SELAMAT DATANG!</h1>
    <p>Terima kasih telah bergabung di website kami. Media belajar kita bersama!</p>
    Nama: <?php echo $_GET["first-name"]; ?> 
    <?php echo $_GET["last-name"]; ?><br>
    Gender: <?php echo $_GET["gender"]; ?><br>
    <?php echo $_GET["nationality"]; ?><br>
    <?php echo $_GET["language"]; ?><br>
    <?php echo $_GET["bio"]; ?><br>
</body>
</html>