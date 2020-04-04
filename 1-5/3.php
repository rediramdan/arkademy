<?php
function divide($array, $x)
{
	$array_amount = count($array);
	$array_modulus = $array_amount % $x;
	$remain = true;
	$new_array = [];
	if( $array_modulus == 1 && $x != 1)
	{
		$remain = false;
	}
	$tmp = [];
	foreach ($array as $key => $value) {
		if($x == 1)
		{
			$tmp = [];
			$tmp[] = $value;
			$new_array[] = $tmp;
		}else{
			if($key < $x){
				$tmp[] = $value;
				if($remain && $array_amount - 1 == $key)
				{
					$new_array[] = $tmp;
				}
			}else{
				if(!$remain && $array_amount - $array_modulus == $key){
					$tmp[] = $value;
					$new_array[] = $tmp;
					break;
				}else{
					$new_array[] = $tmp;
					$tmp = [];
					$tmp[] = $value;

					$x = $x*2;
				}			
			}

		}
	}
	return $new_array;
}
print_r(divide([1,10,20,40,60], 2));