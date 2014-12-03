<?php

class SearchQuery{

	private $queryStart;
	private $cols;

	public function __construct($table)
	{

		$this->queryStart = "SELECT * FROM `$table` WHERE";

		$this->queryCountStart = "SELECT COUNT(*) AS count FROM `$table` WHERE";

		$this->cols = [];

	}

	public function simple($col, $value)
	{

		if ($value == 'none') return "";

		$this->cols[count($this->cols)] = "`$col` = '$value' ";

	}

	public function between($col, $value1, $value2)
	{

		if ($value1 == 'none' or $value2 == 'none') return "";

		$this->cols[count($this->cols)] = "(`$col` BETWEEN '$value1' AND '$value2') ";

	}

	public function like($col, $values)
	{

		$valuesSerialized = "";

		foreach ($values as $key => $value)
		{

			if ($value == 0)
			{

				$valuesSerialized = $valuesSerialized."_";

			}
			else if ($value == 1)
			{

				$valuesSerialized = $valuesSerialized."1";

			}

		}

		$this->cols[count($this->cols)] = "`$col` like '$valuesSerialized' ";

	}

	public function in($col, $values)
	{

		$colection = "";
		$exist = false;

		foreach ($values as $key => $value)
		{

			if ($value == 0) continue;

			if ($exist)
			{

				$colection = $colection . ",";

			} else {

				$exist = true;

			}

			$colection = $colection . "'$key'";

		}

		if ($exist)

			$this->cols[count($this->cols)] = "`$col` IN ($colection) ";

	}


	public function buildQuery()
	{

		$query = $this->queryStart;

		$count = count($this->cols);

		if ($count == 0) return $query . " true";

		for ($i = 0; $i < $count; $i++)
		{

			if ($i > 0) $query = $query . " AND ";

			$query = $query . $this->cols[$i];

		}

		return $query;

	}

	public function buildCountQuery()
	{

		$query = $this->queryCountStart;

		$count = count($this->cols);

		if ($count == 0) return $query . " true";

		for ($i = 0; $i < $count; $i++)
		{

			if ($i > 0) $query = $query . " AND ";

			$query = $query . $this->cols[$i];

		}

		return $query;

	}



}