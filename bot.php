<?php

include __DIR__ . '/vendor/autoload.php';

use RestCord\DiscordClient;

date_default_timezone_set('America/Bogota');

$discord = new DiscordClient(['token' => $_ENV["TOKEN"]]); // Token is required

$events = [
    'Mon' => [ // lunes
       [
           'title' => 'Beast Rampage.',
           'start' => '11:00:00'
       ],
       [
           'title' => 'Guild Bandit',
           'start' => '12:00:00'
       ],
       [
           'title' => 'Run! Chicken!',
           'start' => '12:25:00'
       ],
       [
           'title' => 'Beast Rampage',
           'start' => '15:00:00'
       ],
       [
           'title' => 'Scholar Qualifier',
           'start' => '17:00:00'
       ],
       [
           'title' => 'Guild Bandit',
           'start' => '18:00:00'
       ],
       [
           'title' => 'Guild Banquet',
           'start' => '19:30:00'
       ],
       [
           'title' => 'Abyss Lord',
           'start' => '20:30:00'
       ],
       [
           'title' => 'Beast Rampage',
           'start' => '22:30:00'
       ],
    ],
    'Tue' => [
        [
            'title' => 'Beast Rampage.',
            'start' => '11:00:00'
        ],
        [
            'title' => 'Guild Bandit',
            'start' => '12:00:00'
        ],
        [
            'title' => 'Run! Chicken!',
            'start' => '12:25:00'
        ],
        [
            'title' => 'Beast Rampage',
            'start' => '15:00:00'
        ],
        [
            'title' => 'Scholar Qualifier',
            'start' => '17:00:00'
        ],
        [
            'title' => 'Guild Bandit',
            'start' => '18:00:00'
        ],
        [
            'title' => 'Guild Banquet',
            'start' => '19:30:00'
        ],
        [
            'title' => 'League',
            'start' => '20:30:00'
        ],
        [
            'title' => 'Beast Rampage',
            'start' => '22:30:00'
        ],
    ],
    'Wed' => [
        [
            'title' => 'Beast Rampage.',
            'start' => '11:00:00'
        ],
        [
            'title' => 'Guild Bandit',
            'start' => '12:00:00'
        ],
        [
            'title' => 'Run! Chicken!',
            'start' => '12:25:00'
        ],
        [
            'title' => 'Beast Rampage',
            'start' => '15:00:00'
        ],
        [
            'title' => 'Scholar Qualifier',
            'start' => '17:00:00'
        ],
        [
            'title' => 'Guild Bandit',
            'start' => '18:00:00'
        ],
        [
            'title' => 'Guild Banquet',
            'start' => '19:30:00'
        ],
        [
            'title' => 'Guild War',
            'start' => '20:30:00'
        ],
        [
            'title' => 'Beast Rampage',
            'start' => '22:30:00'
        ],
    ],
    'Thu' => [
        [
            'title' => 'Beast Rampage.',
            'start' => '11:00:00'
        ],
        [
            'title' => 'Guild Bandit',
            'start' => '12:00:00'
        ],
        [
            'title' => 'Run! Chicken!',
            'start' => '12:25:00'
        ],
        [
            'title' => 'Beast Rampage',
            'start' => '15:00:00'
        ],
        [
            'title' => 'Scholar Qualifier',
            'start' => '17:00:00'
        ],
        [
            'title' => 'Guild Bandit',
            'start' => '18:00:00'
        ],
        [
            'title' => 'Guild Banquet',
            'start' => '19:30:00'
        ],
        [
            'title' => 'League',
            'start' => '20:30:00'
        ],
        [
            'title' => 'Beast Rampage',
            'start' => '22:30:00'
        ]
    ],
    'Fri' => [
        [
            'title' => 'Beast Rampage.',
            'start' => '11:00:00'
        ],
        [
            'title' => 'Guild Bandit',
            'start' => '12:00:00'
        ],
        [
            'title' => 'Run! Chicken!',
            'start' => '12:25:00'
        ],
        [
            'title' => 'Beast Rampage',
            'start' => '15:00:00'
        ],
        [
            'title' => 'Scholar Qualifier',
            'start' => '17:00:00'
        ],
        [
            'title' => 'Guild Bandit',
            'start' => '18:00:00'
        ],
        [
            'title' => 'Guild Banquet',
            'start' => '19:30:00'
        ],
        [
            'title' => 'Guild Realm',
            'start' => '20:00:00'
        ],
        [
            'title' => 'Starmoon Battlefield',
            'start' => '21:30:00'
        ],
        [
            'title' => 'Beast Rampage',
            'start' => '22:30:00'
        ],
    ],
    'Sat' => [
        [
            'title' => 'Beast Rampage.',
            'start' => '11:00:00'
        ],
        [
            'title' => 'Guild Bandit',
            'start' => '12:00:00'
        ],
        [
            'title' => 'Run! Chicken!',
            'start' => '12:25:00'
        ],
        [
            'title' => 'Beast Rampage',
            'start' => '15:00:00'
        ],
        [
            'title' => 'Farm Scramble',
            'start' => '16:00:00'
        ],
        [
            'title' => 'Scholar Qualifier',
            'start' => '17:00:00'
        ],
        [
            'title' => 'Guild Bandit',
            'start' => '18:00:00'
        ],
        [
            'title' => 'Guild Banquet',
            'start' => '19:30:00'
        ],
        [
            'title' => 'Abyss Lord',
            'start' => '20:30:00'
        ],
        [
            'title' => 'League',
            'start' => '21:30:00'
        ],
        [
            'title' => 'Beast Rampage',
            'start' => '22:30:00'
        ],
    ],
    'Sun' => [
        [
            'title' => 'Beast Rampage.',
            'start' => '11:00:00'
        ],
        [
            'title' => 'Guild Bandit',
            'start' => '12:00:00'
        ],
        [
            'title' => 'Run! Chicken!',
            'start' => '12:25:00'
        ],
        [
            'title' => 'Beast Rampage',
            'start' => '15:00:00'
        ],
        [
            'title' => 'Farm Scramble',
            'start' => '16:00:00'
        ],
        [
            'title' => 'Scholar Qualifier',
            'start' => '17:00:00'
        ],
        [
            'title' => 'Guild Bandit',
            'start' => '18:00:00'
        ],
        [
            'title' => 'Guild Banquet',
            'start' => '19:30:00'
        ],
        [
            'title' => 'Maester Contest',
            'start' => '20:00:00'
        ],
        [
            'title' => 'Honor Tower',
            'start' => '21:00:00'
        ],
        [
            'title' => 'Beast Rampage',
            'start' => '22:30:00'
        ],
    ],
];



//var_dump($discord->channel->getChannel(['channel.id'=>826252870738247723]));

obtenerEventoActivo($events, $discord);


//


function obtenerEventoActivo($events, $discord)
{
    $day = date("D");
    $todayEvents = $events[$day];
    $date = date('Y-m-d');
    
    $lastEvent = '';
    foreach ($todayEvents as $todayEvent) {
        $eventTimeStamp = strtotime( $date . ' ' . $todayEvent['start'] . ' - 10 minutes' );
        if (time() >= $eventTimeStamp) {
            $lastEvent = $todayEvent['title'];
        }
    }
    
    $ultimo = getLastEventExecuted();
    if ($ultimo != $lastEvent and $lastEvent != '') {
        //ejecutar llamado
        $discord->channel->createMessage(['channel.id'=>826287411902283826, 'content'=>'@everyone 10 minutes until the event: ' . $lastEvent]);
        // $discord->channel->createMessage(['channel.id'=>828834350782087261, 'content'=>'@everyone 10 minutes until the event: ' . $lastEvent]);
        echo $lastEvent;
        saveLastEventExecuted($lastEvent);
    }
    
}

function getLastEventExecuted()
{
    $fichero = file_get_contents('./lastevent.txt', FILE_USE_INCLUDE_PATH);
    return $fichero;
}

function saveLastEventExecuted($event)
{
    file_put_contents('./lastevent.txt', $event);
}
