<?php
use Migrations\AbstractMigration;

class CreateAnswers extends AbstractMigration
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
        $table = $this->table('answers');
        $table->addColumn('control_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('answer', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addForeignKey('control_id', 'controls', 'id', ['delete'=> 'CASCADE', 'update'=> 'CASCADE']);
        $table->create();
    }
}
