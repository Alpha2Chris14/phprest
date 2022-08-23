<?php
    defined('DS') ? null : define('DS',DIRECTORY_SEPARATOR);
    defined('SITE_ROOT') ? null : define('SITE_ROOT',DS.'wampii'.DS.'www'.DS.'phprest');
    defined('INC_PATH') ? null : define('INC_PATH',SITE_ROOT.DS.'includes');
    defined('CORE_PATH') ? null : define('CORE_PATH',SITE_ROOT.DS.'core');

    //load the config file
    require_once(INC_PATH.DS."config.php");

    //include core classes
    require_once(CORE_PATH.DS."post.php");
?>