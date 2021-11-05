<?php

require 'vendor/autoload.php';

use Danieldiaz\Poo\modelos\User;
use Danieldiaz\Poo\modelos\ImagePost;
use Danieldiaz\Poo\modelos\VideoPost;

$daniel = new User("Daniel Díaz", "danieldiaz", "daniel@hotmail.com", "123456ABC");
$santiago = new User("Santiago Quintero", "mrsanty", "santy@hotmail.com", "asdadas2132");
$harry = new User("Harry Villamil", "hichijam", "harry@hotmail.com", "lkjhgdh212");
$juanca = new User("Van soren", "juancasmilling", "jcsmilling@hotmail.com", "abcfdegasd1");

$danielPost = new ImagePost("De vacaciones en la playa", "IMG001.jpg");
$santiagoPost = new VideoPost("Con mi amorcito, el ron", "VID001.mp4");
$harrypost = new VideoPost("Add a quote in english", "VID009.mov");
$juancaPost = new ImagePost("Aquí en mi van", "IMG101.jpg");


$daniel->publish($danielPost);
$santiago->publish($santiagoPost);
$harry->publish($harrypost);
$juanca->publish($juancaPost);

$danielPost->addLike($harry);
$juancaPost->addLike($daniel);

$harrypost->addLike($daniel);
$harrypost->addLike($santiago);
$harrypost->addLike($harry);
$harrypost->addLike($juanca);

$santiagoPost->addLike($daniel);
$santiagoPost->addLike($juanca);

$daniel->addFollower($harry);
$daniel->addFollower($juanca);

$juanca->addFollower($daniel);

$harry->addFollower($daniel);
$harry->addFollower($santiago);
$harry->addFollower($juanca);

print_r(User::showProfile($daniel));
print_r(User::showProfile($harry));
print_r(User::showProfile($santiago));
print_r(User::showProfile($juanca));

print_r($danielPost->toString());
print_r($harrypost->toString());
print_r($santiagoPost->toString());
print_r($juancaPost->toString());
