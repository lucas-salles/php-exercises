<?php
    session_destroy();
    setcookie(session_name(), 0, time()-1);
    header('location:index.html');
?>