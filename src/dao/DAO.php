<?php

class DAO {

  // Properties
  private static $dbHost = "ID276018_ma3.db.webhosting.be";
	private static $dbName = "ID276018_ma3";
	private static $dbUser = "ID276018_ma3";
  private static $dbPass = "ID276018_ma3";

  // private static $dbHost = "localhost";
	// private static $dbName = "isb";
	// private static $dbUser = "isb";
  // private static $dbPass = "isb";

	private static $sharedPDO;
	protected $pdo;

  // Constructor
	function __construct() {

		if(empty(self::$sharedPDO)) {
			self::$sharedPDO = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName, self::$dbUser, self::$dbPass);
			self::$sharedPDO->exec("SET CHARACTER SET utf8");
			self::$sharedPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$sharedPDO->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		}

		$this->pdo =& self::$sharedPDO;

	}

  // Methods

}

 ?>
