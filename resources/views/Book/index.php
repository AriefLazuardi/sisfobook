
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Saya</title>
</head>
<body>
    <h1>Ini adalah Katalog Bukuku</h1>


    <p>Berikut ini adalah buku yang tersedia:</p>


    <ul>
        <?php

use Dotenv\Exception\ValidationException;
use Illuminate\Auth\Events\Validated;

 foreach($book_data as $bd) :?>
        <li><?= $bd['title']?></li>
        <?php endforeach;?>
    </ul>
</body>
</html>







