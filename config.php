<?php 
// return array (
//   'debug' => false,
//   'database' => 
//   array (
//     'driver' => 'mysql',
//     'host' => '51.79.18.138',
//     'port' => 3306,
//     'database' => 'freeper1_new_forum',
//     'username' => 'freeper1_new_forum',
//     'password' => 'AmritaMowna@98',
//     'charset' => 'utf8mb4',
//     'collation' => 'utf8mb4_unicode_ci',
//     'prefix' => '',
//     'strict' => false,
//     'engine' => NULL,
//     'prefix_indexes' => true,
//   ),
//   'url' => 'https://freeperfectmoney.com',
//   'paths' => 
//   array (
//     'api' => 'api',
//     'admin' => 'admin',
//   ),
//   'headers' => 
//   array (
//     'poweredByHeader' => true,
//     'referrerPolicy' => 'same-origin',
//   ),
// );

return array (
  'debug' => true,
  'database' => 
  array (
    'driver' => 'mysql',
    'host' => 'localhost',
    'port' => 3306,
    'database' => 'forum',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix' => '',
    'strict' => false,
    'engine' => NULL,
    'prefix_indexes' => true,
  ),
  'url' => 'http://localhost/forum1/forum_new',
  'paths' => 
  array (
    'api' => 'api',
    'admin' => 'admin',
  ),
  'headers' => 
  array (
    'poweredByHeader' => true,
    'referrerPolicy' => 'same-origin',
  ),
);