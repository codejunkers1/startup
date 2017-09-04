<?php
// continue the session
session_start();
// retrieve session data
// set time-out period (in seconds)
$inactive = 0;

// check to see if $_SESSION["timeout"] is set
if (isset($_SESSION["timeout"])) {
    // calculate the session's "time to live"
    $sessionTTL = time() - $_SESSION["timeout"];
    if ($sessionTTL > $inactive) {
        session_destroy();
       header("Location: login.php?status=LOGOUT");
    }
}
if (isset($_SESSION["ID"])=="" ||isset($_SESSION["NAME"])=="") {
	session_destroy();
       header("Location: /startup/login.php?status=LOGOUT");
}

$_SESSION["timeout"] = time();

?>