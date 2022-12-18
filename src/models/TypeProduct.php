<?php

namespace App\Models;

use Core\Model;

//Gestion du type des vins
class TypeProduct extends Model
{
    private int $id;
    private string $type_name;
    protected string $table_name = "type_product";

    /**
     * Get the value of id
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of type_name
     * @return string
     */
    public function getType_name(): string
    {
        return $this->type_name;
    }

    /**
     * Set the value of type_name
     * @param string $type_name   
     * @return void
     */
    public function setType_name(string $type_name): void
    {
        $this->type_name = $type_name;
    }
}
