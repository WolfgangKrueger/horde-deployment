<?php
$deployment_webroot = '/';
$deployment_fileroot = '/srv/www/horde/web';
$app_fileroot = '/srv/www/horde/web/horde';
$app_webroot = '/horde';
$this->applications['horde']['fileroot'] = $app_fileroot;
$this->applications['horde']['webroot'] = $app_webroot;
$this->applications['horde']['jsfs'] = $deployment_fileroot . '/js/horde/';
$this->applications['horde']['jsuri'] = $deployment_webroot . 'js/horde/';
$this->applications['horde']['staticfs'] = $deployment_fileroot . '/static';
$this->applications['horde']['staticuri'] = $deployment_webroot . 'static';
$this->applications['horde']['themesfs'] = $deployment_fileroot . '/themes/horde/';
$this->applications['horde']['themesuri'] = $deployment_webroot . 'themes/horde/';