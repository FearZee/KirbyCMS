<?php
    return [
        'debug' => true,
        'api' => [
            'allowInsecure' => true,
            'basicAuth' => true
        ],
        'auth' => [
            'trial' => 10,
            'timeout' => 3600,
            'methods' => ['password', 'code']
        ],
        'thumbs' => [
            'presets' => [
                'default' => ['width' => 72, 'quality' => 80, 'blur' => true]
            ]
        ],
        'routes' => [
            [
              'pattern' => 'logout',
              'action'  => function() {
        
                if ($user = kirby()->user()) {
                  $user->logout();
                }
        
                go('/kirby/plainkit-main/login');
        
              }
            ]
          ]
    ];
?>