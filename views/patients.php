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
        <h1>My patients</h1>
        <?php foreach($patients->patients_data as $patient):?>
        <ul>
            <li><?php echo $patient->getPatientId()." - ".$patient->getGender().$patient->getDateOfBirth().$patient->getDateOfDeath();?></li>
        </ul>
        <?php endforeach;?>
        <?php include("../views/links.php");?>
    <section>
</body>
</html>