<?php
include('elem/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<html>

<head>
	<title>Schedule | ISMP'20 IIT Ropar</title>

	<?php $root_path = '';
	include("elem/stylesheets.php"); ?>

	<style>
		.body-cont{
			opacity:0;
		}
		.soon {
			font-family: 'Jost';
			font-weight: 700;
			font-size: 70px;
			letter-spacing: 10px;
			text-align: center;
			color: #ddd;
			line-height: 100px;
			padding: 30px 0px;
			height: 80vh;
		}

		.soon .col {
			color: #f44336;
			margin-left: -20px;
			letter-spacing: 0px;
		}

		@media (max-width:992px) {
			.soon {
				font-size: 40px;
				line-height: 60px;
			}
		}

		.cal-back-cont {
			width: 50%;
			position: fixed;
			left: -20%;
			fill: #1F2221;
			z-index: -200;
			bottom: -10%;
		}

		.cal-back {
			width: 100%;
		}

		@media (max-width:992px) {
			.cal-back-cont {
				width: 70%;
				left: -20%;
				bottom: 0;
			}
		}

		.date-cover {
			margin: 70px 0 100px 0;
			text-align: center;
			position: relative;
			border-bottom: 1px solid #303231;
			padding-bottom: 20px;
		}

		.sche-con {
			padding: 0 150px 0 150px;
		}

		.date-dec {
			position: absolute;
			top: -25px;
			right: 80px;
			z-index: -100;
		}

		.date-dec-dot {
			width: 150px;
		}

		.date-cont {
			display: inline-block;
			position: relative;
			width: auto;
		}

		.date-date {
			font-family: 'Pathway Gothic One';
			font-size: 200px;
			color: #F7941E;
			font-weight: 700;
			line-height: 150px;
			display: inline-block;
		}

		.date-month {
			font-family: 'Heebo';
			font-size: 40px;
			color: #F7941E;
			font-weight: 700;
			display: inline-block;
			position: absolute;
			top: 0px;
		}

		.date-day {
			font-family: 'Sorts Mill Goudy';
			font-size: 40px;
			color: #fff;
			display: inline-block;
			position: relative;
			bottom: 0;
			left: -30px;
		}

		.event-cont {
			margin-top: 20px;
			padding: 20px 20px 0px 20px;
			border-top: 1px solid #303231;
			text-align: left;
		}

		.event-time {
			font-family: 'Scope One';
			font-size: 22px;
			color: #FFF;
			line-height: 35px;
		}

		.event-desc {
			font-family: 'Ubuntu';
			font-size: 26px;
			color: #F7941E;
			font-weight: 400;
			line-height: 32px;
		}

		.event-opt {
			margin-top: 15px;
			color: #777;
			font-family: 'Sorts Mill Goudy';
		}

		.link,
		.link:visited,
		.link:active {
			color: #777;
			text-decoration: none;
			transition: all 0.2s ease-in-out;
		}

		.link:hover {
			color: #999;
		}

		@media (max-width:1000px) {
			.date-cover {
				margin: 20px 0px 90px 0px;
			}

			.sche-con {
				padding: 10px;
			}

			.date-date {
				font-size: 100px;
				line-height: 70px;
			}

			.date-month {
				font-size: 26px;
			}

			.date-day {
				font-size: 26px;
				left: -15px;
			}

			.event-time {
				font-size: 16px;
				line-height: 22px;
				margin-top: 10px;
			}

			.event-desc {
				font-size: 18px;
				line-height: 32px;
			}

			.event-opt {
				margin-top: 15px;
			}

			.date-dec {
				top: -25px;
				right: 20px;
			}

			.date-dec-dot {
				width: 70px;
			}
		}
	</style>

</head>

<body style="background-color:#191C1B">

	<!-- Loader -->
	<div class="loader-back">
		<div class="loader">
			<svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
				<path fill="#f44236" d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
				</path>
			</svg>
		</div>
	</div>

	<div class="body-cont">
		<?php include('elem/navbar.php'); ?>

		<div class="row page-head-holder">
			<p class="page-head" style="margin-top:40px; color:#ddd;">
				SCHEDULE
			</p>
		</div>
		<div class="cal-back-cont">
			<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.447 36.447" style="enable-background:new 0 0 36.447 36.447;" xml:space="preserve">
				<g>
					<path d="M30.224,3.948h-1.098V2.75c0-1.517-1.197-2.75-2.67-2.75c-1.474,0-2.67,1.233-2.67,2.75v1.197h-2.74V2.75 c0-1.517-1.197-2.75-2.67-2.75c-1.473,0-2.67,1.233-2.67,2.75v1.197h-2.74V2.75c0-1.517-1.197-2.75-2.67-2.75 c-1.473,0-2.67,1.233-2.67,2.75v1.197H6.224c-2.343,0-4.25,1.907-4.25,4.25v24c0,2.343,1.907,4.25,4.25,4.25h24 c2.344,0,4.25-1.907,4.25-4.25v-24C34.474,5.855,32.567,3.948,30.224,3.948z M25.286,2.75c0-0.689,0.525-1.25,1.17-1.25 c0.646,0,1.17,0.561,1.17,1.25v4.896c0,0.689-0.524,1.25-1.17,1.25c-0.645,0-1.17-0.561-1.17-1.25V2.75z M17.206,2.75 c0-0.689,0.525-1.25,1.17-1.25s1.17,0.561,1.17,1.25v4.896c0,0.689-0.525,1.25-1.17,1.25s-1.17-0.561-1.17-1.25V2.75z M9.125,2.75 c0-0.689,0.525-1.25,1.17-1.25s1.17,0.561,1.17,1.25v4.896c0,0.689-0.525,1.25-1.17,1.25s-1.17-0.561-1.17-1.25V2.75z  M31.974,32.198c0,0.965-0.785,1.75-1.75,1.75h-24c-0.965,0-1.75-0.785-1.75-1.75v-22h27.5V32.198z" />
					<rect x="6.724" y="14.626" width="4.595" height="4.089" />
					<rect x="12.857" y="14.626" width="4.596" height="4.089" />
					<rect x="18.995" y="14.626" width="4.595" height="4.089" />
					<rect x="25.128" y="14.626" width="4.596" height="4.089" />
					<rect x="6.724" y="20.084" width="4.595" height="4.086" />
					<rect x="12.857" y="20.084" width="4.596" height="4.086" />
					<rect x="18.995" y="20.084" width="4.595" height="4.086" />
					<rect x="25.128" y="20.084" width="4.596" height="4.086" />
					<rect x="6.724" y="25.54" width="4.595" height="4.086" />
					<rect x="12.857" y="25.54" width="4.596" height="4.086" />
					<rect x="18.995" y="25.54" width="4.595" height="4.086" />
					<rect x="25.128" y="25.54" width="4.596" height="4.086" />
				</g>
			</svg>
		</div>
		<div class="container sche-con">
			<?php
			require './plugins/google-api-php-client-2.5.0/vendor/autoload.php';

			$client = new \Google_Client();
			$client->setApplicationName('DATABASE');
			$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
			$client->setAccessType('offline');
			$client->setAuthConfig(__DIR__ . '/user-login/ismp-0d9250e8d41d.json');
			$service = new Google_Service_Sheets($client);
			$spreadsheetId = "1Ny_5heR6O6WRcJhJzs6vKBHhyI-xUrYodl5DkXkyxwc";

			$range = 'A2:D100';

			$response = $service->spreadsheets_values->get($spreadsheetId, $range)->getValues();

			for ($i = 0; $i < 99; $i++) {
				if (isset($response[$i][0]) && $response[$i][0] == 'coming soon') {
					echo "<div class='soon'>";
					echo "COMING<br>SOON<span class='col'>...</span>";
					echo "</div>";
					break;
				}
				if (isset($response[$i][0]) && $response[$i][0] == 'date') {
					$date = $response[$i][1];
					$month = $response[$i][2];
					$day = $response[$i][3];
					echo '<div class="row">
					<div class="date-cover">
			<div class="date-dec">';
					include("elem/dot.php");
					echo '</div>
			<div class="date-cont">
				<div class="date-date">';
					echo $date;
					echo '</div>
				<div class="date-month">';
					echo $month;
					echo '</div>
				<div class="date-day">';
					echo $day;
					echo '</div>
				</div>';

					for ($i++; $i < 99; $i++) {
						if (isset($response[$i][0]) && $response[$i][0] == 'event') {
							$ev_name = $response[$i][1];
							$ev_time = $response[$i][2];
							if (isset($response[$i][3]) && $response[$i][0] != '')
								$link = $response[$i][3];

							echo '<div class="event-cont">
							<div class="row">
								<div class="col-md-4 event-time">';
							echo $ev_time;
							echo '
								</div>
								<div class="col-md-8 event-desc">';
							echo $ev_name;
							echo '
									<div class="row event-opt">';
							if (isset($link)) {
								echo '
										<div class="col-2">';
								include('elem/video.php');
								echo '</div>
										<div class="col-1">
											<a href="' . $link . '" target="_blank" rel="noopener noreferrer" class="link">Join</a>
										</div>';
								unset($link);
							}
							echo '
									</div>
								</div>
							</div>
						</div>';
						} else if (isset($response[$i][0]) && $response[$i][0] == 'date') {
							$i--;
							break;
						}
					}

					echo '</div>';
					echo  '</div>';
				}
			}
			?>

		</div>

		<?php include("elem/footer.php"); ?>
	</div>
	<?php include("elem/scripts.php"); ?>

</body>

</html>