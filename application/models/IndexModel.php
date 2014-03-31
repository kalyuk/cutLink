<?php

Class IndexModel extends IndexBaseModel
{
	private $table = 'index_0';

	public function tableName()
	{
		return $this->table;
	}

	public function setTable($table)
	{
		$this->table = $table;
	}

	public function rules()
	{
		return [
			['alias, url', 'required'],
			['alias', 'length', 'max' => 4],
			['url', 'url']
		];
	}

	public function attributeLabels()
	{
		return [
			'url' => 'Введите URL'
		];
	}

}