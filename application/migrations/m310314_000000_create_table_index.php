<?php

class m310314_000000_create_table_index extends CDbMigration
{
	public function up()
	{
		for ($i = 0; $i < 10; $i++) {
			$this->createTable("index_" . $i, [
				"id" => "pk",
				"alias" => "varchar(4) NOT NULL UNIQUE",
				"url" => "TEXT NOT NULL"
			], "ENGINE = INNODB AUTO_INCREMENT = 1 CHARACTER SET utf8 COLLATE utf8_general_ci");
		}

	}

	public function down()
	{
		for ($i = 0; $i < 10; $i++) {
			$this->truncateTable("index_" . $i);
			$this->dropTable("index_" . $i);
		}
	}
}