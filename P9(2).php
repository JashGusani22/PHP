<?php
// Set cookie when the buƩon is pressed
if (isset($_POST['set_cookie'])) {
 setcookie('username', 'JohnDoe', Ɵme() + 3600, '/');
 $message = "Cookie set! Welcome, JohnDoe!";
} else {
 $message = isset($_COOKIE['username']) ? "Hello, " . $_COOKIE['username'] : "Click to set a cookie!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, iniƟal-scale=1.0">
 <Ɵtle>Cookie Demo</Ɵtle>
</head>
<body>
 <h2>PHP Cookie Example</h2>
 <p><?php echo $message; ?></p>
 <!-- BuƩon to set the cookie -->
 <form method="POST">
 <buƩon type="submit" name="set_cookie">Set Cookie</buƩon>
 </form>
</body>
</html>
