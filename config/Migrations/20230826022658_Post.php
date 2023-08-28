<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Post extends AbstractMigration
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
        $table = $this->table(tableName: 'posts');

        $table->addColumn(columnName: 'title', type: 'string', options: [
            'null' => false,
            'limit' => 150
        ]);

        $table->addColumn(columnName: 'slug', type: 'string', options: [
            'null' => false,
            'limit' => 150
        ]);

        $table->addColumn(columnName: 'users_id', type: 'integer', options: [
            'null' => false,
        ]);

        $table->addColumn(columnName: 'content', type: 'text', options: [
            'null' => false
        ]);

        $table->addColumn(columnName: 'created_at', type: 'timestamp', options: [
            'default' => 'CURRENT_TIMESTAMP',
        ]);

        $table->addColumn(columnName: 'updated_at', type: 'timestamp', options:[
            'default' => 'CURRENT_TIMESTAMP',
            'update' => 'CURRENT_TIMESTAMP'
        ]);

        $table->addForeignKey(columns:'users_id', referencedTable: 'users', referencedColumns: 'id', options: [
            'delete' => 'CASCADE'
        ]);

        $table->create();

    }
}
