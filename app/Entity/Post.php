<?php

namespace App\Entity;

use App\Fram\Factories\PDOFactory;
use App\Manager\UsersManager;

class Post
{
    private int $id;
    //private $date;
    private \DateTime $date;
    private string $title;
    private int $id_user;
    private string $content;

    public function __construct(array $data = [])
    {
        foreach ($data as $key => $value) {
            $setter = 'set' . ucfirst($key);
            if (is_callable([$this, $setter])) {
                $this->$setter($value);
            }
        }
    }

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
     * @return string
     */
    public function getDate(): string
    {
        return $this->date->format('Y-m-d H:m:s');
    }

    /**
     * @return \DateTime
     */
    public function getDateObject(): \DateTime
    {
        return $this->date;
    }

    /**
     * @param string $mySqlDate
     * @throws \Exception
     */
    public function setDate(string $mySqlDate): void
    {
        $this->date = new \DateTime($mySqlDate);
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
    public function getId_user(): string
    {
        return $this->id_user;
    }

    /**
     * @param string $author
     */
    public function setId_user(string $id_user): void
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

    public function getPostAuthor(): Users
    {
        $userManager = new UsersManager(PDOFactory::getMysqlConnection());
        return $userManager->getUserById($this->id_user);
    }

}