<?php
declare(strict_types=1);
use Viserio\Cache\DataCollectors\ViserioCacheDataCollector;
use Viserio\Foundation\DataCollectors\FilesLoadedCollector;
use Viserio\Foundation\DataCollectors\NarrowsparkDataCollector;
use Viserio\Foundation\DataCollectors\ViserioHttpDataCollector;
use Viserio\Log\DataCollectors\LogsDataCollector;
use Viserio\Translation\DataCollectors\ViserioTranslationDataCollector;

return [
    'webprofiler' => [
        'enable'         => true,
        'jquery_is_used' => false,

        'collectors' => [
            NarrowsparkDataCollector::class,
            ViserioHttpDataCollector::class,
            ViserioTranslationDataCollector::class,
            ViserioCacheDataCollector::class,
            // FilesLoadedCollector::class,
            // LogsDataCollector::class
        ],
        'collector' => [
            'view' => [
                'collect_data' => true,
            ],
            'swiftmail' => true,
        ],
    ],
];
