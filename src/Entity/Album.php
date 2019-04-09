<?php

// src/Entity/Album.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AlbumRepository")
 */
class Album
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\NotBlank()
     * @ORM\column(type="string")
     */
    private $title;

    /**
     * @var \DateTime
     * @ORM\column(type="datetime")
     */
    private $releaseDate;

    /**
     * @Assert\GreaterThan(0)
     * @ORM\column(type="integer")
     */
    private $trackCount;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return Album
     */
    public function setTitle($title): Album
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getReleaseDate(): ?\DateTime
    {
        return $this->releaseDate;
    }

    /**
     * @param \DateTime $releaseDate
     *
     * @return Album
     */
    public function setReleaseDate($releaseDate): Album
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getTrackCount(): ?int
    {
        return $this->trackCount;
    }

    /**
     * @param int $trackCount
     *
     * @return Album
     */
    public function setTrackCount($trackCount): Album
    {
        $this->trackCount = $trackCount;

        return $this;
    }
}