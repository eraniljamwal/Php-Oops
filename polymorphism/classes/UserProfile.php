<?php
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

  public function __construct(LoggerInterface $logger){ // Typehint
      $this->logger = $logger;
  }
}
?>
