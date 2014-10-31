<?php

class NewEstateQuery{

	private $queryStart;
	private $cols;

	public function __construct($table)
	{

		$this->queryStart = "INSERT INTO	`$table` (";

		$this->cols = [];
		$this->values = [];

	}

	public function add($col, $value)
	{

		if ($value == 'none') return "";

		$this->cols[count($this->cols)] = " `$col` ";
		$this->values[count($this->values)] = " '$value' ";
	}

	public function buildQuery()
	{

		$query = $this->queryStart;

		$count = count($this->cols);

		for ($i = 0; $i < $count; $i++)
		{

			$query = $query . $this->cols[$i];

			if ($i < $count - 1) $query = $query . " , ";

		}

		$query = $query . ") VALUES (";

		for ($i = 0; $i < $count; $i++)
		{

			$query = $query . $this->values[$i];

			if ($i < $count - 1) $query = $query . " , ";

		}

		$query = $query . ");";


		return $query;

	}

}