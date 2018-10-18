<?php
use Migrations\AbstractMigration;

class CreateConcepts extends AbstractMigration
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
        $table = $this->table('concepts');
        $table->addColumn('neighbornhood', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('friends', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('family', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('characterization', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('visit', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('home_visity_id', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addForeignKey('home_visity_id', 'home_visities', 'id', ['delete'=> 'CASCADE', 'update'=> 'CASCADE']);
        $table->create();
    }
}
