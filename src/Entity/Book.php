<?php

namespace App\Entity;

use App\Repository\BookRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BookRepository::class)
 */
class Book
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $rate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $author;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $homeEdition;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $disponibility;

    /**
     * @ORM\Column(type="float")
     */
    private $priceBook;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $couvertureBook;

    /**
     * @ORM\Column(type="text")
     */
    private $commentLibraire;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $commentUser;

    /**
     * @ORM\Column(type="integer")
     */
    private $codeEAN;

    /**
     * @ORM\Column(type="integer")
     */
    private $codeISBN;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $editeur;

    /**
     * @ORM\Column(type="date")
     */
    private $publicationDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $collection;

    /**
     * @ORM\Column(type="integer")
     */
    private $pageNumber;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dimension;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $poids;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $langue;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $langueOriginale;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isBest;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isNew;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getRate(): ?int
    {
        return $this->rate;
    }

    public function setRate(?int $rate): self
    {
        $this->rate = $rate;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getHomeEdition(): ?string
    {
        return $this->homeEdition;
    }

    public function setHomeEdition(string $homeEdition): self
    {
        $this->homeEdition = $homeEdition;

        return $this;
    }

    public function getDisponibility(): ?string
    {
        return $this->disponibility;
    }

    public function setDisponibility(string $disponibility): self
    {
        $this->disponibility = $disponibility;

        return $this;
    }

    public function getPriceBook(): ?float
    {
        return $this->priceBook;
    }

    public function setPriceBook(float $priceBook): self
    {
        $this->priceBook = $priceBook;

        return $this;
    }

    public function getCouvertureBook(): ?string
    {
        return $this->couvertureBook;
    }

    public function setCouvertureBook(string $couvertureBook): self
    {
        $this->couvertureBook = $couvertureBook;

        return $this;
    }

    public function getCommentLibraire(): ?string
    {
        return $this->commentLibraire;
    }

    public function setCommentLibraire(string $commentLibraire): self
    {
        $this->commentLibraire = $commentLibraire;

        return $this;
    }

    public function getCommentUser(): ?string
    {
        return $this->commentUser;
    }

    public function setCommentUser(?string $commentUser): self
    {
        $this->commentUser = $commentUser;

        return $this;
    }

    public function getCodeEAN(): ?int
    {
        return $this->codeEAN;
    }

    public function setCodeEAN(int $codeEAN): self
    {
        $this->codeEAN = $codeEAN;

        return $this;
    }

    public function getCodeISBN(): ?int
    {
        return $this->codeISBN;
    }

    public function setCodeISBN(int $codeISBN): self
    {
        $this->codeISBN = $codeISBN;

        return $this;
    }

    public function getEditeur(): ?string
    {
        return $this->editeur;
    }

    public function setEditeur(string $editeur): self
    {
        $this->editeur = $editeur;

        return $this;
    }

    public function getPublicationDate(): ?\DateTimeInterface
    {
        return $this->publicationDate;
    }

    public function setPublicationDate(\DateTimeInterface $publicationDate): self
    {
        $this->publicationDate = $publicationDate;

        return $this;
    }

    public function getCollection(): ?string
    {
        return $this->collection;
    }

    public function setCollection(string $collection): self
    {
        $this->collection = $collection;

        return $this;
    }

    public function getPageNumber(): ?int
    {
        return $this->pageNumber;
    }

    public function setPageNumber(int $pageNumber): self
    {
        $this->pageNumber = $pageNumber;

        return $this;
    }

    public function getDimension(): ?string
    {
        return $this->dimension;
    }

    public function setDimension(string $dimension): self
    {
        $this->dimension = $dimension;

        return $this;
    }

    public function getPoids(): ?string
    {
        return $this->poids;
    }

    public function setPoids(string $poids): self
    {
        $this->poids = $poids;

        return $this;
    }

    public function getLangue(): ?string
    {
        return $this->langue;
    }

    public function setLangue(string $langue): self
    {
        $this->langue = $langue;

        return $this;
    }

    public function getLangueOriginale(): ?string
    {
        return $this->langueOriginale;
    }

    public function setLangueOriginale(string $langueOriginale): self
    {
        $this->langueOriginale = $langueOriginale;

        return $this;
    }

    public function __toString(){
        return $this->title; // Remplacer champ par une propriété "string" de l'entité
    }
}
