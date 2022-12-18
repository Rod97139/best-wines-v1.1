<?php

namespace App\Models;

use Core\Model;

// Gestion de l'utilisateur
class User extends Model
{
    private int $id;
    private string $email;
    private string $password;
    private int $is_admin;
    private bool $is_employee;
    protected string $table_name = "user";

    /**
     * Get the value of id
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of email
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     * @param string $email
     * @return void
     */
    public function setEmail(string $email): void
    {
        // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //     throw new \Exception("adresse mail non valide");
        // }
        $this->email = $email;
    }

    /**
     * Get the value of password
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Set the value of password
     * @param string $password
     *
     * @return void
     */
    public function setPassword(string $password): void
    {
        // if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $password)) {
        //     throw new \Exception("Le mot de passe doit contenir au moins 8 caractères dont une minuscule, une majuscule, un chiffre et un caractère spécial");
        // }
        $this->password = $password;
    }

    /**
     * Get the value of is_admin
     * @return int
     */
    public function getIs_admin(): int
    {
        return $this->is_admin;
    }

    /**
     * Set the value of is_admin
     * @param int $is_admin
     *
     * @return void
     */
    public function setIs_admin(bool $is_admin): void
    {
        $this->is_admin = $is_admin;
    }

    /**
     * Get the value of is_employee
     * @return bool
     */
    public function getIs_employee(): bool
    {
        return $this->is_employee;
    }

    /**
     * Set the value of is_employee
     *@param bool $is_employee
     * @return  
     */
    public function setIs_employee(bool $is_employee): void
    {
        $this->is_employee = $is_employee;
    }


    /**
     * Insérer un utilisateur dans la BDD
     * @return int|false  l'id du dernier élément inséré ou false dans le cas d'échec
     */
    public function insert(): int|false
    {
        $stmt = $this->pdo->prepare("INSERT INTO user (`email`, `password`) VALUES (:email, :password)");

        $stmt->execute([
            "email" => $this->email,
            "password" => password_hash($this->password, PASSWORD_ARGON2ID)
        ]);
        return $this->pdo->lastInsertId();
    }

    /**
     * Insérer un employé dans la BDD
     * @return int|false  l'id du dernier élément inséré ou false dans le cas d'échec
     */
    public function insertEmployee(): int|false
    {
        $stmt = $this->pdo->prepare("INSERT INTO user (`email`, `password`, `is_employee`) VALUES (:email, :password, :is_employee)");

        $stmt->execute([
            "email" => $this->email,
            "password" => password_hash($this->password, PASSWORD_ARGON2ID),
            "is_employee" => 1
        ]);
        return $this->pdo->lastInsertId();
    }

    //Modification du statut administrateur de l'employé
    public function editEmploye(int $employe_edit)
    {

        $stmt = $this->pdo->prepare("UPDATE user SET `email` = :new_email,`is_admin`=:new_is_admin WHERE id = :id");

        $stmt->execute(array(
            'new_email' => $_POST['email'],
            'new_is_admin' => $_POST['is_admin'],
            'id' => $employe_edit
        ));

        $stmt = $this->pdo->prepare("SELECT * FROM user WHERE id = :id");
        $stmt->execute([
            'id' => $employe_edit
        ]);
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        return $stmt->fetch();
    }
}
