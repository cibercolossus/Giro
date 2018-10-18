<?php
use Migrations\AbstractMigration;

class CreatePassports extends AbstractMigration
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
        $table = $this->table('passports');
        $table->addColumn('number', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('expiration_date', 'date', [
            'default' => null,
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
