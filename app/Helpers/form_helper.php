<?php 
	function checkError($validation, $field)
	{
		if(isset($validation)) {
			
			if($validation->hasError($field)) {
				return $validation->getError($field);
			}
		}
	}
 ?>