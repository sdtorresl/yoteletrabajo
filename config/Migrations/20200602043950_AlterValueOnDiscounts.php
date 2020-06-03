<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AlterValueOnDiscounts extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('discounts');
        $table->changeColumn('value', 'integer', [
            'default' => 0,
            'limit' => 100,
            'null' => false
        ]);
        $table->update();
    }
}
