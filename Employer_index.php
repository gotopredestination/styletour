<?php
require_once('Employer.php');
$emp=new Employer;
$emp->surname="Борисов";
$emp->name="Игорь";
$emp->pathonomic="Иванович";
if (!$emp->set_age(23)){
	exit('ошибка определения возраста');
}

/*echo $emp->get_full_info();
echo $emp->getIds();*/

$emp=new Employer("Борисов","Игорь","Иванович",23);
print_r($emp);