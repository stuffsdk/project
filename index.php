<?php
#PATH
define('PATH', exec('echo $HOME/stuffsdk-src/'));
require_once(sprintf('%s%s',PATH,'stuffsdk/manifest.php'));
bind_service();
