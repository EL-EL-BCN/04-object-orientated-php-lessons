<?php
spl_autoload_register('MyAutoLoader');

		function MyAutoLoader($ClassName) {
			$path ="classes/";
			$extension =".class.php";
			$FullPath = $path . $ClassName . $extension;

			if (!file_exists($FullPath)) {
				return false;
			}

			include_once $FullPath;
		}
