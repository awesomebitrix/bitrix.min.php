<?php

namespace rivetweb\Bitrix\Main;

final class Application {

	static $conn = null;

	static function getConnection() {
		if (empty(self::$conn)) {
			self::$conn = new DB\Connection();
		}
		return self::$conn;
	}

}

