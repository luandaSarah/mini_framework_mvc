<?php

namespace App\Models;

class Poste extends Model
{
    //chaque champs de ma table doivent etre une propriété de ma classe
    public function __construct(
        protected ?int $id = null,
        protected ?string $title = null,
        protected ?string $description = null,
        protected ?\DateTime $createdAt = null,
        protected ?bool $enabled = null,
        protected ?int $userId = null,
        protected ?int $categorieId = null,

    ) {
        $this->table = "postes";
    }

    /**
     * Get the value of id
     *
     * @return ?int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param ?int $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of title
     *
     * @return ?string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @param ?string $title
     *
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of description
     *
     * @return ?string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @param ?string $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of createdAt
     *
     * @return ?\DateTime
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Set the value of createdAt
     *
     * @param ?\DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get the value of enabled
     *
     * @return ?bool
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    /**
     * Set the value of enabled
     *
     * @param ?bool $enabled
     *
     * @return self
     */
    public function setEnabled(?bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get the value of userId
     *
     * @return ?int
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * Set the value of userId
     *
     * @param ?int $userId
     *
     * @return self
     */
    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Summary of getUser
     * @return ?User //objet de type user qui corresponde à toute les données de l'user qui correspond à $UserId
     */
    public function getUser(): ?User
    {
        return (new User)->find($this->userId);
    }

    /**
     * Get the value of categorieId
     *
     * @return ?int
     */

    public function getCategorieId(): ?int
    {
        return $this->categorieId;
    }

    /**
     * Set the value of categorieId
     *
     * @param ?int $categorieId
     *
     * @return self
     */
    public function setCategorieId(?int $categorieId): self
    {
        $this->categorieId = $categorieId;

        return $this;
    }

    public function getCategorie(): Categorie
    {
        return (new Categorie)->find($this->categorieId);
    }
}
