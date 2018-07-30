<?php if(Auth::LoggedIn()) {
	header("Location: /AirGo/crewcenter2/index.php/profile");
} else {
	header("Location: /index.php/login");
} ?>