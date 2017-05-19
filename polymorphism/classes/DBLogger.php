<?php

class DBLogger implements LoggerInterface// logger library created to use in multiple projects
{
  public function log($message){
    echo "Logging Message of Database : ".$message;
  }
}

?>
