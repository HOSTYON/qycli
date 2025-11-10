<?php

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Location of your WordPress configuration. */
require_once(ABSPATH . '../conf/wp-config.php');

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
