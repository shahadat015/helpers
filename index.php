<?php

$nums = array( 1, 2, 3 );

function filter( $num ) {
    return ! ( $num & 1 );
}

print_r(array_filter($nums, 'filter'));