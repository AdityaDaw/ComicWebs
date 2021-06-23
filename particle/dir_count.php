<?php
function dir_count(string $dir_name)
{
	// Set the current working directory
	$directory = $dir_name."/";
	
	// Initialize filecount variavle
	$filecount = 0;
	
	$files2 = glob( $directory ."*" );
	
	if( $files2 ) {
		$filecount = count($files2);
	}
	
	return $filecount;
}

// $dir_name="../img/Release That Witch";
// $num=dir_count($dir_name);
// echo $num;
	
?>
