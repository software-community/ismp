<?php
session_start();

if (isset($_SESSION['id'])) {
	require '../plugins/google-api-php-client-2.5.0/vendor/autoload.php';
	$client = new \Google_Client();
	$client->setApplicationName('DATABASE');
	$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
	$client->setAccessType('offline');
	$client->setAuthConfig(__DIR__ . '/ismp-0d9250e8d41d.json');
	$service = new Google_Service_Sheets($client);
	$spreadsheetId = "10vfkXYFtTVBnhK6jyyAFWTTASqx8P_0G_Xtffmg_7kM";

	$r = $_GET['r'];
	$c = $_GET['c'];

	if (strlen($c) == 1 && $r < 100) {

		$response = $service->spreadsheets_values->get($spreadsheetId, $c . $r . ":" . $c . $r);
		if (isset($response->getValues()[0][0])) {
			$file_name = $response->getValues()[0][0];
			$file = "downloads/" . $response->getValues()[0][0];

			$response2 = $service->spreadsheets_values->get($spreadsheetId, $c . "1" . ":" . $c . "1");
			$per = $response2->getValues()[0][0];

			$entry_no = substr($_SESSION['id'], 0, 11);

			if (file_exists($file)) {
				if (($per == "download_private" && ((strpos($file_name, $entry_no) != FALSE) || (substr($file_name, 0, 11) == $entry_no))) || $per == "download") {
					$fp = fopen($file, "r");

					header("Cache-Control: maxage=1");
					header("Pragma: public");
					header("Content-type: application/pdf");
					header("Content-Disposition: inline; filename=" . $myFileName . "");
					header("Content-Description: PHP Generated Data");
					header("Content-Transfer-Encoding: binary");
					header('Content-Length:' . filesize($file));
					ob_clean();
					flush();
					while (!feof($fp)) {
						$buff = fread($fp, 1024);
						print $buff;
					}
					exit;
				} else
					echo "You are not allowed to access this file";
			} else echo "No such file exists";
		}
	}
} else
	header("Location: index.php");
