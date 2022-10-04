<?php 
<<<<<<< HEAD
	function checkError($validation, $field)
	{
		if(isset($validation)) {
			
			if($validation->hasError($field)) {
				return $validation->getError($field);
			}
		}
	}
 ?>
=======
	function loadError($validation, $filed)
	{
		if(isset($validation)) {
			if($validation->hasError($filed)) {
				return $validation->getError($filed);
			}
		}
	}
?>
>>>>>>> 6472ee85aa62242c71ae22d6e751b0934c5906cd
