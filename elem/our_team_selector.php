<?php
$type = "SELECT * FROM team WHERE post = '$post_select'";
$records = mysqli_query($conn, $type);

while ($record = mysqli_fetch_assoc($records)) {

$name = $record['name'];
$post = $record['post'];
$wapp = $record['wapp'];
$fb = $record['fb'];
$mail = $record['mail'];
$phone = $record['phone'];
$img = $record['img'];
echo "
<div class='col-md-3 $phone_col'>
	<div class='our-team'>
		<div class='pic'>
			<img src='$img' alt=''>
";
if($mail != '' || $wapp != '' || $phone != '')
{
echo"
			<div class='hidden-contact'>
";
if ($mail != '')
echo"		
				<i class='fa fa-envelope' aria-hidden='true'></i><br>$mail<br>
";
if ($wapp != '')
echo "
				<i class='fa fa-whatsapp' aria-hidden='true'></i><br>$wapp
";
else if ($phone != '')
echo "
				<i class='fa fa-phone' aria-hidden='true'></i><br>$phone
";
echo"
			</div>
";
}
echo "		
		</div>
		<div class='detail'>
			<div class='title'>$name</div>
			<div class='post'>$post</div>
			<div class='contact'>
";
if ($wapp != '')
echo "
				<a href='https://api.whatsapp.com/send?phone=+91$wapp' target='_blank' rel='noopener noreferrer'><i class='fa fa-whatsapp' aria-hidden='true'></i></a>
";
if ($fb != '')
echo "
				<a href='$fb' target='_blank' rel='noopener noreferrer'><i class='fa fa-facebook-square' aria-hidden='true'></i></a>
";
if ($mail != '')
echo "
				<a href='mailto:$mail' target='_blank' rel='noopener noreferrer'><i class='fa fa-envelope' aria-hidden='true'></i></a>
";
if ($phone != '')
echo "
				<a href='tel:$phone' target='_blank' rel='noopener noreferrer'><i class='fa fa-phone' aria-hidden='true'></i></a>
";
echo "
			</div>
		</div>
	</div>
</div>
";
}
