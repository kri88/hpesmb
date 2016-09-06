<?php
return array(
    'digital-readiness' => array(
        'baseline' => 15.363,
        'types' => array(
            'Reactive' => array(
                'low' => 0,
                'high' => 12,
                'total' => 2
            ),
            'Moderate' => array(
                'low' => 13,
                'high' => 21,
                'total' => 3
            ),
            'Proactive' => array(
                'low' => 22,
                'high' => 33,
                'total' => 5
            )
        )
    ),
    'infrastructure-foundation' => array(
        'baseline' => 24.046,
        'types' => array(
            'Reactive' => array(
                'low' => 3,
                'high' => 15,
                'total' => 3
            ),
            'Moderate' => array(
                'low' => 16,
                'high' => 35,
                'total' => 4
            ),
            'Proactive' => array(
                'low' => 36,
                'high' => 48,
                'total' => 6
            )
        )
    ),
    'it-business-synergy' => array(
        'baseline' => 10,917,
        'types' => array(
            'Reactive' => array(
                'low' => 1,
                'high' => 8,
                'total' => 1
            ),
            'Moderate' => array(
                'low' => 9,
                'high' => 12,
                'total' => 2
            ),
            'Proactive' => array(
                'low' => 13,
                'high' => 31,
                'total' => 4
            )
        )
    ),
    'overall' => array(
        'baseline' => 21.5,
        'types' => array(
            'Reactive' => array(
                'low' => 6,
                'high' => 7,
                'copy' => Lang::get('general.reativetxt'),
				'tweet' => Lang::get('general.relativetweet')
            ),
            'Moderate' => array(
                'low' => 8,
                'high' => 12,
                'copy' => Lang::get('general.moderatetxt'),
                'tweet' => Lang::get('general.moderatetweet')
            ),
            'Proactive' => array(
                'low' => 13,
                'high' => 18,
                'copy' => Lang::get('general.proactivetxt'),
                'tweet' => Lang::get('general.proactivetweet')
            )
        )
    )
    
);