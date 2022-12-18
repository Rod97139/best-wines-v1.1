<?php

class OrderTracking
{

    private int $id;
    private string $order_state;
    private int $id_receipt;

    //Date à rajouter ?

    /**
     * Get the value of id
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of order_state
     * @return string
     */
    public function getOrder_state(): string
    {
        return $this->order_state;
    }

    /**
     * Set the value of order_state
     * 
     * @param string $order_state
     *
     * @return void
     */
    public function setOrder_state(string $order_state): void
    {
        $this->order_state = $order_state;
    }

    /**
     * Get the value of id_receipt
     * 
     * @return int
     */
    public function getId_receipt(): int
    {
        return $this->id_receipt;
    }

    /**
     * Set the value of id_receipt
     * 
     * @param int $id_receipt
     *
     * @return void
     */
    public function setId_receipt(int $id_receipt): void
    {
        $this->id_receipt = $id_receipt;
    }
}
