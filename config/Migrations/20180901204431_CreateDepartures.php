<?php
use Migrations\AbstractMigration;

class CreateDepartures extends AbstractMigration
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
        $table = $this->table('departures');
        $table->addColumn('place', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('date', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('time_stay', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('reason', 'string', [
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
