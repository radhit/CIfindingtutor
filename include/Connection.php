<?php
	define('DB_NAME', 'findingtutor');
	define('DB_USER', 'root');
	define('DB_PASSWORD','');
	define('DB_HOST', 'localhost');
	class Connection
	{
		private $con;
		public function connect()
		{
			$this->con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			if(mysqli_connect_errno())
			{
				echo "Gagal Connect".mysqli_connect_err();
			}
			return $this->con;
		}
	}

?>