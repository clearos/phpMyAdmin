<?php

$cfg['McryptDisableWarning'] = true;

$cfg['UploadDir'] = '/var/lib/phpMyAdmin/upload';
$cfg['SaveDir']   = '/var/lib/phpMyAdmin/save';
$cfg['SessionSavePath']  = '/var/lib/webconfig/session';

$cfg['Servers'][1]['host'] = '127.0.0.1';
$cfg['Servers'][1]['auth_type'] = 'cookie';
$cfg['Servers'][1]['verbose'] = 'Main Database';
