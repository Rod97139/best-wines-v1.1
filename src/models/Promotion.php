<?php

namespace App\Models;

use Core\Model;
use Core\Partials\CheckLog;

//Gestion des promotions
class Promotion extends Model
{
    private int $id;
    private string $promotion_name;
    private string $start_date;
    private string $end_date;
    private int $percentage;
    protected string $table_name = "promotion";


    /**
     * Get the value of id
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }


    /**
     * Get the value of $promotion_name
     * @return string
     */
    public function getPromotionName(): string
    {
        return $this->promotion_name;
    }

    /**
     * Set the value of $promotion_name
     * @param string $promotion_name
     * @return void
     */
    public function setPromotionName(string $promotion_name): void
    {
        $this->promotion_name = $promotion_name;
    }

    /**
     * Get the value of $start_date
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->start_date;
    }

    /**
     * Set the value of 
     * @param string $start_date
     * @return void
     */
    public function setStartDate(string $start_date): void
    {

        $this->start_date = $start_date;
    }

    /**
     * Get the value of $end_date
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->end_date;
    }

    /**
     * Set the value of 
     * @param string $end_date
     * @return void
     */
    public function setEndDate(string $end_date): void
    {
        $this->end_date = $end_date;
    }

    /**
     * Get the value of $percentage
     * @return int
     */
    public function getPercentage(): int
    {
        return $this->percentage;
    }


    /**
     * Set the value of percentage
     * @param int $percentage
     *
     * @return  void
     */
    public function setPercentage(int $percentage): void
    {
        $this->percentage = $percentage;
    }


    /**
     * Insérer un code de promotion dans la BDD
     * @return int|false  l'id du dernier élément inséré ou false dans le cas d'échec
     */
    public function insert(): int|false
    {
        CheckLog::checkIsEmployee();
        $stmt = $this->pdo->prepare("INSERT INTO promotion (`promotion_name`, `start_date`, `end_date`, `percentage`) VALUES (:promotion_name, :start_date, :end_date, :percentage)");
        $stmt->execute([
            "promotion_name" => $this->promotion_name,
            "start_date" => $this->start_date,
            "end_date" => $this->end_date,
            "percentage" => $this->percentage,
        ]);
        return $this->pdo->lastInsertId();
    }


    //Modification d'un code de promotion
    public function edit(int $promotion_edit)
    {
        $stmt = $this->pdo->prepare("UPDATE promotion SET `promotion_name` = :new_promotion_name, `start_date` = :new_start_date,`end_date`=:new_end_date, `percentage` = :new_percentage WHERE id = :id");
        $stmt->execute(array(
            'new_promotion_name' => $_POST['promotion_name'],
            'new_start_date' => $_POST['start_date'],
            'new_end_date' => $_POST['end_date'],
            'new_percentage' => $_POST['percentage'],
            'id' => $promotion_edit
        ));
        $stmt = $this->pdo->prepare("SELECT * FROM promotion WHERE id = :id");
        $stmt->execute([
            'id' => $promotion_edit
        ]);
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        return $stmt->fetch();
    }
}
