<?php

class Comment
{

    private int $id;
    private int $note;
    private string $text_Comment;
    private int $id_product;
    private int $id_sale;

    /**
     * Get the value of id
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of note
     * @return int
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set the value of note
     * @param int $note
     *
     * @return  void
     */
    public function setNote(int $note): void
    {
        $this->note = $note;
    }

    /**
     * Get the value of text_Comment
     * 
     * @return string
     */
    public function getText_Comment(): string
    {
        return $this->text_Comment;
    }

    /**
     * Set the value of text_Comment
     * 
     * @param string $text_Comment
     *
     * @return  void
     */
    public function setText_Comment(string $text_Comment): void
    {
        $this->text_Comment = $text_Comment;
    }

    /**
     * Get the value of id_product
     * @return int
     */
    public function getId_product(): int
    {
        return $this->id_product;
    }

    /**
     * Set the value of id_product
     * @return int $id_product
     *
     * @return void
     */
    public function setId_product(int $id_product): void
    {
        $this->id_product = $id_product;
    }

    /**
     * Get the value of id_sale
     * @return int
     */
    public function getId_sale(): int
    {
        return $this->id_sale;
    }

    /**
     * Set the value of id_sale
     * 
     * @param int $id_sale
     *
     * @return void
     */
    public function setId_sale(int $id_sale): void
    {
        $this->id_sale = $id_sale;
    }
}
