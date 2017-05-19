<?php
// polymorphism : one type of variable or function performing multiple behavior
function __autoload($class){
  include_once "classes/$class.php";
}


function getLogger($type){
    switch($type){
      case 'email':
        return new EmailLogger;
        break;

      case 'database':
        return new DBLogger;
        break;

      case 'file':
        return new FileLogger;
        break;
    }
}

$logger = getLogger('file');

$profile = new UserProfile($logger);
$profile->createUser();


?>
