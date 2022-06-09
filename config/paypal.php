<?php 
return [ 
    'client_id' => 'AZcnS0sZioxfCQqlJJb9kjwpKuNlApmmLx6RWZnSKnepsrcW5ukDjHQWTa5aXCbAR8h_YPzxh3mt_kIE',
	'secret' => 'EHQL4Fg558Q6MdIxHqoItYS5JQwdvmG6Md9qHL2AIXyQVpzjRseKKnkDYL5Hc68ghfSFo8-z0-V4aZVU',
    'settings' => array(
        'mode' => 'sandbox',
        'http.ConnectionTimeOut' => 1000,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'FINE'
    ),
];