<?php

$avatar = 'captain-america-logo.svg';
$firstName = 'Steven';
$lastName = 'Rogers';
$title = 'CEO';
$company = 'Avengers';
$phone = '+420 723 111 22';
$email = 'captain_america@avengers.com';
$website = 'www.avengers.com';
$street = 'Smetanova';
$propertyNumber = 22;                   
$postcode = 11000;
$city = 'Praha';
$available = true;

// string concatenation
$address = $street . ' ' . $propertyNumber .  ', ' . $city . ' ' . $postcode;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Business card</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <main class="container">
        <h1 class="text-center">My Business Card in PHP</h1>
        <div class="business-card bc-front row">
            <div class="col-sm-4">
                <div class="logo" style="background-image: url(./img/<?php echo $avatar; ?>)"></div>
            </div>
            <div class="col-sm-8">
                <div class="bc-firstname"><?php echo $firstName; ?></div>
                <div class="bc-lastname"><?php echo $lastName; ?></div>
                <div class="bc-title"><?php echo $title; ?></div>
                <div class="bc-company"><?php echo $company; ?></div>
            </div>
        </div>
        <div class="business-card bc-back row">
            <div class="col-sm-6">
                <div class="bc-firstname"><?php echo $firstName; ?></div>
                <div class="bc-lastname"><?php echo $lastName; ?></div>
                <div class="bc-title"><?php echo $title ?></div>
            </div>
            <div class="col-sm-6 contacts">
                <div class="bc-address"><i class="fas fa-map-marker-alt"></i> <?php echo $address; ?></div>
                <div class="bc-phone"><i class="fas fa-phone"></i> <?php echo $phone; ?></div>
                <div class="bc-email"><i class="fas fa-at"></i> <?php echo $email; ?></div>
                <div class="bc-website"><i class="fas fa-globe"></i> <?php echo $website; ?></div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>
    <?php require "../hotreloader.php" ?>
</body>

</html>