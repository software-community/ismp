<html>

<head>
    <meta name="google-signin-client_id" content="876979268180-6a1ohk80jjp759vg2r5vlrvqdisqsoqg.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
</head>

<body>
    <script>
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function() {
            alert('User signed out.');
        });
    </script>
    <?php
    session_start();
    setcookie("ismp_id", "", time() - 3600);
    setcookie("ismp_row", "", time() - 3600);
    setcookie("ismp_name", "", time() - 3600);
    setcookie("ismp_picture", "", time() - 3600);
    session_destroy();
    header("Location: index.php");
    ?>
</body>

</html>