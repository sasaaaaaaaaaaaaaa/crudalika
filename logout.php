<?php
session_start();
session_unset();
session_destroy();

echo"<script type='text/javascript'>
alert('anda telah logout');
window.location='login.php';
</script>";
?>