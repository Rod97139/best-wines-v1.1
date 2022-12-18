<?php

namespace App\Models;

use Core\Model;

//Gestion des régions
class Region extends Model
{
    private int $id;
    private string $region_name;
    protected string $table_name = "region";

    /**
     * Get the value of id
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of region_name
     * @return string
     */
    public function getRegion_name(): string
    {
        return $this->region_name;
    }

    /**
     * Set the value of region_name
     * @param string $region_name
     * @return
     */
    public function setRegion_name(string $region_name): void
    {
        $this->region_name = $region_name;
    }
}
