<?php
namespace Deployer;

// ================================================================
// configuration
// ================================================================

define('GIT_REPOSITORY', 'git@github.com:O-clock-Oz/apo-Shabadabada.git');

// Wordpress installation data ====================================
define('APPLICATION_NAME', 'Shabadabada');
define('SITE_NAME', 'Shabadabada : le meilleur site de blindtests musicaux');
define('BO_USER', 'admin');
define('BO_PASSWORD', 'BattreLeSangDansNosVeines3!');
define('BO_EMAIL', 'solene.pilliard@gmail.com');
// ================================================================


// configuration for production serveur ==========================
host('production')  // name of the "environment" : "production"

    ->set('wp_configuration', '02-production.php')  // which wordpress configuration file to use (locatest in "configuration" folder)
    ->set('branch', 'develop') // git branch which will be deployed

    ->hostname('ec2-54-211-13-201.compute-1.amazonaws.com')    // host of the production server
    ->user('ubuntu')                    // ssh user used to connect to the production server
    ->identityFile('~/.ssh/awsoz.pem')  // ssh key used to connect to the production server

    ->set('deploy_path', '/var/www/html/apo-Shabadabada') // in which folder the code will be deployed on production server
    ->set('current_release_filepath', '/var/www/html/apo-Shabadabada/current/public') // which folder will be used as source files folder
    ->set('site_filepath', '/var/www/html/apo-Shabadabada/public')    // which folder will be used as apache root folder

    ->set('rsync_src', __DIR__ . '/public/wp-content/themes/sample/assets/dist')    // local source folder to be synchronized with production server
    ->set('rsync_dest','{{release_path}}/public/wp-content/themes/sample/assets/dist')  // server production folder to be synchronized with local folder
;



// configuration for development installation (current folder) =====
localhost('development')
    ->set('wp_configuration', '01-development.php')
    ->set('branch', 'develop')

    ->hostname('localhost')

    ->set('site_filepath', '/var/www/html/apo-Shabadabada/public')
;