<?php

namespace rivetweb\Bitrix\Main\DB;

final class Connection {

	private $conn;
	private $sqlHelper;

	function __construct($dbconfig = null) {
		if (empty($dbconfig)) {
			$dbconfig = require _APP_CONFIG . "db.php";
		}
		$this->conn = new PDO(
			"mysql:dbname=" . $dbconfig["dbname"] .
				";host=" . $dbconfig["host"] .
				(!empty($dbconfig["port"])? (";port=" . $dbconfig["port"]) : ""),
			$dbconfig["username"],
			$dbconfig["password"],
			[
				PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES " . $dbconfig["encoding"] . ";"
			]
		);
		// set fetch assoc
		$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		//$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
		//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	function getSqlHelper() {
		if (empty($this->sqlHelper)) {
			$this->sqlHelper = new SqlHelper($this->conn);
		}
		return $this->sqlHelper;
	}

	function query($sql) {
		return $this->conn->query($sql);
	}

}
