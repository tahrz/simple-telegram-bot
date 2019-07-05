<?php

$webhookInfo = [
    'ok' => true,
    'result' => [
        'url' => 'https://bot-domain.my/bot8y7t6r56.php',
        'has_custom_certificate' => false,
        'pending_update_count' => 1
    ]
];

return [
    'getMe' => [
        'output' => [
            'id' => 0000000,
            'is_bot' => true
        ]
    ],
    'getWebhook' => [
        'output' => $webhookInfo
    ],
    'setWebhook' => [
        'input' => [
            'url' => $webhookInfo['result']['url'],
            'output' => $webhookInfo
        ],
        'output' => [
            'ok' => true,
            'result' => true,
            'description' => 'Webhook was set'
        ]
    ],
    'deleteWebhook' => [
        'output' => [
            'ok' => true,
            'result' => true,
            'description' => 'Webhook is successful deleted'
        ]
    ],
    'getWebhookInfo' => [
        'output' => $webhookInfo
    ],
    'getUpdates' => [
        'output' => [
            'update_id' => 1000000
        ]
    ],
    'sendMessage' => [
        'input' => [
            'chat_id' => 0000001,
            'text' => 'Hi from bot!'
        ],
        'output' => [
            'message_id' => 0000002,
            'date' => 1562254721,
            'chat' => [
                'id' => 0010000,
                'type' => 'private'
            ],
        ]
    ]
];