<?php
/**
 * Initialize database
 *
 * @package SimoneBaldini\bootstrap.php
 */
use Illuminate\Database\Capsule\Manager as Capsule;

global $wpdb;
$capsule = new Capsule();
$capsule->addConnection(
    [
        'driver'    => 'mysql',
        'host'      => DB_HOST,
        'database'  => DB_NAME,
        'username'  => DB_USER,
        'password'  => DB_PASSWORD,
        'charset'   => DB_CHARSET,
        // 'collation' => DB_COLLATE,
        'prefix'    => $wpdb->prefix,
    ]
);
$capsule->setAsGlobal();
$capsule->bootEloquent();
