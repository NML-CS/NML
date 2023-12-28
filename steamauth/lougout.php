<?php

session_start ();
unset ($_session['steamid']);
unset ($_session['steam_uptodate']);

header ("Location: index.php");
?>