<?php

class DB
{
    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=school";
    protected $pdo;
    protected $table;

    public function __construct($table)
    {
        $this->pdo = new PDO($this->dsn, 'root', '');
        $this->table = $table;
    }


    public function all(...$arg)
    {
        $sql = "select * from $this->table ";

        if (!empty($arg[0]) && is_array($arg[0])) {
            foreach ($arg[0] as $key => $value) {

                $tmp[] = "`$key`='$value'";
                //$tmp[] = sprintf("`%s`='%s'", $key, $value);
            }
            $sql = $sql . " where " . implode(" && ", $tmp);
        }
        if (!empty($arg[1])) {
            $sql = $sql . $arg[1];
        }
        echo $sql;
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
}

$Student = new DB('students');
echo "<pre>";
print_r($Student->all());
echo "</pre>";
