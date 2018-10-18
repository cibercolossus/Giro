<?php
use Migrations\AbstractMigration;

class CreateEconomies extends AbstractMigration
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
        $table = $this->table('economies');
        $table->addColumn('home_economics', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('current_credits', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('furniture', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('ummovables', 'text', [
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
