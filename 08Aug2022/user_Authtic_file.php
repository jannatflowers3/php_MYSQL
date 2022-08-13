<?php
// Preset authentication status to false
$authorized = false;
if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {
// Read the authentication file into an array
$authFile = file("authenticate.txt");
// Search array for authentication match
foreach ($authFile as  $line ) {
list($user, $hash) = explode(":", $line);
if ($_SERVER['PHP_AUTH_USER'] == $user ||
// password_verify($_SERVER['PHP_AUTH_PW'], trim($hash)))
sha1($_SERVER['PHP_AUTH_PW']) == $hash
)
$authorized = true;
break;
}

// If not authorized, display authentication prompt or 401 error
// If (!$_SERVER['HTTPS']) {
// echo " Please use HTTPS when accessing this document";
// exit;
// }
if (!$authorized) {
header('WWW-Authenticate: Basic Realm="Secret Stash"');
header('HTTP/1.0 401 Unauthorized');
print('You must provide the proper credentials!');
exit;
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>JANNATUL</H1>
</body>
</html>