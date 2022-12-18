<?php

namespace App\Models;

use Core\Model;

// Gestion des fournisseurs
class Supplier extends Model
{
    private int $id;
    private string $name;
    private string $content;
    private string $image_supp;
    protected string $table_name = "supplier";

    /**
     * Get the value of id
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of name
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     * @param string $name
     *
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Get the value of content
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * Set the value of content
     * @param string $content
     *
     * @return void
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * Get the value of image_supp
     * @return string
     */
    public function getImage_supp(): string
    {
        return $this->image_supp;
    }

    /**
     * Set the value of image_supp
     * @param string $image_supp
     * @return void
     */
    public function setImage_supp(string $image_supp): void
    {
        $this->image_supp = $image_supp;
    }

    //Insertion d'un fournisseur
    public function insertSupp(): int|false
    {
        $stmt = $this->pdo->prepare("INSERT INTO `supplier` (`name`, `content`, `image_supp`) VALUES (:name, :content,:image_supp)");
        $stmt->execute([
            "name" => $this->name,
            "content" => $this->content,
            "image_supp" => $this->image_supp,
        ]);
        return $this->pdo->lastInsertId();
    }


//Modification d'un fournisseur
    public function editSupplier(int $supplier_to_edit)
    {
        $stmt = $this->pdo->prepare("UPDATE supplier SET `name` = :new_name, `content` = :new_content,`image_supp`= :new_image_supp WHERE id = :id");
        $stmt->execute(array(
            'new_name' => $_POST['name'],
            'new_content' => $_POST['content'],
            'new_image_supp' => $_FILES['image']['name'],
            'id' => $supplier_to_edit
        ));
        $stmt = $this->pdo->prepare("SELECT * FROM supplier WHERE id = :id");
        $stmt->execute([
            'id' => $supplier_to_edit
        ]);
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        return $stmt->fetch();
    }
}
