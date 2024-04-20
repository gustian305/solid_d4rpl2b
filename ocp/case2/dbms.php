<?php

interface DBMS {
    public function createConnector(): void;
}

class MySql implements DBMS {
    public function createConnector(): void
    {
        echo "Database terkoneksi ke MySql. <br>";
    }
}

class MongoDB implements DBMS {
    public function createConnector(): void
    {
        echo "Database terkoneksi ke MongoDB. <br>";
    }
}
