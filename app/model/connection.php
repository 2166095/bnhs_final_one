<?php
class Connection {

	public function connect() {
		return new PDO ("mysql:host=localhost; dbname=mitchain_bnhsdb","mitchain_bnhsdb","bnhs_admin");
	}

}
?>