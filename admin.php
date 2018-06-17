<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/functions.php"); login_admin(); ?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width,initial-scale=1,shrink-to-fit=no" name="viewport">
    <link href=https://lucacastelnuovo.nl/images/favicon.ico rel="shortcut icon">
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,700">
</head>

<body>
    <div class="wrapper">
        <form class="login" method="post" action="auth.php" style="padding-bottom: 20px">
            <p class="title">Admin Panel</p>
            <?php if (isset($_SESSION['invite_response'])) {echo $_SESSION['invite_response']; unset($_SESSION['invite_response']);} else {echo '<input type="hidden" name="CSRFtoken" value="' . csrf_gen() . '"/><button id="submit"><i class="spinner"></i> <span class="state">Generate Invite Code</span></button>';} ?>
        </form>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/invite.js"></script>
</body>

</html>
