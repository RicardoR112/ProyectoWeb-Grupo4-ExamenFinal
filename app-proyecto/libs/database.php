<?php 

class Database
{
    private $_connection;
    private static $_instance; //The single instance
    private $_host;
    private $_username;
    private $_password;
    private $_database;

  

    /*
    Get an instance of the Database
    @return Instance
    */
    public static function getInstance()
    {
        if (!self::$_instance) // If no instance then make one
        {
            self::$_instance = new self();
        }
       
        return self::$_instance;
    }

    // Constructor
    private function __construct()
    {   
       $this->_host = constant('HOST');
       $this->_username = constant('USER');
       $this->_password = constant('PASSWORD');
       $this->_database = constant('DB');
       $this->_connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
        // Error handling
        if (mysqli_connect_error()) {
            trigger_error("Failed to connect to MySQL: " . mysqli_connect_error(), E_USER_ERROR);
        }
    }

    // Magic method clone is empty to prevent duplication of connection
    private function __clone()
    {
    }

    // Get mysqli connection
    public function getConnection()
    {
        return $this->_connection;
    }

    public function execute($sql)
    {
        $mysqli = $this->getConnection();
        $res = $mysqli->query($sql);
        return $res;
    }
    
}
?>
