<?php

namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/akrug23/github-actions.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('162.144.0.194')
    ->setRemoteUser('akrug23')
    ->setPort('2222')
    ->setDeployPath('~/actions.baldmanweb.com');

// Hooks

after('deploy:failed', 'deploy:unlock');