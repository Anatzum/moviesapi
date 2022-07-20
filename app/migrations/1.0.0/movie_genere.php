<?php

use Phalcon\Db\Column;
use Phalcon\Db\Exception;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Migrations\Mvc\Model\Migration;

/**
 * Class MovieGenereMigration_100
 */
class MovieGenereMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     * @throws Exception
     */
    public function morph(): void
    {
        $this->morphTable('movie_genere', [
            'columns' => [
                new Column(
                    'movie_id',
                    [
                        'type' => Column::TYPE_INTEGER,
                        'notNull' => true,
                        'size' => 11,
                        'first' => true
                    ]
                ),
                new Column(
                    'genere_id',
                    [
                        'type' => Column::TYPE_INTEGER,
                        'notNull' => true,
                        'size' => 11,
                        'after' => 'movie_id'
                    ]
                ),
            ],
            'indexes' => [
                new Index('movie_id', ['movie_id'], ''),
                new Index('genere_id', ['genere_id'], ''),
            ],
            'references' => [
                new Reference(
                    'movie_genere_ibfk_1',
                    [
                        'referencedTable' => 'movies',
                        'columns' => ['movie_id'],
                        'referencedColumns' => ['id'],
                        'onUpdate' => 'RESTRICT',
                        'onDelete' => 'CASCADE'
                    ]
                ),
                new Reference(
                    'movie_genere_ibfk_2',
                    [
                        'referencedTable' => 'generes',
                        'columns' => ['genere_id'],
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
