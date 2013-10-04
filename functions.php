<?php

include("_functions/admin_pages_fully.php");

add_theme_support('post-thumbnails');
add_theme_support('menus');

//add_image_size('tamanho_img', 100, 100, true);

function print_telephone($telephone) {
	$new_telephone = array();

	$telephone_size = strlen($telephone);

	$new_telephone[] = substr($telephone, $telephone_size - 4, 4);
	$new_telephone[] = ' - ';
	$new_telephone[] = substr($telephone, $telephone_size - 8, 4);
	$new_telephone[] = ') ';
	$new_telephone[] = substr($telephone, $telephone_size - 10, 2);
	$new_telephone[] = '(';

	if (strlen($telephone) > 10) {
		$new_telephone[] = ' ';
		$new_telephone[] = substr($telephone, 0, $telephone_size - 10);
	}

	for ($i = sizeof($new_telephone) - 1; $i >= 0; $i--) {
		echo $new_telephone[$i];
	}
}

?>
