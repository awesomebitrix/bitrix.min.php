<?php
/*

function fetch_url($url, $postdata = array()) {
	if (empty($postdata)) {
		$opts = array('http' => array('method' => 'GET'));
	}
	else {
		$opts = array('http' =>
			array(
				'method' => 'POST',
				'header' => 'Content-type: application/x-www-form-urlencoded',
				'content' => http_build_query($postdata)
			)
		);
	}
	$context = stream_context_create($opts);

	return file_get_contents($url, false, $context);
}

function db($config = null) {
	static $db = null;

	// TODO use config param for create new connections

	if (!$db) {
		$config = file_get_config();
		$options = array(
			PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES ' . $config->db->encoding . ';'
		);
		$db = new PDO('mysql:dbname=' . $config->db->dbname .
				';host=' . $config->db->host .
				(!empty($config->db->port) ? (';port=' . $config->db->port) : ''), $config->db->username,
				$config->db->password, $options);
		$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
		//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	return $db;
}

function get_mysql_data($str) {
	try {
		$db = db();

		$res = $db->query('SELECT * FROM db');
		return $res->fetchAll();
	}
	catch (PDOException $e) {
		echo '<big>' . $e->getMessage() . '</big>';
	}
}

function get_sqlite_data($str) {
	return array();
	try {
		// not work
		$db = new PDO('sqlite:test1.db');
		//$db = new PDO('sqlite:' . $_SERVER['DOCUMENT_ROOT'] . '/test1.db');

		// not supported
		//$db = new PDO('sqlite::memory:');

		return array();

		$db->exec('CREATE TABLE IF NOT EXISTS sites (
			id INTEGER PRIMARY KEY,
			title TEXT,
			time INTEGER
		)');

		echo '<pre>';
		$sql = 'INSERT INTO messages (title, time)
			VALUES (' . $db->quote($str) . ', ' . time() . ')';
		$db->exec($sql);
		echo 'do: ' . $sql . PHP_EOL;

		echo 'select data:' . PHP_EOL;
		foreach ($db->query('SELECT * FROM messages') as $row) {
			print_r($row);
			echo PHP_EOL;
		}
		echo '</pre>';
	}
	catch (PDOException $e) {
		echo '<big>' . $e->getMessage() . '</big>';
	}
}

*/