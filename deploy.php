<?php

namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/akrug23/github-actions.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('actions.baldmanweb.com')
    ->set('remote_user', 'akrug23')
    ->set('deploy_path', '~/github-actions');

// Hooks

after('deploy:failed', 'deploy:unlock');
