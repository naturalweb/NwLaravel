<?php

return [
    /**
     * Use helpers "asDateTime" e "fromDateTime"
     * @see src/NwLaravel/helpers.php
     */
    'date_format' => 'd/m/Y H:i',

    /**
     * Use to proxyUrl
     * @see src/NwLaravel/OAuth/OAuthProxy.php
     */
    'oauth' => [
        'urlToken' => '/oauth/access-token',
    ],

    /*
    |--------------------------------------------------------------------------
    | Max age in months for log records
    |--------------------------------------------------------------------------
    |
    | When running the cleanLog-command all recorder older than the number of months
    | specified here will be deleted
    |
    */
    'activity' => [
        'deleteOlderThanMonths' => env('DELETE_ACTIVITY_LOG_OLDER', 6),
        'auth_guard' => null,
        'field_username' => 'username',
        'handler' => \NwLaravel\ActivityLog\Handlers\DefaultHandler::class,
        'content_types' => [
            //
        ],
        'action_icon' => [
            'element'      => 'span',
            'class_prefix' => 'fa fa-',
            'icons' => [
                'default' => 'info-circle',
                'created' => 'plus-circle',
                'updated' => 'edit',
                'deleted' => 'minus-circle',
                'view' => 'eye',
                'login' => 'sign-in',
                'logout' => 'sign-out',
                'executed' => 'ban',
                'send' => 'envelope',
                'upload' => 'cloud-upload',
                'download' => 'cloud-download',
                'info' => 'info-circle',
            ],
        ],
    ],
];
