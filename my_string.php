<?
function reload(){?>
<h1><a href="http://localhost:8080/my_string.php">Back to login</a>
</h1><br>
<? } ?>
<?

class string{
static function len($str){
	 return strlen($str);
}
	 static function count_words($str){
	 return str_word_count($str);
}
static function count($word,$str){
	 return substr_count($word,$str);
}
static function find_get($word,$str,$pos=0){
	 return strstr($word,$str,$pos);
}
static function find_ignore_case($word,$str,$pos=0){
	 return stristr($word,$str,$pos);
}
static function find($word,$str){
	//returns false if not true
	//if string->find()===false
	 return strpos($word,$str);
}
static function wrap($word,$len=NULL,$rep=NULL){
	/*wrap word start at $len *with $rep or <br>
*/	
	 if($len===NULL){
         	if ($rep===NULL)
         return wordwrap($word);
         return wordwrap($word,NULL,$rep);
         }
	 return wordwrap($word,$len,$rep);
}
static function sub($word,$start,$stop){
         if($stop===NULL)
         return substr($word,$start);
	 return substr($word,$start,$stop);
}
static function trim($word,$option=NULL,$rep=NULL){
	//Trims whitespace or any contenten of $rep. $Option is left or right trim
         if($option===NULL)
         return trim($word,$rep);
         else if($option==="right"){
         return rtrim($word,$rep);
         }
         else if($option==="left")
         return ltrim($word,$rep);
throw new Exception("Invalid argument");
}
static function replace($word,$found,$rep,&$times=NULL){
         if($times===NULL)
	 return str_replace($found,$rep,$word);
         return str_replace($found,$rep,$word,$times);
}
static function translate($word,$found,$rep){
//strtr( $myString, "ac", "bd" );Change a to b and c to d
return strtr( $word, $found, $rep );
}
static function lower($str){
	 return strtolower($str);
}
static function upper($str){
	 return strtoupper($str);
}
static function first_lower($str){
         //First char to lower
	 return lcfirst($str);
}
static function first_upper($str){
//first char to upper
	 return ucfirst($str);
}

static function first_chars_upper($str){
//First word chat to upper
	 return ucwords($str);
}
}
//string::replace();
/*try{
$a= "<pre>!".$str->wrap("a:NN                      ",2,"<br>")."!</pre>";
print($a);
}
catch(exception $e)
{
	echo $e;
}*/

?>