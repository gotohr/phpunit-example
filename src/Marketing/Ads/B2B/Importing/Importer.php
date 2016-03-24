<?php

namespace Marketing\Ads\B2B\Importing;


use Doctrine\DBAL\Connection;

class Importer {

    /** @var Connection Conn */
    protected $conn;

    public function __construct() {

    }

    /**
     * @return Connection
     * @throws \Doctrine\DBAL\DBALException
     */
    public function getConn() {
        if (!$this->conn) {
            $params = array(
                'driver'   => 'pdo_mysql',
                'host'     => 'localhost',
                'user'     => 'root',
                'password' => 'root',
                'dbname'   => 'importer',
            );
            $this->conn = \Doctrine\DBAL\DriverManager::getConnection($params);
        }
        return $this->conn;
    }
}