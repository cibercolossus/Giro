<?php
use Migrations\AbstractMigration;

class CreateSectors extends AbstractMigration
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
        $table = $this->table('sectors');
        $table->addColumn('departament_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('municipality_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('neighborhood', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('address', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('stratum', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('type', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('recidence_time', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('commune', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('risk_level', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('geographic_location', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('description_home', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('zone', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('school', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('supermarket', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('pilice_estation', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('hospitals', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('parks', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('colleges', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('shops', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('cai', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('clinic', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('parkland', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('university', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('mall', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('center_christian', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('church', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('stadium', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('access_roads', 'char', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('transportation_service', 'char', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('relationship_neighbors', 'char', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('drug_dispensing', 'char', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('prostitution_zone', 'char', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('high_impact_area', 'char', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('presence_animals', 'char', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('sewage', 'char', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('dump', 'string', [
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
