<?php
class Con
{
    private $con;
    public function Conectar()
    {
        $this->con = new SQLite3('controller/data/escuelaambiental.db');
        return $this->con;
    }
}

?>