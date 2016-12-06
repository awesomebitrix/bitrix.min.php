<?php

namespace rivetweb\Bitrix\Main\Web;

final class HttpClient {

	//private $headers;
	//private $cookies;
	private $result;

	function __construct() {
		//$this->headers = [];
	}

	function query($method, $url, $data = null) {
		$curlOptions = [
			CURLOPT_RETURNTRANSFER => true
		];
		if ($method == "POST") {
			$curlOptions[CURLOPT_POST] = true;
			$curlOptions[CURLOPT_POSTFIELDS] = http_build_query($data);
		} else if (!empty($data)) {
			$url .= strpos($url, "?") > 0 ? "&" : "?";
			$url .= http_build_query($data);
		}

		$curl = curl_init($url);
		curl_setopt_array($curl, $curlOptions);
		$this->result = curl_exec($curl);
		curl_close($curl);
	}

	function get($url) {
		$this->query("GET", $url);
		return $this->result;
	}

	function post($url, $data) {
		$this->query("POST", $url, $data);
		return $this->result;
	}

	/*
	function setHeader($k, $v, $b = true) {
		$this->headers[$k] = $v;
	}

	function download($url) {
		// set headers for download file
	}

	function setCookies($data) {
		//...
	}

	function getCookies() {
		//...
	}
	*/

}
