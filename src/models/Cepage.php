<?php

namespace App\Models;

use Core\Model;

class Cepage extends Model
{

    private int $id;
    private string $cepage_name;
    protected string $table_name = "cepage";

    /**
     * Get the value of id
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of cepage_name
     * @return int
     */
    public function getCepage_name()
    {
        return $this->cepage_name;
    }

    /**
     * Set the value of cepage_name
     *
     * @param string $cepage_name
     *
     * @return void
     */
    public function setCepage_name(string $cepage_name): void
    {
        $this->cepage_name = $cepage_name;
    }
}
