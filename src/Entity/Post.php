<?php

namespace App\Entity;

class Post
{
    private int $id;
    private DATETIME $date;
    private string $titre;
    private string $author;
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
     * @return DATETIME
     */
    public function getDate(): DATETIME
    {
        return $this->date;
    }

    /**
     * @param DATETIME $date
     */
    public function setDate(DATETIME $date): void
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor(string $author): void
    {
        $this->author = $author;
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




    public function __construct($id, $author,$titre, $date, $content)
    {
        $this->setId($id);
        $this->setAuthor($author);
        $this->setTitre($titre);
        $this->setDate($date);
        $this->setContent($content);
    }

}