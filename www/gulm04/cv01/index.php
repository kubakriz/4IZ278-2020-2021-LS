<?php 

echo 'Ahoj';

$name = 'None';
$surname = 'Surnone';
$age = 12;
$points = 10.5;
$isTrue = true;
$person = [
    'name' => $name,
    'age' => $age,
];
$fruits = ['orange', 'apple', 'berry'];
$nothing = null;

$street = 'Americka';
$number = '1000/5';
$city = 'Praha';

$address = $street . " " . $number . ' ' . $city;

$job_pozition = 'Zomby';
$firm_name = 'Umbrella copr.';

$phone_number = '+420 444 666 007';
$email = 'example@example.com';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <h1>CV01 - i'm really sorry, but my first PHP-page sucks</h1>
    <h3>My business card in PHP</h3>
    <div class="container">
        <div class="personal">
            <p class="surname">Surname: <?php echo $surname; ?></p>
            <p class="name">Name: <?php echo $name; ?></p>
            <p class="job">Position: <?php echo $job_pozition; ?></p>
        </div>
        <div class="image-cont">
                <img src='./Umbrella_Corporation__ResidentEvil_-logo.png'>
        </div>
    </div>
    <div class="firm">
        <p class="firm_name"><?php echo $firm_name; ?></p>
        <p class="address"><?php echo $address; ?></p>
        <p class="phone"><?php echo $phone_number; ?></p>
        <p class="email"><?php echo $email; ?></p>
    </div>
</body>
</html>