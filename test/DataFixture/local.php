<?php

return array(
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'configuration' => 'orm_default',
                'eventmanager'  => 'orm_default',
                'driverClass'   => 'Doctrine\DBAL\Driver\PDOSqlite\Driver',
                'params' => array(
                    'memory' => true,
                ),
            ),
        ),
        'fixture' => array(
            'orm_default' => array(
                'test' => array(
                    'invokables' => array(
                        'Db\Fixture\OneFixture' =>
                            'Db\Fixture\OneFixture',
                    ),
                    'factories' => array(
                        'Db\Fixture\TwoFixture' =>
                            'Db\Fixture\TwoFixtureFactory',
                    ),
                ),
            ),
        ),
    ),
);