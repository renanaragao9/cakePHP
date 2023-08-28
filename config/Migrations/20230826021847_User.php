<?php
declare(strict_types=1);

use Migrations\AbstractMigration;
use Seld\PharUtils\Timestamps;

class User extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table(tableName: 'users');
        $table->addColumn(columnName: 'firstName', type: 'string', options:[
            'limit' => 100,
            'null' => false
        ]);

        $table->addColumn(columnName: 'lastName', type: 'string', options:[
            'limit' => 100,
            'null' => false
        ]);

        $table->addColumn(columnName: 'email', type: 'string', options:[
            'limit' => 100,
            'null' => false
        ]);

        $table->addColumn(columnName: 'password', type: 'string', options:[
            'limit' => 255,
            'null' => false
        ]);

        $table->addColumn(columnName: 'created_at', type: 'timestamp', options: [
            'default' => 'CURRENT_TIMESTAMP',
        ]);

        $table->addColumn(columnName: 'updated_at', type: 'timestamp', options:[
            'default' => 'CURRENT_TIMESTAMP',
            'update' => 'CURRENT_TIMESTAMP'
        ]);

        $table->addIndex(columns: 'email', options: ['unique' => true]);

        $table->create();

    }
}
