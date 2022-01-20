<?php
$this->applications['passwd']['fileroot'] = "$deployment_fileroot/passwd";
$this->applications['passwd']['webroot'] = $this->applications['horde']['webroot'] . '/../passwd';
$this->applications['passwd']['themesfs'] = $this->applications['horde']['fileroot'] . '/../themes/passwd/';
$this->applications['passwd']['themesuri'] = $this->applications['horde']['webroot'] . '/../themes/passwd/';