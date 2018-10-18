<?php
use Migrations\AbstractMigration;

class CreateSocialAspects extends AbstractMigration
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
        $table = $this->table('social_aspects');
        $table->addColumn('health', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('legal_status', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('social_report', 'text', [
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
