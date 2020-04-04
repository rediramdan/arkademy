<?php

function validateColor($color)
{
	$array_color = str_split($color);
	$valid = true;
	$format = ['A','B','C','D','E','F','a','b','c','d','e','f','1','2','3','4','5','6','7','8','9','0'];
	foreach ($array_color as $key => $value) {
		if($key == 0)
		{
			if ($value != "#") {
				$valid = false;
				break;
			}
		}else{
			$valid_2 = false;
			foreach ($format as $rule) {
				if($rule == $value )
				{
					$valid_2 = true;
				}
			}
			if(!$valid_2)
			{
				$valid = false;
				break;
			}
		}
	}
	if(count($array_color) != 7 && count($array_color) != 4)
	{
		$valid = false;
	}

	if($valid){
		return "Format kode Hex benar!";
	}else{
		return "Format kode Hex salah!";
	}
}


echo validateColor("#340FFF");

