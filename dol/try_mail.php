<?php
require_once 'ClassAutoLoad.php';

$mailCnt=[
    'name_from' => 'Nicole Nyakomitta',
    'mail_from' => 'nicole.nyakomitta@strathmore.edu',
    'name_to' => 'Elizabeth Nicole',
    'mail_to' => 'elizabethnicole246@gmail.com',
    'subject' => 'Greetings from BBIT API ',
    'message' => 'Welcome to CLASS be prepared for challenging but rewarding tasks'
];
$ObjSendmail ->Send_Mail( $conf,$mailCnt);