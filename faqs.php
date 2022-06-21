<?php include('elem/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>FAQs | ISMP'20 IIT Ropar</title>

	<?php $root_path=''; include("elem/stylesheets.php"); ?>

	<style>
		/*Category Box*/
		.faq-cat-box {
			position: sticky;
			top: 150px;
		}

		.faq-cat-box div {
			background-color: rgba(0, 0, 0, 0.02);
			padding: 20px;
			color: #666;
			font-family: 'Source Sans Pro';
			font-weight: 300;
			font-size: 20px;
			line-height: 30px;
			cursor: pointer;
			transition: all 0.3s ease-in-out;
		}

		.faq-cat-box div:hover {
			background-color: #ddd;
		}

		.active-cat {
			background-color: #054854 !important;
			color: white !important;
			transition: all 0.3s ease-in-out;
			font-weight: 500 !important;
		}

		@media (max-width: 660px) {
			.faq-cat-box {
				display: none;
			}
		}
	</style>
	<style>
		/*Search Area*/
		.faq-space {
			background-color: #054854;
			margin-top: -100px;
			padding-top: 100px;
			height: auto;
			margin-bottom: -20px;
		}

		.search-head {
			color: #fff;
			font-size: 30px;
			text-align: center;
			margin: 50px 0px;
			font-family: 'Source Sans Pro';
		}

		.search-desc {
			color: #D0EEFF;
			font-size: 17px;
			text-align: center;
			margin-top: 50px;
			font-family: 'Source Sans Pro';
			padding: 0 10px;
			line-height: 25px;
			margin-bottom: 30px;
		}

		.search-box {
			width: 50%;
			margin: auto;
			margin-bottom: 30px;
			height: 50px;
			position: sticky;
			top: 90px;
			z-index: 100;
		}

		input[type=text] {
			height: 50px;
			border-radius: 25px;
			border: 0;
			width: 100%;
			padding: 20px;
			padding-right: 40px;
			font-family: 'Raleway';
			color: #999;
			background-color: white;
			box-shadow: 0 6px 6px -6px #aaa;
		}

		input[type=text]::placeholder {
			color: #aaa;
			transition: all 0.2s ease-in-out;
		}

		input[type=text]:hover::placeholder,
		input[type=text]:focus::placeholder {
			color: #ddd;
		}

		.search-clear-cross {
			text-align: right;
			margin-top: -32.5px;
			margin-right: 18px;
			transition: all 0.2s ease-in-out;
			opacity: 0;
			display: none;
			cursor: pointer;
		}

		@media (max-width: 660px) {
			.search-box {
				width: 95%;
				top: 80px;
			}
		}
	</style>
	<style>
		/*Faq Area*/
		.faq-outer {
			overflow: hidden;
			height: auto;
			transition: all 0.2s ease-in-out
		}

		.faq-cat-head {
			font-size: 28px;
			text-align: center;
			font-family: 'Source Sans Pro';
			font-weight: 500;
			padding: 20px;
			margin-top: 20px;
			background-color: rgba(0, 0, 0, 0.02);
			position: relative;
		}

		.faq {
			border-bottom: 1px solid #ddd;
			cursor: pointer;
			z-index: 10;
			position: relative;
		}

		.faq-head {
			padding: 4px 20px;
			display: flex;
			align-items: center;
			transition: all 0.3s ease-in-out;
		}

		.small .faq-head {
			background-color: #fff;
		}

		.big .faq-head {
			background-color: #054854;
		}

		.faq-head div {
			margin-left: 20px;
			font-family: 'Jost';
			font-size: 22px;
			font-weight: 400;
			display: block;
			align-items: center;
			line-height: 30px;
			margin-top: 10px;
			margin-bottom: 10px;
			transition: all 0.3s ease-in-out;
		}

		.small .faq-head div {
			color: #107E92;
		}

		.big .faq-head div {
			color: #fff;
		}

		.faq i {
			font-size: 40px;
			color: #eee;
			float: left;
			transition: all 0.3s ease-in-out;
		}

		.small .faq-head:hover i {
			color: #107E92;
		}

		.big .faq-head:hover i {
			color: white;
		}

		.faq-desc-inner {
			padding: 10px;
			padding-left: 40px;
			padding-right: 20px;
			font-family: 'Jost';
			font-size: 17px;
			line-height: 28px;
		}

		.faq-desc {
			height: 0px;
			overflow: hidden;
			transition: all 0.3s ease-in-out;
			background-color: #F3FBEA;
		}

		.no-answer i {
			font-size: 200px;
			color: #eee;
			font-weight: 200;
		}

		.no-answer {
			position: absolute;
			top: 20px;
			opacity: 0;
			text-align: center;
			margin: auto;
			left: 50%;
			width: 300px;
			margin-left: -150px;
			z-index: 1;
			color: #bbb;
			line-height: 20px;
			font-family: 'Roboto';
			font-size: 16px;
		}

		.no-answer a{
			text-decoration: none;
			color: #999;
		}

		.faq-desc-inner a{
			text-decoration: underline;
			color:#777;
		}

		.faq-desc-inner a:hover{
			color:#333;
		}

		@media (max-width: 660px) {
			.faq-head div {
				font-size: 16px;
				line-height: 24px;
			}

			.faq i {
				font-size: 30px;
			}

			.faq-desc-inner {
				font-size: 15px;
				line-height: 24px;
				padding-left: 20px;
				padding-right: 10px;
			}
		}
	</style>

</head>

<body>
	<?php include("elem/navbar.php"); ?>

	<div class="faq-space">

		<!-- Search Area -->
		<div class="search-head">
			How can we help you?
		</div>
		<div class="search-box">
			<input type="text" class="search" name="search_faq" placeholder="Type keywords to find answers">
			<div class="search-clear-cross">
				<svg height="15" width="15">
					<line x1="0" y1="0" x2="15" y2="15" style="stroke:rgb(200,200,200);stroke-width:2" />
					<line x1="15" y1="0" x2="0" y2="15" style="stroke:rgb(200,200,200);stroke-width:2" />
				</svg>
			</div>
		</div>
		<div class="search-desc">
			You can also browse the topics below to find what you are looking for.
		</div>
		<!-- FAQs Area -->
		<div style="background: #F8F9FA; padding-bottom:50px;">
			<div class="row page-head-holder">
				<p class="page-head" style="margin-top:40px;">
					FAQS
				</p>
			</div>
			<div class="container">
				<div class="row">

					<div class="col-md-3">
						<div class="faq-cat-box">
							<div class="hostel-cat active-cat">Hostel Life</div>
							<div class="infra-cat">Infrastructure and Extra-Curricular</div>
							<div class="acad-cat">Academics</div>
						</div>
					</div>

					<div class="col-md-9">
						<div class="hostel">
							<div class="faq-cat-head">Hostel Life</div>
							<?php
							$type = "SELECT * FROM faqs WHERE cat='hostel'";
							$records = mysqli_query($conn, $type);

							while ($record = mysqli_fetch_assoc($records)) {

								$ques = $record['ques'];
								$ans = $record['ans'];
								echo "
									<div class='faq-outer'>
										<div class='faq small'>
											<div class='faq-head'>
												<i class='fa fa-angle-right' aria-hidden='true'></i>
												<div class='q'>
													$ques
												</div>
											</div>
											<div class='faq-desc'>
												<div class='faq-desc-inner'>
													$ans
												</div>
											</div>
										</div>
									</div>
								";
							}
							?>
						</div>
						<div class="infra">
							<div class="faq-cat-head">Infrastructure and Extra-Curricular</div>
							<?php
							$type = "SELECT * FROM faqs WHERE cat='infra'";
							$records = mysqli_query($conn, $type);

							while ($record = mysqli_fetch_assoc($records)) {

								$ques = $record['ques'];
								$ans = $record['ans'];
								echo "
									<div class='faq-outer'>
										<div class='faq small'>
											<div class='faq-head'>
												<i class='fa fa-angle-right' aria-hidden='true'></i>
												<div class='q'>
													$ques
												</div>
											</div>
											<div class='faq-desc'>
												<div class='faq-desc-inner'>
													$ans
												</div>
											</div>
										</div>
									</div>
								";
							}
							?>
						</div>
						<div class="acad">
							<div class="faq-cat-head">Academics</div>
							<?php
							$type = "SELECT * FROM faqs WHERE cat='acad'";
							$records = mysqli_query($conn, $type);

							while ($record = mysqli_fetch_assoc($records)) {

								$ques = $record['ques'];
								$ans = $record['ans'];
								echo "
									<div class='faq-outer'>
										<div class='faq small'>
											<div class='faq-head'>
												<i class='fa fa-angle-right' aria-hidden='true'></i>
												<div class='q'>
													$ques
												</div>
											</div>
											<div class='faq-desc'>
												<div class='faq-desc-inner'>
													$ans
												</div>
											</div>
										</div>
									</div>
								";
							}
							?>
						</div>
						<div class="no-answer">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="60%">
								<path d="M0 0h24v24H0V0z" fill="none" />
								<circle cx="15.5" cy="9.5" r="1.5" style="fill:#eee;" />
								<circle cx="8.5" cy="9.5" r="1.5" style="fill:#eee;" />
								<path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm0-3.5c.73 0 1.39.19 1.97.53.12-.14.86-.98 1.01-1.14-.85-.56-1.87-.89-2.98-.89-1.11 0-2.13.33-2.99.88.97 1.09.01.02 1.01 1.14.59-.33 1.25-.52 1.98-.52z" style="fill:#eee; stroke:#F8F9FA;stroke-width:0.3px;" /></svg>
							<br>
							No Answers found!
							<br>
							Try something more relevant
							<br>
							or ask <a href="http://www.iitrpr.ac.in/jee-aspirants/register.php" target="_blank" rel="noopener noreferrer">here</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php $faq_page=1; include("elem/footer.php"); ?>

	<?php include("elem/scripts.php"); ?>

	<script>
		//Category Selector Scroll
		$(document).ready(function() {
			$('.hostel-cat').on('click', function() {
				$("html, body").stop().animate({
					scrollTop: ($('.hostel').offset().top - 150)
				}, 1000, 'swing');
			});
			$('.infra-cat').on('click', function() {
				$("html, body").stop().animate({
					scrollTop: ($('.infra').offset().top - 150)
				}, 1000, 'swing');
			});
			$('.acad-cat').on('click', function() {
				$("html, body").stop().animate({
					scrollTop: ($('.acad').offset().top - 150)
				}, 1000, 'swing');
			});

			$(window).scroll(function() {
				if ($('.acad').offset().top - 160 <= $(window).scrollTop()) {
					$('.active-cat').removeClass('active-cat');
					$('.acad-cat').addClass('active-cat');
				} else if ($('.infra').offset().top - 160 <= $(window).scrollTop()) {
					$('.active-cat').removeClass('active-cat');
					$('.infra-cat').addClass('active-cat');
				} else {
					$('.active-cat').removeClass('active-cat');
					$('.hostel-cat').addClass('active-cat');
				}
			});
			$(window).scroll();
		});

		// Expand-Collapse FAQ
		$(document).ready(function() {
			var last=1;
			$(document).on('click', '.small', function() {
				if(last!=1){
					last.not(this).removeClass('small').addClass('big');
					last.trigger('click');
				}
				last=$(this);
				$(this).find('.faq-desc').height(($(this).find('.faq-desc-inner').outerHeight()));
				$(this).find('i').css("transform", "rotate(90deg)");
				$(this).removeClass('small').addClass('big');
				if ($(this).css("opacity") > 0.9)
					$(this).parent().height('auto');
				var self = this;
				setTimeout(function() {
					$("html, body").stop().animate({
						scrollTop: ($(self).offset().top - 150)
					}, 500, 'swing');
				}, 350);
			});

			$(document).on('click', '.big', function() {
				last=1;
				$(this).find('.faq-desc').height('0px');
				$(this).find('i').css("transform", "rotate(0deg)");
				$(this).removeClass('big').addClass('small');
				var self = this;
				setTimeout(function() {
					$("html, body").stop().animate({
						scrollTop: ($(self).offset().top - 150)
					}, 500, 'swing');
				}, 260);
			});

		});

		// Search FAQ
		$(document).ready(function() {

			var total_ques = 0;
			$('.faq').each(function() {
				total_ques++;
			});

			$('.search').focus();

			// Cross Button Clear
			$('.search-clear-cross').on('click', function() {
				$('.search').val('').trigger('keyup');
			});

			//Cross Button Show-Hide
			$('.search').on('keyup', function(e) {
				if ($('.search').val() != '') {
					$('.search-clear-cross').css("display", "block");
					setTimeout(function() {
						$('.search-clear-cross').css("opacity", "1");
					}, 2);
				} else {
					$('.search-clear-cross').css("opacity", "0");
					setTimeout(function() {
						$('.search-clear-cross').css("display", "none");
					}, 200);
				}
			});

			//Search keywords
			$('.search').on('keyup', function(e) {

				$("html, body").stop().animate({
					scrollTop: ($('.hostel').offset().top - 150)
				}, 1000, 'swing');

				var cur_search = $('.search').val();
				var cur_search = $.trim(cur_search);
				var cur_search_mod = cur_search.replace(/  +/g, ' ');
				var cur_search_regexp = new RegExp((cur_search_mod).split(" ").join('|'), "i");

				$('.faq').filter(function() {
					if ($(this).css('opacity') == 1) {
						var ans1 = (($(this).find('.q'))[0]).innerHTML.search(cur_search_regexp);
						var ans2 = (($(this).find('.faq-desc-inner'))[0]).innerHTML.search(cur_search_regexp);
						if (ans1 == -1 && ans2 == -1 && $(this).parent().css("height") != "0px") {
							var self = $(this);
							$(this).parent().css("height", $(this).outerHeight());
							setTimeout(function() {
								self.parent().css("height", "0px");
							}, 2);
						}
						return (ans1 == -1 && ans2 == -1);
					}
					return (0);
				}).css({
					opacity: 1.0
				}).animate({
					opacity: 0.9
				}, 2);

				$('.faq').filter(function() {

					if ($(this).css('opacity') != 1) {

						var ans1 = (($(this).find('.q'))[0]).innerHTML.search(cur_search_regexp);
						var ans2 = (($(this).find('.faq-desc-inner'))[0]).innerHTML.search(cur_search_regexp);
						if (ans1 != -1 || ans2 != -1) {
							$(this).parent().css("height", $(this).outerHeight());
						}
						return (ans1 != -1 || ans2 != -1);
					}
					return (0);
				}).css({
					opacity: 0.9
				}).animate({
					opacity: 1.0
				}, 2);

				/*No Answers Found Box Show-Hide*/
				setTimeout(function() {
					var a = 0;
					$('.faq').each(function() {
						if (($(this).css("opacity") != 1))
							a++;
					});
					if (a == total_ques && $('.faq-cat-head').css("opacity") != 0) {
						$('.faq-cat-head').css({
							opacity: 1
						}).animate({
							opacity: 0
						}, 100);
						setTimeout(function() {
							$('.no-answer').css({
								opacity: 0
							}).animate({
								opacity: 1
							}, 100);
						}, 100);
					} else if (a != total_ques && $('.faq-cat-head').css("opacity") != 1) {
						$('.faq-cat-head').css({
							opacity: 0
						}).animate({
							opacity: 1
						}, 100);
						$('.no-answer').css({
							opacity: 1
						}).animate({
							opacity: 0
						}, 100);
					}
				}, 50);

			});

		});

		/*Question from homepage*/
		$(document).ready(function() {
			var q = decodeURIComponent(window.location.search).substring(1);
			if (q != '')
				$('.search').val(q.split('=')[1]).trigger('keyup').trigger('input');
		});
	</script>

</body>

</html>