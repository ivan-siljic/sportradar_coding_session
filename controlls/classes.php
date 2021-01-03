<?php

abstract class Database 		// made class abstract for security

{

	public $db_host = "localhost";

	public $db_name = "sportradar"; 

	public $db_user = "root";

	public $db_pw = "";

	public $connection = '';


	public function connect() {

		$this->connection = @mysqli_connect($this->db_host,$this->db_user,$this->db_pw,$this->db_name); // @ sign for not displaying errors

	}
}

// seperated read and insert in child classes just for fun (and maybe user management)
	class Read extends Database
	{

		function read($table, $fields='*', $join='',$where='',$orderBy='') {

			parent::connect(); 		// opening db connection								

			$fields = is_array($fields) ? implode(", ", $fields) : $fields;		// concatenates multiple fields with , if there are any

			$join = is_array($join) ? implode(" ", $join) : $join;

			$sql = "SELECT ".$fields." FROM ".$table." ".$join." ".$where." ".$orderBy." ;";

			$result = $this->connection->query($sql); 

				if($result->num_rows == 0 ){

					$row = '<div class="row">
								<svg xmlns=http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-dash-circle my-5 text-muted" viewBox="0 0 16 16">
										<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
										<path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z/>
								</svg>
							</div>
															
							<div class="row">
							<h1 class="text-center text-muted mt-3 mb-5">No data available.</h1></div>';

				} elseif($result->num_rows == 1){

					$row = $result->fetch_assoc();				// fetch_assoc returns one row

				} else {

					$row= $result->fetch_all(MYSQLI_ASSOC);		// fetch-array also possible

				}

			mysqli_close($this->connection);					// closing connection for security

			return $row;

		}

	}


	class Insert extends Database
	{

		public function insert($table, $fields, $values) 
		{

			parent::connect();

			$fields = is_array($fields) ? implode(", ", $fields) : $fields;

			$sql = '';				// empty varibale to store results

				if (is_array($values)){

					foreach ($values as $value) {

						if ($sql !=''){

						$sql .=", ";

						}

						if(is_numeric($value)){

							$sql .= " ".mysqli_real_escape_string($this->connection,$value)." ";

						} else {

							$sql .= "'".mysqli_real_escape_string($this->connection,$value)."'";

						}


					}

				} else {

					$sql = $values;

				}


			$sql = "INSERT INTO ".$table." (".$fields.") VALUES (".$sql.");";

			$res = $this->connection->query($sql);

			return $res;

			mysqli_close($this->connection);

		}

	}