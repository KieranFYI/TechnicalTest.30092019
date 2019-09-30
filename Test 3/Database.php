<?php

/**
 * Handles database connections use PDO
 *
 * @author Kieran Anderson <kieran@andersons.bz>
 * @date 15:19 2019/9/30
 */ 
class Database {
	
	/**
	 * Sets up the database connection
	 *
	 * @param string	$host	The location of the database, e.g. localhost
	 * @param string	$database	The specific database to target
	 * @param string	$username	Database username to attempt to login with
	 * @param string	$password	Password to use for the previously mentioned username
	 * @param string	$type	The type of database connection, default mysql
	 * 
	 * @throws Exception If type is not configured
	 * @author Kieran Anderson <kieran@andersons.bz>
	 * @date 15:22 2019/09/30
	 *
	 */ 
	public static function /* PDO */ Connect(string $host, string $database, string $username, string $password, string $type = 'mysql') {

        switch (strtolower($type)) {
            
            case 'mysql':
                return new \PDO('mysql:host=' . $host . ';dbname=' . $database, $username, $password);
            
            default:
                throw new \Exception('Invalid database type: ' . $type);
        }

	}
}
