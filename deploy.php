<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/dalpe23/futbol-femeni.git');
set('php_fpm_service', 'php8.3-fpm');

add('shared_dirs', ['storage']);
add('writable_dirs', ['storage', 'bootstrap/cache', 'storage/logs']);

host('54.146.156.5')
    ->set('remote_user', 'sa04-deployer')
    ->set('deploy_path', '/var/www/es-cipfpbatoi-deployer/html');

task('artisan:migrate', function () {
    writeln('Tarea artisan:migrate deshabilitada.');
});
//Tarea personalizada para compilar activos con Vite
task('vite:build', function () {
    run('cd {{release_path}} && npm install && npm run build');
});

task('reload:php-fpm', function () {
    run('sudo /etc/init.d/php8.3-fpm restart');
});


after('deploy:vendors', 'vite:build');
after('deploy:failed', 'deploy:unlock');
after('deploy:vendors', 'artisan:storage:link'); // Crea enlaces simbólicos en storage
after('deploy', 'reload:php-fpm');