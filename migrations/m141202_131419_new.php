<?php

use yii\db\Schema;
use yii\db\Migration;

class m141202_131419_new extends Migration
{
    public function up()
    {
        $this->createTable('{{survey}}', array(
            'id'       => 'pk',
            'id_offer' => 'INT(11) NOT NULL',
            'date'     => 'DATE NOT NULL',
            'sum'      => 'INT(11) NULL DEFAULT NULL',
            'count'    => 'INT(11) NULL DEFAULT NULL',
            'value'    => 'FLOAT NULL DEFAULT NULL',
            'comment'  => 'VARCHAR(256) NULL DEFAULT NULL',
        ), "COMMENT='Среднее время от клика к действию'
			 COLLATE='utf8_general_ci'
			 ENGINE=InnoDB
			 AUTO_INCREMENT=1");

    }

    public function down()
    {
        $this->dropTable('{{survey}}');
    }
}
