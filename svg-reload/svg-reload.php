<?php
/*
Plugin Name: SVG Reload
Plugin URI:  https://loading.io/lib/svg-reload
Description: Reload SVG for restarting animation
Version:     0.0.1
Author:      zbryikt
Author URI:  http://github.com/loadingio/
Text Domain: svg-reload
License:     GPLv2
*/

function tutsplus_add_script_wp_footer() {
  echo '
  <script>
    Array.from(document.querySelectorAll("[src$=svg]")).map(function(n){
      src = n.getAttribute("src");
      rnd = Math.random().toString(36).substring(2);
      src = src + (/\?/.exec(src) ? "&" : "?") + "asvg=" + rnd;
       n.setAttribute("src", src);
    })
    console.log("powered by loading.io svg-reload plugin");
  </script>
  ';
}
add_action('wp_footer', 'tutsplus_add_script_wp_footer');
