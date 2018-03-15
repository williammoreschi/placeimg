function placeimg($width='480',$height='480',$categories=NULL,$filters=false){

$c 	= array("arch","animals","nature","people","tech","any");
if(empty($categories)){
	$r 	= rand(0,5); 
	$c	= $categories[$r];
}else{
	$c = (in_array($c, $categories)) ? $categories : "any"; 
}

if(!empty($f)){
	$r 	= rand(0,1); 
	$f 	= array("/grayscale","/sepia");
	$f	= $filters[$r];
}else{
	$f = "";
}

$w = (is_int($width)) ?  $width : "480"; 
$h = (is_int($height)) ?  $height : "480"; 

 return  "https://placeimg.com/".$w."/".$h."/".$c.$f;
}
