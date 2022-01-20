<?php
$this->applications['content']['fileroot'] = "$deployment_fileroot/content";
$this->applications['content']['webroot'] = $this->applications['horde']['webroot'] . '/../content';
$this->applications['content']['themesfs'] = $this->applications['horde']['fileroot'] . '/../themes/content/';
$this->applications['content']['themesuri'] = $this->applications['horde']['webroot'] . '/../themes/content/';