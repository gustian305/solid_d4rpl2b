<?php

class DBMSConnection {
    private $dbms;
    public function connect(DBMS $dbms): void {
        $this->dbms = $dbms;
        $this->dbms->createConnector();
    }
}

