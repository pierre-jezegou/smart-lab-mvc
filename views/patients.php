<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patients</title>
</head>
<body>
    <section>
        <h1>My patient</h1>
        <ul>
            <li><?php echo $patient->getPatientId(); ?></li>
            <li><?php echo $patient->getGender(); ?></li>
            <li><?php echo $patient->getDateOfBirth(); ?></li>
            <li><?php echo $patient->getDateOfDeath(); ?></li>
            <li><?php echo $patient->getExpireFlag(); ?></li>
        </ul>
        <a href="<?php echo $routes->get('homepage')->getPath(); ?>">Back to homepage</a>
    <section>
</body>
</html>