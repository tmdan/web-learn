<?php

namespace App\Components;

use Exception;

/**
 * Class Migration
 * @package App\Components
 */
class Migration
{
    /**
     * @var \PDO|null
     */
    protected $con;

    /**
     * Migration constructor.
     */
    public function __construct()
    {
        $this->con = (new Db)->getConnection();
    }

    /**
     * @param $name
     * @return bool
     */
    public function tableExist($name): bool
    {
        $results = $this->con->query("SHOW TABLES LIKE '$name'");

        return $results->rowCount() > 0 ? true : false;
    }

    /**
     * @param $name
     */
    public function deleteTable($name)
    {
        try {
            $this->con->query("DROP TABLE $name");
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
    }


}
