<?php
class Load {
	function view($file_name, $data = null)
	{
		if( is_array($data) ) {
			// Gets data [ key => value ] as $key = value
			extract($data);
		}
		include $file_name . '.php';
	}
}
?>