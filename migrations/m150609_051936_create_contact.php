<?php

use yii\db\Schema;
use yii\db\Migration;

class m150609_051936_create_contact extends Migration
{
    public function up()
    {
        $this->createTable('{{%contact}}', [
            'id'      => Schema::TYPE_PK,
            'phone'   => Schema::TYPE_STRING,
            'name'    => Schema::TYPE_STRING . ' NOT NULL',
            'updated' => Schema::TYPE_TIMESTAMP,
            'created' => Schema::TYPE_TIMESTAMP . ' NOT NULL',
        ], 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB');
    }

    public function down()
    {
        $this->dropTable('{{%contact}}');
    }
}
