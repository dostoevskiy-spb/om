<?php
namespace Deployer;

require 'recipe/yii2-app-advanced.php';

// Project name
set('application', 'omnicommspb.ru');

// Project repository
set('repository', 'git@github.com:dostoevskiy-spb/om.git');

// [Optional] Allocate tty for git clone. Default value is false.
//set('git_tty', true);

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', ['vendor']);

// Writable dirs by web server 
add('writable_dirs', []);


// Hosts

host('omni')
    ->set('deploy_path', '~/www/{{application}}');
    
// Tasks

task('build', function () {
//    run('cd {{release_path}} && build');
});

/**
 * Main task
 */
task('deploy', [
    'deploy:info',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
//    'deploy:vendors',
    'deploy:init',
    'deploy:shared',
    'deploy:run_migrations',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
])->desc('Deploy your project');

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

