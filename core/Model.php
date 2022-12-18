<?php

namespace Core;

//définition des méthodes qui vont être héritées

abstract class Model
{
    protected \PDO $pdo;

    protected string $table_name;
    protected string $regionJoin = 'region ON product.id_region=region.id_region';
    protected string $cepage = 'cepage ON product.id_cepage=cepage.id_cepage';
    protected string $association = 'association ON product.id_association=association.id_association';
    protected string $type_product = 'type_product ON product.id_type=type_product.id_type';
    protected string $taste = 'taste ON product.id_taste=taste.id_taste';

    public function __construct()
    {
        $this->pdo = Database::getPdo();
    }

    /**
     * @param int $id l'identifiant de l'élément à afficher
     * @return array|object|false
     */
    public function find(int $id): array|object|false
    {
        $stmt = $this->pdo->prepare("SELECT * FROM {$this->table_name} WHERE id = :id ");
        $stmt->bindParam(':id', $id);
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetch();
    }

    /**
     * get all elements
     * @return array
     */
    public function findAll(): array
    {
        $stmt = $this->pdo->prepare("SELECT * FROM {$this->table_name}");
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /**
     * delete an item
     * @param int $id
     * @return void
     */
    public function delete(int $id): void
    {
        $stmt = $this->pdo->prepare("DELETE FROM {$this->table_name} WHERE id = :id ");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    /**
     * permet de récupérer plusieurs éléments selon un ou plusieurs critères de recherche
     * @param array $criteria les critères de recherche
     * @param boolean $is_array s'il est à true on aura les résultats sous format d'un tableau associatif, si non c'est le format du model
     * @return array|false
     */
    public function findAllBy(array $criteria,): array
    {
        if (empty($criteria)) {
            throw  new \Exception("Il faut passer au moins un critère");
        }

        $sql_query = "SELECT * FROM {$this->table_name} WHERE ";
        $count = 0;
        foreach ($criteria as $key => $value) {
            $count++;
            if ($count > 1) {
                $sql_query .= " AND ";
            }
            $sql_query .= " $key = :$key ";
        }
        $stmt = $this->pdo->prepare($sql_query);
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        $stmt->execute($criteria);
        return $stmt->fetchAll();
    }

    /**
     * Récupérer un élément avec un ou plusieurs critères
     * @param array $criteria
     * @return object|array|false
     * @throws Exception
     */
    public function findOneBy(array $criteria): object|array|false
    {
        if (empty($criteria)) {
            throw  new \Exception("Il faut passer au moins un critère");
        }
        $sql_query = "SELECT * FROM {$this->table_name} JOIN {$this->regionJoin} JOIN {$this->cepage} JOIN {$this->association}  JOIN {$this->taste}  WHERE ";
        $count = 0;
        foreach ($criteria as $key => $value) {
            $count++;
            if ($count > 1) {
                $sql_query .= " AND ";
            }
            $sql_query .= " $key = :$key ";
        }
        $stmt = $this->pdo->prepare($sql_query);
        foreach ($criteria as $key => $value) {
            $stmt->bindParam(":$key", $value);
        }
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetch();
    }


    /**
     * Récupérer un élément (tableau) avec un ou plusieurs critères pour le modifier
     * @param array $criteria
     * @return array|false
     * @throws Exception
     */
    public function findOneForEdit(array $criteria): array|false
    {
        if (empty($criteria)) {
            throw  new \Exception("Il faut passer au moins un critère");
        }
        $sql_query = "SELECT * FROM {$this->table_name}   WHERE ";
        $count = 0;
        foreach ($criteria as $key => $value) {
            $count++;
            if ($count > 1) {
                $sql_query .= " AND ";
            }
            $sql_query .= " $key = :$key ";
        }
        $stmt = $this->pdo->prepare($sql_query);
        foreach ($criteria as $key => $value) {
            $stmt->bindParam(":$key", $value);
        }
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetch();
    }

    /**
     * Récupérer un élément (objet)avec un ou plusieurs critères
     * @param array $criteria
     * @return object|false
     * @throws Exception
     */
    public function findOneItemBy(array $criteria): object|false
    {
        if (empty($criteria)) {
            throw  new \Exception("Il faut passer au moins un critère");
        }
        // erreur edit stock
        $sql_query = "SELECT * FROM {$this->table_name} WHERE ";
        $count = 0;
        foreach ($criteria as $key => $value) {
            $count++;
            if ($count > 1) {
                $sql_query .= " AND ";
            }
            $sql_query .= " $key = :$key ";
        }
        $stmt = $this->pdo->prepare($sql_query);
        foreach ($criteria as $key => $value) {
            $stmt->bindParam(":$key", $value);
        }
        $stmt->setFetchMode(\PDO::FETCH_OBJ);
        $stmt->execute();
        return $stmt->fetch();
    }


    /**
     * Récupérer un élément depuis la barre de recherche
     * @return array|false
     */
    public function searchProduct()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM product WHERE `name` LIKE :term");
        $stmt->execute(array(
            'term' => $_REQUEST["term"] . '%'
        ));
        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch()) {
                echo "<p>" . $row["name"] . "</p>";
            }
        } else {
            echo "<p>No matches found</p>";
        }
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
}
