<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 14/01/2020
 * Time: 19:23
 */

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;


class CodePostalSearch
{
    /**
     * @var int|null
     * @Assert\Length(min="5",max="5", maxMessage="Entrez un Code Postal à 5 chiffres",
     *     minMessage="Entrez un Code Postal à 5 chiffres",charsetMessage="Entrez un Code Postal à 5 chiffres",
     *     exactMessage="Entrez un Code Postal à 5 chiffres")
     */
    private $searchCodePostal;

    /**
     * @return int|null
     */
    public function getSearchCodePostal(): ?int
    {
        return $this->searchCodePostal;
    }

    /**
     * @param int|null $searchCodePostal
     */
    public function setSearchCodePostal(int $searchCodePostal): void
    {
        $this->searchCodePostal = $searchCodePostal;
    }
}