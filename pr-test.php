<?php

wp_remote_request( 'http://example.com/pr-test.php?foo=bar' );

echo $_GET['unsafe'];
