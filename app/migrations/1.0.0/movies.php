<?php

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Migrations\Mvc\Model\Migration;

/**
 * Class MoviesMigration_100
 */
class MoviesMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('movies', [
                'columns' => [
                    new Column(
                        'id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'autoIncrement' => true,
                            'size' => 11,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'rating_id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => false,
                            'size' => 11,
                            'after' => 'id'
                        ]
                    ),
                    new Column(
                        'budget',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => false,
                            'size' => 11,
                            'after' => 'rating_id'
                        ]
                    ),
                    new Column(
                        'homepage',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "",
                            'notNull' => false,
                            'size' => 255,
                            'after' => 'budget'
                        ]
                    ),
                    new Column(
                        'original_language',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "",
                            'notNull' => false,
                            'size' => 255,
                            'after' => 'homepage'
                        ]
                    ),
                    new Column(
                        'original_title',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "",
                            'notNull' => false,
                            'size' => 255,
                            'after' => 'original_language'
                        ]
                    ),
                    new Column(
                        'overview',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "",
                            'notNull' => false,
                            'size' => 255,
                            'after' => 'original_title'
                        ]
                    ),
                    new Column(
                        'popularity',
                        [
                            'type' => Column::TYPE_FLOAT,
                            'notNull' => false,
                            'after' => 'overview'
                        ]
                    ),
                    new Column(
                        'release_date',
                        [
                            'type' => Column::TYPE_DATETIME,
                            'notNull' => false,
                            'after' => 'popularity'
                        ]
                    ),
                    new Column(
                        'revenue',
                        [
                            'type' => Column::TYPE_FLOAT,
                            'notNull' => false,
                            'after' => 'release_date'
                        ]
                    ),
                    new Column(
                        'runtime',
                        [
                            'type' => Column::TYPE_FLOAT,
                            'notNull' => false,
                            'after' => 'revenue'
                        ]
                    ),
                    new Column(
                        'STATUS',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => false,
                            'size' => 255,
                            'after' => 'runtime'
                        ]
                    ),
                    new Column(
                        'tagline',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => false,
                            'size' => 255,
                            'after' => 'STATUS'
                        ]
                    ),
                    new Column(
                        'title',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => false,
                            'size' => 255,
                            'after' => 'tagline'
                        ]
                    ),
                    new Column(
                        'vote_average',
                        [
                            'type' => Column::TYPE_FLOAT,
                            'notNull' => false,
                            'after' => 'title'
                        ]
                    ),
                    new Column(
                        'vote_count',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => false,
                            'size' => 11,
                            'after' => 'vote_average'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('PRIMARY', ['id'], 'PRIMARY'),
                    new Index('rating_id', ['rating_id'], '')
                ],
                'references' => [
                    new Reference(
                        'movies_ibfk_1',
                        [
                            'referencedSchema' => 'moviesdb',
                            'referencedTable' => 'ratings',
                            'columns' => ['rating_id'],
                            'referencedColumns' => ['id'],
                            'onUpdate' => 'RESTRICT',
                            'onDelete' => 'SET NULL'
                        ]
                    )
                ],
                'options' => [
                    'TABLE_TYPE' => 'BASE TABLE',
                    'AUTO_INCREMENT' => '1',
                    'ENGINE' => 'InnoDB',
                    'TABLE_COLLATION' => 'utf8mb4_general_ci'
                ],
            ]
        );
    }

    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {

    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {

    }

}
