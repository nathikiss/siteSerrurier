<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 14/01/2020
 * Time: 19:23
 */

namespace App\Entity;


class CodePostalSearch
{
    /**
     * @var int|null
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