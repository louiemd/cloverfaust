<?php

class Install_hook {
	function go($base){
		if(file_exists("system/application/config/not-installed") && strpos($_SERVER['REQUEST_URI'],"/install/") == false){
			$base = substr($_SERVER['PHP_SELF'], 0, strpos($_SERVER['PHP_SELF'], "index.php"));
			//header("Location: $base"."install/main");
		}
	}
}

?>