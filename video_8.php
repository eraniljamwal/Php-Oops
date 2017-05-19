<?php
// Dependency Injection
// Design patterns that are proven
// Our MVC is also design pattern
// the way we are writing code is efficient for linger run to manage and maintain


// When are using library in our php code
// we can use one library inside other library for reusability

// dry
// UserProfile class is dependent on logger class its called dependency injection
/**
 *
 */
class Logger // logger library created to use in multiple projects
{
  public function log($message){
    echo "Logging Message : ".$message;
  }
}


class UserProfile {

  private $logger;

  public function createUser(){
    $this->logger->log("User Has been created");
  }

  public function updateUser(){
    $this->logger->log("User Has been Updated");
  }

  public function deleteUser(){
    $this->logger->log("User Has been Deleted");
  }

  public function __construct(Logger $logger){ // Typehint
    $this->logger = $logger;
  }
}
$logger = new Logger();

$profile = new UserProfile($logger); // Now it is not fully dependent on parent class because we are not creating new obect we are just recieveing it as a parameter
$profile -> createUser();
?>
