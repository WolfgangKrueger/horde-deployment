<?php

$servers['imap']['disabled'] = false;
$servers['imap']['name'] = 'IMAP Server';
$servers['imap']['hostspec'] = 'b1gws_dovecot';
$servers['imap']['hordeauth'] = true;
$servers['imap']['protocol'] = 'imap';
$servers['imap']['port'] = 143;
$servers['imap']['secure'] = 'tls';
$servers['imap']['maildomain'] = 'dev.localhost';
$servers['imap']['smtp']['auth'] = true;
$servers['imap']['smtp']['debug'] = false;
$servers['imap']['smtp']['horde_auth'] = true;
$servers['imap']['smtp']['localhost'] = 'localhost';
$servers['imap']['smtp']['host'] = 'b1gws_postfix';
$servers['imap']['smtp']['port'] = 587;
$servers['imap']['smtp']['secure'] = 'none';
$servers['imap']['smtp']['lmtp'] = false;
