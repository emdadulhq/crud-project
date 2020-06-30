<?php

function old($name){
	if(isset($_POST[$name])){
	echo $_POST[$name];	
	}
}