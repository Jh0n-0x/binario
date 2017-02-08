<?php
/*
Criado Por Pablo Santhus
*/

	error_reporting(0);
	set_time_limit(0);

	$opc = getopt("e:d:");

	if($argv[1] == "-e"){
		function encriptar($string){
			$letras = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
			$binario = array("01000001", "01000010", "01000011", "01000100", "01000101", "01000110", "01000111", "01001000", "01001001", "01001010", "01001011", "01001100", "01001101", "01001110", "01001111", "01010000", "01010001", "01010010", "01010011", "01010100", "01010101", "01010110", "01010111", "01011000", "01011001", "01011010");
			$convert = str_replace($letras, $binario, $string);
			echo "\nA palavra foi encriptada: " . $convert . "\n";
		}
		encriptar(trim(strtoupper($opc['e'])));
	}

	if($argv[1] == "-d"){
		function decriptar($string){
			$letras = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
			$binario = array("01000001", "01000010", "01000011", "01000100", "01000101", "01000110", "01000111", "01001000", "01001001", "01001010", "01001011", "01001100", "01001101", "01001110", "01001111", "01010000", "01010001", "01010010", "01010011", "01010100", "01010101", "01010110", "01010111", "01011000", "01011001", "01011010");
			$convert = str_replace($binario, $letras, $string);
			echo "\nO codigo foi decriptado: " . $convert . "\n";
		}
		decriptar($opc['d']);
	}


?>
