<?php
?>
<style>
    .instagram-post {
        float: left;
        width: 45%;
    }
</style>
<?php

$url_contents = file_get_contents( 'https://sheets.googleapis.com/v4/spreadsheets/106KshOGZ4R6zF7vv8v45DAgYj2HW977f1HnEa0PTjz8/values/final?alt=json&key=AIzaSyDmz_K1S2UXf7DaFy-4VVVVRUw-Rtewgh4');

$data = json_decode( $url_contents, true );

if ( is_array( $data ) && ! empty( $data ) ) {
    for ( $i = 0; $i < count( $data['values'] ); $i++ ) { 
        echo '<div class="instagram-post">' . $data['values'][ $i ][0] . '</div>';
    };
}