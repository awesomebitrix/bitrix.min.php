<?php

namespace rivetweb\Bitrix\Main\DB;

final class SqlHelper {

	private $conn;

	function __construct($conn) {
		$this->conn = $conn;
	}

	function forSql($expr) {
		return $this->conn->quote($expr);
	}

}