<?php

/* close connection */
$thread = $mysqli->thread_id;
$mysqli->kill($thread);
$mysqli->close();

?>
