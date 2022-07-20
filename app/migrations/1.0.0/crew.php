<?php

use Phalcon\Db\Column;
use Phalcon\Db\Exception;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Migrations\Mvc\Model\Migration;

/**
 * Class CrewMigration_100
 */
class CrewMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     * @throws Exception
     */
    public function morph(): void
    {
        $this->morphTable('crew', [
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
                    'department',
                    [
                        'type' => Column::TYPE_VARCHAR,
                        'default' => "unassigned",
                        'notNull' => false,
                        'size' => 255,
                        'after' => 'id'
                    ]
                ),
                new Column(
                    'NAME',
                    [
                        'type' => Column::TYPE_VARCHAR,
                        'notNull' => true,
                        'size' => 255,
                        'after' => 'department'
                    ]
                ),
                new Column(
                    'job',
                    [
                        'type' => Column::TYPE_VARCHAR,
                        'default' => "unassigned",
                        'notNull' => false,
                        'size' => 255,
                        'after' => 'NAME'
                    ]
                ),
                new Column(
                    'movie_id',
                    [
                        'type' => Column::TYPE_INTEGER,
                        'notNull' => true,
                        'size' => 11,
                        'after' => 'job'
                    ]
                ),
            ],
            'indexes' => [
                new Index('PRIMARY', ['id'], 'PRIMARY'),
                new Index('movie_id', ['movie_id'], ''),
            ],
            'references' => [
                new Reference(
                    'crew_ibfk_1',
                    [
                        'referencedTable' => 'movies',
                        'columns' => ['movie_id'],
                        'referencedColumns' => ['id'],
                        'onUpdate' => 'RESTRICT',
                        'onDelete' => 'CASCADE'
                    ]
                ),
            ],
            'options' => [
                'TABLE_TYPE' => 'BASE TABLE',
                'AUTO_INCREMENT' => '',
                'ENGINE' => 'InnoDB',
                'TABLE_COLLATION' => 'utf8mb4_general_ci',
            ],
        ]);
    }

    /**
     * Run the migrations
     *
     * @return void
     */
    public function up(): void
    {
    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down(): void
    {
    }
}
