<?php

namespace App\Models;

use Core\Model;

//Gestion du goût des vins
class Taste extends Model
{

    private int $id;
    private string $taste_name;
    protected string $table_name = "taste";

    /**
     * Get the value of id
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of taste_name
     * @return string
     */
    public function getTaste_name(): string
    {
        return $this->taste_name;
    }

    /**
     * Set the value of taste_name
     * @param string $taste_name
     * @return void
     */
    public function setTaste_name(string $taste_name): void
    {
        $this->taste_name = $taste_name;
    }
}
