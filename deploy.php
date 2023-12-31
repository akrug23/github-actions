<?php

namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/akrug23/github-actions.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('ec2-18-222-48-241.us-east-2.compute.amazonaws.com')
    ->setHostname('aws.baldmanweb.com')
    ->setRemoteUser('ec2-user')
    // ->setConfigFile('.ssh/config')
    ->setPort('22')
    ->setDeployPath('/var/www/aws/');

// Hooks

after('deploy:failed', 'deploy:unlock');
