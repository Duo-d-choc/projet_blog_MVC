<?php

namespace App\Entity;

use App\Fram\Factories\PDOFactory;

class Post
{
    private int $id;
    private $date;
    //private \DateTime $date;
    private string $title;
    private int $id_user;
    private string $content;

    //public function __construct($id, $author, $titre, $date, $content)
    //{
    //    $this->setId($id);
    //    $this->setAuthor($author);
    //    $this->setTitre($titre);
    //    $this->setDate($date);
    //    $this->setContent($content);
    //}

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
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return \DateTime($this->date);
    }

    /**
     * @param \DateTime $date
     */
    public function setDate(\DateTime $date): void
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $titre
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getIdUser(): string
    {
        return $this->id_user;
    }

    /**
     * @param string $author
     */
    public function setIdUser(string $id_user): void
    {
        $this->id_user = $id_user;
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