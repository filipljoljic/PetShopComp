<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once dirname(__FILE__)."/dao/UserDao.class.php";

$user_dao = new UserDao();

//$user= $user_dao->get_user_by_email("filip.ljoljic@stu.ibu.edu.ba");

$user1 =[
"name"=>"Adi lagumddzija laG",
"email"=>"Adilag00225@gmail.com",
"password"=>"004489304",
  "account_id"=> 1
];
$user = $user_dao->add_user($user1);

print_r($user);




 ?>
