<?php

new WP_Query(
	array(
		'post__not_in' => array( 1, 2, 3 ),
		'meta_value'   => 'foo',
		'meta_name'    => 'bar,
	)
);
