<?php
/**
** activation theme
**/

// ma première action
function dire_bonjour(){
	echo '<p class="hello"> Hello World !!</p>';
}
add_action( 'init', 'dire_bonjour');

?>