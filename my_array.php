<?function reload_my_array(){?>
<h1><a href="http://localhost:8080/my_array.php">Back to login</a>
</h1><br>
<?}?>

<?
//array_filter($arr,$function)
class array_t{
	 static function
	 remove(&$arr,$index){
	 array_splice($arr, $index , 1);
	}
	static function
	 remove_key(&$arr,$key){
	unset($arr[$key]);
	}
	static function insert(&$arr,$val,$index){
		 return array_splice( $arr, $index, 0,$val);
	}
	static function sub(&$arr,$start,$stop){
		return array_slice( $arr, $start, $stop, true );
	}
	static function join($arr1,$arr2){
		//return join of two array
		return array_merge($arr1,$arr2);
	}
	 static function push(&$arr,$val){
		return array_push($arr,$val);
	}
	 static function len(&$arr){
		return count($arr);
	}
	 static function each(&$arr,&$key,&$val){
		return (list( $key, $val ) = each( $arr ));
	}
	 static function pop(&$arr){
		return array_pop($arr);
	}
	 static function peek(&$arr){
	 	//return current value pointed
		return current($arr);
	}
	 static function find(&$arr,$val){
	 	//return index or key from Search
		return array_search($val,$arr);
	}
	 static function index(&$arr){
	 	//return index or key from current value
		return key($arr);
	}
	 static function sort(&$arr){
		return sort($arr);
	}
	 static function key_sort(&$arr){
	 	//sort array keys instead of value
		return ksort($arr);
	}
	 static function key_reverse_sort(&$arr){
		return krsort($arr);
	}
	 static function next(&$arr){
		return next($arr);
	}
	 static function prev(&$arr){
		return prev($arr);
	}
	 static function reset(&$arr){
	 	//reset the pointer
		return reset($arr);
	}
	 static function reverse_sort(&$arr){
		return rsort($arr);
	}
	 static function str_to_arr($arr,$delimeter){
	 	/*Create an array from words delimited 
	 	*$c=$arr->str_to_arr("google.com+localhost+8080","+");*/
		return explode($delimeter,$arr);
	}
	 static function arr_to_str($arr,$delimeter){
	 	/*Create a delimited string from array
	 	*$c=$arr->arr_to_str(array("google.com","localhost","8080"),"+");*/
		return implode($delimeter,$arr);
	}
}






?>