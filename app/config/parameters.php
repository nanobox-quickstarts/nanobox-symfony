<?php

// http://nux.net/secret
$secret = getenv('SYMFONY_SECRET') || '86bc1dc4359efa409d317c45f02628d6946c767c';

// general
$container->setParameter('secret', $secret);
$container->setParameter('locale', 'en');

// database configuration
$container->setParameter('database_driver', 'pdo_mysql');
$container->setParameter('database_host', getenv("DATA_DB_HOST"));
$container->setParameter('database_port', 3306);
$container->setParameter('database_name', 'gonano');
$container->setParameter('database_user', getenv("DATA_DB_USER"));
$container->setParameter('database_password', getenv("DATA_DB_PASS"));

// mailer
$container->setParameter('mailer_transport', null);
$container->setParameter('mailer_host', null);
$container->setParameter('mailer_user', null);
$container->setParameter('mailer_password', null);
