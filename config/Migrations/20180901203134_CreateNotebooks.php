<?php
use Migrations\AbstractMigration;

class CreateNotebooks extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('notebooks');
        $table->addColumn('number', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('class', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('military_district', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('front', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
         $table->addColumn('character_id', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addForeignKey('character_id', 'characters', 'id', ['delete'=> 'CASCADE', 'update'=> 'CASCADE']);
        $table->create();
    }
}
