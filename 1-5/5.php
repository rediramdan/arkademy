<?php
function findDuplicates($string){
	if(is_string($string)){

		$array_string = str_split($string);
		$tmp = [];
		foreach ($array_string as $key => $value) {
			$i = 1;
			foreach ($array_string as $char) {
				if($value == $char && $value != " ")
				{
					$tmp[$value] = $i++;
				}
			}
		}

		$new_string = "";
		foreach ($tmp as $name => $size) {
			if($size > 1)
			{
				$new_string .= $name." : ".$size.", ";
			}
		}

		return $new_string;
	}else{
		return "";
	}
}

echo findDuplicates('Saya adalah seorang dermawan');
