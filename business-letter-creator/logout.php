<?php
	session_start();
	session_unset($_SESSION);
	session_destroy();
?>
<script>
	location.replace("login.php");
</script>
