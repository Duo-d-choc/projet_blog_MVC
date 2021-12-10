<?php

namespace App\Entity;

use App\Fram\Factories\PDOFactory;
use App\Manager\UsersManager;

class Comment
{
    private int $id;
    private int $id_user;
    private \DateTime $date;
    private int $id_article;
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
     * @return int
     */
    public function getId_user(): int
    {
        return $this->id_user;
    }

    /**
     * @param int $id_user
     */
    public function setId_user(int $id_user): void
    {
        $this->id_user = $id_user;
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
     * @return int
     */
    public function getId_article(): int
    {
        return $this->id_article;
    }

    /**
     * @param int $id_article
     */
    public function setId_article(int $id_article): void
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

    public function getCommentAuthor(): Users
    {
        $userManager = new UsersManager(PDOFactory::getMysqlConnection());
        return $userManager->getUserById($this->id_user);
    }
}