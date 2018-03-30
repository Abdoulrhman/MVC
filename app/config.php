<?php
if(!defined('DS')){
    define('DS',DIRECTORY_SEPARATOR);
}
// keda b2olo ana 3iez el folder eli fih  el file eli ana fi delwa2ati [config.php]
define('APP_PATH',realpath(dirname(__FILE__)));
define('VIEWS_PATH',APP_PATH . DS. 'views' . DS);