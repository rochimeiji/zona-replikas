<?php
function post($array){
	if(isset($_POST[$array])){
		return $_POST[$array];
	}
}
function get($array){
	if(isset($_GET[$array])){
		return $_GET[$array];
	}
}
?>