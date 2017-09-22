<?php
function urlFormat($str){
	//strip out all whitespace
	$str= preg_replace('/\s*/', '', $str);
	//convert the string to all  lowercase
	$str= strtolower($str);
	// URL encode
	$str= urlencode($str);
	return $str;
}

function formatDate($date){
	$date = date("F j, Y, g:i a", strtotime($date));
	return $date;
}

function is_active($category){
	if(isset($_GET['category'])){

		if ($_GET['category']== $category){
		
		return 'active';
	}else {
		return '';
	}
}else {
	if ($category == null){
         return 'active';
     }
 }

}

?> 