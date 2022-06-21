<?php
session_start();
if (isset($_POST['id_token'])) {
    require_once '../plugins/google-api-php-client-2.5.0/vendor/autoload.php';
    $id_token = $_POST['id_token'];

    $client = new Google_Client(['client_id' => "876979268180-6a1ohk80jjp759vg2r5vlrvqdisqsoqg.apps.googleusercontent.com"]);
    $payload = $client->verifyIdToken($id_token);
    if ($payload) {
        $client = new \Google_Client();
        $client->setApplicationName('DATABASE');
        $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
        $client->setAccessType('offline');
        $client->setAuthConfig(__DIR__ . '/ismp-0d9250e8d41d.json');
        $service = new Google_Service_Sheets($client);
        $spreadsheetId = "10vfkXYFtTVBnhK6jyyAFWTTASqx8P_0G_Xtffmg_7kM";

        $range = 'A1:A200';

        $response = $service->spreadsheets_values->get($spreadsheetId, $range);

        $allow = 0;
        $row = 0;
        for ($i = 1; $i < 200; $i++) {
            if (isset($response->getValues()[$i][0]))
                if ($response->getValues()[$i][0] == $payload['email']) {
                    $allow = 1;
                    $row = $i + 1;
                }
        }
        if ($allow) {
            setcookie('ismp_id', $payload['email'], time() + (86400 * 15));
            setcookie('ismp_name', $payload['name'], time() + (86400 * 15));
            setcookie('ismp_picture', $payload['picture'], time() + (86400 * 15));
            setcookie('ismp_row', $row, time() + (86400 * 15));
            echo "session started";
        } else {
            setcookie("ismp_id", "", time() - 3600);
            setcookie("ismp_row", "", time() - 3600);
            setcookie("ismp_name", "", time() - 3600);
            setcookie("ismp_picture", "", time() - 3600);
        }
        echo $allow;
    } else {
        echo "Inavlid ACCOUNT!!";
    }
} else
    header("Location: index.php");
