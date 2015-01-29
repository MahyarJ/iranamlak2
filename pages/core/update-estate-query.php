<?php

class UpdateEstateQuery{

	private $queryStart;
	private $cols;

	public function __construct($table)
	{

		$this->queryStart = "UPDATE `$table` SET ";

		$this->cols = [];
		$this->values = [];

	}

	public function add($col, $value)
	{

		if ($value == 'none') return "";

		$this->cols[count($this->cols)] = " `$col` ";
		$this->values[count($this->values)] = " '$value' ";
	}

	public function buildQuery($sid, $id)
	{

		$query = $this->queryStart;

		$count = count($this->cols);

		for ($i = 0; $i < $count; $i++)
		{

			$query = $query . $this->cols[$i] . "=" . $this->values[$i];

			if ($i < $count - 1) $query = $query . " , ";

		}

		$query = $query . " WHERE `id`='" . $id . "' AND `uid`='" . $sid . "'";

		return $query;

	}

}