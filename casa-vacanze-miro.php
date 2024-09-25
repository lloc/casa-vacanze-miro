<?php/**
* Plugin Name: Custom plugin casa-vacanze-miro.com
* Plugin URI:  https://github.com/lloc/casa-vancanze-miro
* Description: Sets some custom stuff.
* Version:     1.0.0
* Network:     true
*/

add_filter( 'global_media.site_id', function() {
   return 10;
} );
