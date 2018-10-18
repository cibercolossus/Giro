<?php
use Migrations\AbstractMigration;

class CreateCharacters extends AbstractMigration
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
        $table = $this->table('characters');
        $table->addColumn('birth_place', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('age', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('birth_date', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('expedition_place', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('expedition_date', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('blood_type', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('height', 'decimal', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('particular_signs', 'string', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('nickname', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('civil_status', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('time', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('email', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('observations_personal_information', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('photo', 'string', [
            'default' => null,
            'limit' => 255,
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
