<?php 
$dirpath='F:\AppServ\www\study\css\bjgm';
/* $d=dir($dirpath);
while (false !== ($entry = $d->read())) {
   //echo $entry."<br/>\n";
   
} */


function show_list($path){
	global $returnpath;
	if(is_dir($path)){
		$dp=dir($path);
		while(false !== ($file=$dp->read()))
			if($file!='.'&&$file!='..')
			show_list($path.'/'.$file);
		$dp->close();
	} else{
		$returnpath[]=$path;
	}
	//$returnpath[]=$path;
	//echo "$path<br>";
	return $returnpath;
}
function translatecode($file){
	$dirname=dirname($file);
	$basename=basename($file);
	if(strpos(strtolower($basename), 'html')!==false){
		$string=file_get_contents($file);
		//$string=iconv('GBK', 'UTF-8', $string);
		//$string = mb_convert_encoding($string,'UTF-8','GBK');
		//<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
		//$string=str_ireplace('<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />', '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />', $string);
		//$string = "\xEF\xBB\xBF".$string;
		$name=strtolower($basename);
		$name=str_ireplace('html', 'php', $name);
		//explode('.', $name)
		$string="<?php\n?>\n".$string;
		$handle=fopen($dirname.'/'.$name,'w+');
		fwrite($handle, $string);
		fclose($handle);
		//file_put_contents($dirname.'/'.$name, $string);
	}
}
$test=show_list($dirpath,array());
foreach($test as $key=>$file){
	translatecode($file);
}
/* echo '<pre>';
var_dump($test);
echo '</pre>' */

//function show_source($file_name, $return)


?>