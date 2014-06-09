<?php

/*
|--------------------------------------------------------------------------
| Data format for the Learnosity Reports API
|--------------------------------------------------------------------------
|
| Use this file to create the necessary data used to instantiate the
| Learnosity Reports API service, you'll need:
|   - service  (string) (mandatory)
|   - security (array)  (mandatory)
|   - secret   (string) (mandatory)
|   - request  (array)  (mandatory)
|
| Use the example code below as a template or as a guide. The end result
| should be a JSON object to be passed into LearnosityReports.init()
|
*/

$service = 'reports';
$security = array(
    'consumer_key' => 'yis0TYCu7U9V4o7M',
    'domain'       => 'localhost',
    'timestamp'    => gmdate('Ymd-Hi')
);
$secret    = '74c5fd430cf1242a527f6223aebd42d30464be22';
$sessionId = 'FF59DDD4-9E9E-4581-A74C60D791B4172C';
$request   = array(
    array(
        'id'          => 'report-1',
        'type'        => 'user-sessions-summary',
        'session_ids' => array(
            'AC023456-2C73-44DC-82DA28894FCBC3BF'
        )
    ),
    array(
        'id'        => 'report-2',
        'session_id'=> $sessionId,
        'type'      => 'user-session-detail'
    ),
    array(
        'id'        => 'report-3',
        'type'      => 'user-progress-by-tag',
        'hierarchy' => 'author'
    ),
    array(
        'id'        => 'report-4',
        'type'      => 'user-sessions-summary-by-tag',
        'ui'        => 'bar-chart',
        'hierarchy' => 'author',
        'session_ids' => array(
            'B146BA2C-C2D0-4368-B90FFBA2B245F2BA'
        )
    ),
    array(
        'id'    => 'report-5',
        'type'  => 'group-lastscore-by-activity',
        'users' => array(
            array(
                'id' => 'brianmoser',
                'name' => 'Brian Moser'
            ),
            array(
                'id' => '12345678',
                'name' => 'John Carter'
            )
        ),
        'activities' => array(
            array(
                'id' => 'edde56e8-ff65-e42e-b4fe49caad796bd',
                'name' => 'Mid Term'
            ),
            array(
                'id' => 'emberDemo2013',
                'name' => 'Final'
            )
        )
    ),
    array(
        'id'    => 'report-6',
        'type'  => 'user-lastscore-by-activity',
        'activities' => array(
            array(
                'id' => 'edde56e8-ff65-e42e-b4fe49caad796bd',
                'name' => 'Mid Term'
            ),
            array(
                'id' => 'emberDemo2013',
                'name' => 'Final'
            )
        )
    ),
    array(
        'id'    => 'report-7',
        'type'  => 'group-lastscore-by-item',
        'users' => array(
            array(
                'id' => 'brianmoser',
                'name' => 'Brian Moser'
            ),
            array(
                'id' => '12345678',
                'name' => 'John Carter'
            )
        ),
        'activity_id' => '52f5b81d-9270-914a-7094a1ada4d55e6e'
    ),
    array(
        'id'    => 'report-8',
        'type'  => 'group-lastscore-by-tag',
        'users' => array(
            array(
                'id' => 'brianmoser',
                'name' => 'Brian Moser'
            ),
            array(
                'id' => '12345678',
                'name' => 'John Carter'
            )
        ),
        'activity_id' => '52f5b81d-9270-914a-7094a1ada4d55e6e',
        'hierarchy' => 'questiontype'
    )
);

$heading = 'Reports API';
$description = '<p>Prepare your report configuration and security credentials, we\'ll do the rest!</p>';
