<?php
use Migrations\AbstractMigration;

class CreateUserVisities extends AbstractMigration
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
        $table = $this->table('user_visities', ['id' => false, 'primary_key' => ['user_id', 'home_visity_id']]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('user_id', 'integer', [
            'default' => null,
            'null' => false,
        ]);
         $table->addColumn('home_visity_id', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addForeignKey('user_id', 'users', 'id', ['delete'=> 'CASCADE', 'update'=> 'CASCADE']);
        $table->addForeignKey('home_visity_id', 'home_visities', 'id', ['delete'=> 'CASCADE', 'update'=> 'CASCADE']);
        $table->create();
    }
}
