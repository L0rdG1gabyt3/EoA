<?php
class authModel {
    public $db;
    //The engine that queries the database
    public function __construct($dsn, $user, $pass){
        $this->db = new \PDO($dsn, $user, $pass);
        $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
        //Escape Strings that prevent SQL Injections by seperating username and pass into two variables
    public function getUserByNamePass($name, $pass) {
        mysql_real_escape_string($name);
        mysql_real_escape_string($pass);

        //setting up a db query
        $stmt = $this->db->prepare("
			SELECT userId AS id, userName AS name, firstName AS fullname
			FROM users
			WHERE (userName = :name)
			-- AND (userPassword = MD5(CONCAT(userSalt, :pass)))

		");
        if ($stmt->execute(array(':name' => $name, ':pass' => $pass))) {
            $rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            if (count($rows) ===1) {
                return $rows[0];
            }
        }
        return FALSE;
    }
}
?>