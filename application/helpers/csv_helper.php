<?php

function readcsv( $file){
	$f = fopen( $file , 'r');

	$result = fread( $f ,1000);
	print(chr(0xEF).chr(0xBB).chr(0xBF));
	print_r( $result);
}