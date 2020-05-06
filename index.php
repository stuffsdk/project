<?php

#PATH
define('PATH', exec('echo $HOME/stuffsdk-src/'));
define('MANIFEST','stuffsdk/manifest.php');

require_once(sprintf('%s%s',PATH,MANIFEST));

#bind
manifest::bind();
