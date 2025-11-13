<?php

session_start();

session_unset();

// Send a get request with loggedout so that we can capture it
// in index.php and show "you are now logged out"
header("Location: index.php?loggedout=true");