<?php

namespace App\Entity;

use App\Fram\Factories\PDOFactory;

class Comment
{
    private int $id;
    private int $id_user;
    private $date;
    //private \DateTime $date;
    private int $id_article;
    private string $content;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getIdUser(): int
    {
        return $this->id_user;
    }

    /**
     * @param int $id_user
     */
    public function setIdUser(int $id_user): void
    {
        $this->id_user = $id_user;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }

    /**
     * @return int
     */
    public function getIdArticle(): int
    {
        return $this->id_article;
    }

    /**
     * @param int $id_article
     */
    public function setIdArticle(int $id_article): void
    {
        $this->id_article = $id_article;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }
}