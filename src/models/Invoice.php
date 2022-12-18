<?php

namespace App\Models;


use Core\Model;

class Invoice extends Model
{

    private int $id_invoice;
    private string $date; //date ?
    private string $clientName;
    private string $billingAddress;
    private float $total_price;
    private int $id_sale;
    private string $orderId_Invoice;
    protected string $table_name = "invoice";

    /**
     * Get the value of id
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of date
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * Set the value of date
     * 
     * @param string $date
     *
     * @return  void
     */
    public function setDate(string $date): void
    {
        $this->date = $date;
    }
    /**
     * Get the value of clientName
     *  @return string
     */ 
    public function getClientName()
    {
        return $this->clientName;
    }

    /**
     * Set the value of clientName
     * @param string
     * @return  self
     */ 
    public function setClientName($clientName):void
    {
        $this->clientName = $clientName;
    }
        /**
     * Get the value of billingAddress
      * @return string
       */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * Set the value of billingAddress
     * @param string
     * @return  void
     */ 
    public function setBillingAddress($billingAddress):void
    {
        $this->billingAddress = $billingAddress;
    }
    /**
     * Get the value of total_price
     * 
     * @return float
     */
    public function getTotal_price(): float
    {
        return $this->total_price;
    }

    /**
     * Set the value of total_price
     * @param float $total_price
     *
     * @return void
     */
    public function setTotal_price(float $total_price): void
    {
        $this->total_price = $total_price;
    }

    /**
     * Get the value of id_sale
     * @return int
     */
    public function getId_sale(): int
    {
        return $this->id_sale;
    }  /**
    * Get the value of orderId_Invoice
    */ 

    public function getOrderId_Invoice()
    {
        return $this->orderId_Invoice;
    }

    /**
     * Set the value of orderId_Invoice
     * @param string
     * @return  void
     */ 
    public function setOrderId_Invoice($orderId_Invoice): void
    {
        $this->orderId_Invoice = $orderId_Invoice;


    }
    /**
     * Set the value of id_sale
     *@param int $id_sale
     * @return void
     */
    public function setId_sale(int $id_sale): void
    {
        $this->id_sale = $id_sale;
    }

    public function findInvoiceByUser()
    {
        $sql_query = "SELECT * FROM sale JOIN invoice ON invoice.orderId_Invoice=sale.orderId JOIN user ON  sale.id_user = user.id GROUP BY invoice.id_invoice";
        $stmt = $this->pdo->prepare($sql_query);
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetchAll();
    
    }

       //Ajout d'une ligne de facture
       public function InsertInvoice(): int|false
       {
           $stmt = $this->pdo->prepare("INSERT INTO invoice ( `clientName`, `billingAddress`,`total_price`, `orderId_Invoice`) VALUES (:clientName, :billingAddress, :total_price, :orderId_Invoice)");
           $stmt->execute([

               "clientName" => $this->clientName,
               "billingAddress" => $this->billingAddress,
               "total_price" => $this->total_price,
               "orderId_Invoice"   => $this->orderId_Invoice,
           ]);
           return $this->pdo->lastInsertId();
       }
   
            
       public function findLastInvoice(): object|array|false
       {
           $stmt = $this->pdo->prepare("SELECT * FROM {$this->table_name} ORDER BY invoice.id_invoice DESC LIMIT 1");
           $stmt->setFetchMode(\PDO::FETCH_ASSOC);
           $stmt->execute();
           return $stmt->fetch();
       }
       public function deleteInvoice(int $id): void
       {
        $stmt = $this->pdo->prepare("DELETE FROM {$this->table_name} WHERE id_invoice = :id_invoice ");
        $stmt->bindParam(':id_invoice', $id);
        $stmt->execute();
    }
    public function findOneInvoiceBy($criteria): object|array|false
    {
        if (empty($criteria)) {
            throw  new \Exception("Il faut passer au moins un critère");
        }
        $sql_query = "SELECT * FROM sale JOIN invoice ON invoice.orderId_Invoice=sale.orderId JOIN product ON sale.id_product = product.id WHERE sale.orderId = '$criteria' ";
       
        $stmt = $this->pdo->prepare($sql_query);
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function findOneInvoiceUserBy($criteria): object|array|false
    {
        if (empty($criteria)) {
            throw  new \Exception("Il faut passer au moins un critère");
        }
        $sql_query = "SELECT * FROM sale JOIN invoice ON invoice.orderId_Invoice=sale.orderId JOIN product ON sale.id_product = product.id  WHERE sale.orderId= '$criteria' ";
       
        $stmt = $this->pdo->prepare($sql_query);
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetchAll();
    }
   }
  





  


