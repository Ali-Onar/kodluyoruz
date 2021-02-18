<?php

abstract class SQL {
      use PDOConnector;
      public $connectionStatus = false;

      public function isConnected() {

      }
}
