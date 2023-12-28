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
    ->setHostname('baldmanweb.com')
    ->setRemoteUser('akrug23')
    ->setConfigFile('.ssh/config')
    ->setPort('2222')
    ->setDeployPath('~/actions.baldmanweb.com');

// Hooks

after('deploy:failed', 'deploy:unlock');
