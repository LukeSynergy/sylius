<?php

namespace AppBundle\Entity;

use Sylius\Component\Core\Model\Product as BaseProduct;

class Product extends BaseProduct
{
    /**
     * @var string
     */
    private $konrad;
    
    /**
     * @return string
     */
    public function getKonrad()
    {
        return $this->konrad;
    }
    
    /**
     * @param string $konrad
     */
    public function setKonrad($konrad)
    {
        $this->konrad = $konrad;
    }
}