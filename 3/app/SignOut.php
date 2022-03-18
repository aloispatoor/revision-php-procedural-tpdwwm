<?php
	session_start();
	

	if(session_destroy())
	{
		header("Location:../views/signIn.php?success=signOutSuccess");
        exit();
	}
?>