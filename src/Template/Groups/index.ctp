<?php
echo $this->element(
    'ResultsSet/index',
    [
        'results' => $groups,
        'paths' => [
            'id',
            'name',
            'created',
            'modified',
            '/Groups/view/{{id}}',
            '/Groups/edit/{{id}}',
            '/Groups/delete/{{id}}' => [
                'type' => 'post',
                'confirm' => true
            ],
        ]
    ]
);
