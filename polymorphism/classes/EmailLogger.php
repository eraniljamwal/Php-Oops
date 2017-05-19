<?php

class EmailLogger implements LoggerInterface // logger library created to use in multiple projects
{
  public function log($message){
    echo "Logging Message of Email : ".$message;
  }
}

?>
