<a href="<?php echo $routes->get('homepage')->getPath(); ?>">Back to homepage</a>
<a href="<?php echo $routes->get('homepage')->getPath()."patient/78"; ?>">Go to patient 78</a>
<a href="<?php echo $routes->get('homepage')->getPath()."patients"; ?>">Go to patients</a>

<?php echo $patient->getPatientId()." - ".$patient->getGender().$patient->getDateOfBirth().$patient->getDateOfDeath();?>