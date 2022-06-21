<?php
session_start();
include('../elem/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<html>

<head>
	<title>Mentor Panel | ISMP'20 IIT Ropar</title>

	<meta name="google-signin-client_id" content="876979268180-6a1ohk80jjp759vg2r5vlrvqdisqsoqg.apps.googleusercontent.com">
	<script src="https://apis.google.com/js/platform.js" async defer></script>

	<?php $root_path = '../';
	include("../elem/stylesheets.php"); ?>

</head>

<body>

	<?php include('../elem/navbar.php'); ?>

	<div class="row page-head-holder">
		<p class="page-head">
			MENTOR PANEL
		</p>
	</div>

	<div class="container">

		<?php
		if (isset($_COOKIE['ismp_id']))
			$_SESSION['id'] = $_COOKIE['ismp_id'];
		if (isset($_COOKIE['ismp_name']))
			$_SESSION['name'] = $_COOKIE['ismp_name'];
		if (isset($_COOKIE['ismp_row']))
			$_SESSION['row'] = $_COOKIE['ismp_row'];
		if (isset($_COOKIE['ismp_picture']))
			$_SESSION['picture'] = $_COOKIE['ismp_picture'];

		if (isset($_COOKIE['ismp_id']) && $_COOKIE['ismp_id']) {
			echo "<div class='row justify-content-between'>";

			echo "<div class='col-md align-self-center'>";
			echo "<div class='hello'>Hello " . $_SESSION['name'] . "</div>";
			echo "</div>";

			echo "<div class='col-md align-self-center'>";
			echo "<img class='user-img' src='" . $_SESSION['picture'] . "'>&nbsp;&nbsp;&nbsp;&nbsp;";
			echo "</div>";

			echo "<div class='col-md align-self-center'>";
			echo "<div class='sign-out'><a href='logout.php'>Sign Out</a></div>";
			echo "</div>";

			echo "</div>";

			echo "<div class='updates'>";
			echo "<div class='head'>UPDATES</div>";
			require '../plugins/google-api-php-client-2.5.0/vendor/autoload.php';

			$client = new \Google_Client();
			$client->setApplicationName('DATABASE');
			$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
			$client->setAccessType('offline');
			$client->setAuthConfig(__DIR__ . '/ismp-0d9250e8d41d.json');
			$service = new Google_Service_Sheets($client);
			$spreadsheetId = "10vfkXYFtTVBnhK6jyyAFWTTASqx8P_0G_Xtffmg_7kM";

			$range = 'C' . $_SESSION['row'] . ':Z' . $_SESSION['row'];

			$response = $service->spreadsheets_values->get($spreadsheetId, $range);

			$range2 = 'C1:Z2';

			$response2 = $service->spreadsheets_values->get($spreadsheetId, $range2);

			$none=1;

			echo "<ol class='list-1'>";
			for ($i = 0; $i < 20; $i++) {
				if (isset($response->getValues()[0][$i]) && $response->getValues()[0][$i] != '')
				{
					$none=0;
					if ((isset($response2->getValues()[0][$i]) && $response2->getValues()[0][$i] == 'download') || (isset($response2->getValues()[0][$i]) && $response2->getValues()[0][$i] == 'download_private')) {
						echo "<li>";
						echo "<a href='download.php?r=" . $_SESSION['row'] . "&c=" . chr($i + 67) . "' target='_blank' rel='noopener noreferrer'>";
						echo $response2->getValues()[1][$i];
						echo "</a>";
						echo "</li>";
					} else
						echo "<li>" . $response->getValues()[0][$i] . "</li>";
				}
			}
			echo "</ol>";
			if ($none==1)
				echo "No updates :)";

			$id = $_SESSION['id'];
			if ($id == "2018chb1038@iitrpr.ac.in" || $id == "2018ceb1003@iitrpr.ac.in" || $id == "2018ceb1014@iitrpr.ac.in" || $id == "2019eeb1180@iitrpr.ac.in" || $id == "2018meb1299@iitrpr.ac.in" || $id == "2019eeb1210@iitrpr.ac.in") {

				echo "<br><br>";

				echo "<div class='head'>UPLOAD</div>";
				echo "<div style='font-size:16px'>";
				echo '<form action="file_upload.php" method="POST"
				enctype="multipart/form-data">
				<input type="file" name="files[]" multiple> 
				<input type="submit" name="submit" value="Upload" >
				</form> ';
				echo "</div>";
			}

			echo "</div>";
		} else
			echo '<div class="sign-in"><div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div><div class="wait"></div></div>';

		?>
		<br>
		<?php
		//echo "<a href='download.php?q=" . "1.pdf" . "'>click to download</a>";
		?>

	</div>




	<?php include("../elem/footer.php"); ?>

	<?php include("../elem/scripts.php"); ?>
	<script type="text/javascript">
		function onSignIn(googleUser) {
			var profile = googleUser.getBasicProfile();
			var id_token = googleUser.getAuthResponse().id_token;
			gapi.auth2.getAuthInstance().disconnect();
			$.ajax({
				data: 'id_token=' + googleUser.getAuthResponse().id_token,
				url: 'verify.php',
				method: 'POST',
				beforeSend: function() {
					$('.wait').text('Please Wait\nRedirecting...');
				},
				success: function(msg) {
					if (msg == '0')
						alert("You are not a registered mentor!");
					location.reload();
				}
			});
		}
	</script>

</body>

</html>