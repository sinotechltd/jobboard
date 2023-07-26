<?php

    session_start();
    session_unset();
    Session_destroy();

    header("location: http://localhost/jobboard");

?>