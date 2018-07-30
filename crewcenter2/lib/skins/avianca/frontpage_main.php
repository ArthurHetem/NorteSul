<?php if(Auth::LoggedIn()) {
	header("Location: /nortesul/crewcenter2/index.php/profile");
} else {
	header("Location: /nortesul/crewcenter2/index.php/login");
} ?>