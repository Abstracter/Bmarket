<?php

namespace B2B\BlogBundle\Entity;

/**
 * Items
 */
class Items
{
    /**
     * @var integer
     */
    private $c;

    /**
     * @var integer
     */
    private $code;

    /**
     * @var string
     */
    private $nm;

    /**
     * @var string
     */
    private $barcode;

    /**
     * @var string
     */
    private $buyprice;

    /**
     * @var string
     */
    private $saleprice;

    /**
     * @var \DateTime
     */
    private $stamddate;

    /**
     * @var boolean
     */
    private $swdelete;

    /**
     * @var boolean
     */
    private $swnotactive;

    /**
     * @var float
     */
    private $discount;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $picture;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var boolean
     */
    private $existsInvoices;

    /**
     * @var integer
     */
    private $codeForeign;

    /**
     * @var integer
     */
    private $manufacturerId;

    /**
     * @var integer
     */
    private $barcodeNumerator;

    /**
     * @var \B2B\BlogBundle\Entity\Companies
     */
    private $companyc;

    /**
     * @var \B2B\BlogBundle\Entity\ItemsGroups
     */
    private $groupc;

    /**
     * @var \B2B\BlogBundle\Entity\CatalogItemmaterial
     */
    private $itemMaterial;

    /**
     * @var \B2B\BlogBundle\Entity\CatalogItemstandard
     */
    private $itemStandard;

    /**
     * @var \B2B\BlogBundle\Entity\CatalogColor
     */
    private $color;

    /**
     * @var \B2B\BlogBundle\Entity\Currencies
     */
    private $currencyBuyPrice;

    /**
     * @var \B2B\BlogBundle\Entity\Currencies
     */
    private $currencySalePrice;

    /**
     * @var \B2B\BlogBundle\Entity\CatalogImporter
     */
    private $importer;

    /**
     * @var \B2B\BlogBundle\Entity\CatalogItemmodel
     */
    private $itemModel;

    /**
     * @var \B2B\BlogBundle\Entity\CatalogSize
     */
    private $size;

    /**
     * @var \B2B\BlogBundle\Entity\Devices
     */
    private $stampdevice;

    /**
     * @var \B2B\BlogBundle\Entity\Vatgroups
     */
    private $vatgroup;

    /**
     * @var \B2B\BlogBundle\Entity\CatalogItemsunits
     */
    private $unit;


    /**
     * Get c
     *
     * @return integer
     */
    public function getC()
    {
        return $this->c;
    }

    /**
     * Set code
     *
     * @param integer $code
     *
     * @return Items
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return integer
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set nm
     *
     * @param string $nm
     *
     * @return Items
     */
    public function setNm($nm)
    {
        $this->nm = $nm;

        return $this;
    }

    /**
     * Get nm
     *
     * @return string
     */
    public function getNm()
    {
        return $this->nm;
    }

    /**
     * Set barcode
     *
     * @param string $barcode
     *
     * @return Items
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;

        return $this;
    }

    /**
     * Get barcode
     *
     * @return string
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * Set buyprice
     *
     * @param string $buyprice
     *
     * @return Items
     */
    public function setBuyprice($buyprice)
    {
        $this->buyprice = $buyprice;

        return $this;
    }

    /**
     * Get buyprice
     *
     * @return string
     */
    public function getBuyprice()
    {
        return $this->buyprice;
    }

    /**
     * Set saleprice
     *
     * @param string $saleprice
     *
     * @return Items
     */
    public function setSaleprice($saleprice)
    {
        $this->saleprice = $saleprice;

        return $this;
    }

    /**
     * Get saleprice
     *
     * @return string
     */
    public function getSaleprice()
    {
        return $this->saleprice;
    }

    /**
     * Set stamddate
     *
     * @param \DateTime $stamddate
     *
     * @return Items
     */
    public function setStamddate($stamddate)
    {
        $this->stamddate = $stamddate;

        return $this;
    }

    /**
     * Get stamddate
     *
     * @return \DateTime
     */
    public function getStamddate()
    {
        return $this->stamddate;
    }

    /**
     * Set swdelete
     *
     * @param boolean $swdelete
     *
     * @return Items
     */
    public function setSwdelete($swdelete)
    {
        $this->swdelete = $swdelete;

        return $this;
    }

    /**
     * Get swdelete
     *
     * @return boolean
     */
    public function getSwdelete()
    {
        return $this->swdelete;
    }

    /**
     * Set swnotactive
     *
     * @param boolean $swnotactive
     *
     * @return Items
     */
    public function setSwnotactive($swnotactive)
    {
        $this->swnotactive = $swnotactive;

        return $this;
    }

    /**
     * Get swnotactive
     *
     * @return boolean
     */
    public function getSwnotactive()
    {
        return $this->swnotactive;
    }

    /**
     * Set discount
     *
     * @param float $discount
     *
     * @return Items
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount
     *
     * @return float
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Items
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set picture
     *
     * @param string $picture
     *
     * @return Items
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Items
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set existsInvoices
     *
     * @param boolean $existsInvoices
     *
     * @return Items
     */
    public function setExistsInvoices($existsInvoices)
    {
        $this->existsInvoices = $existsInvoices;

        return $this;
    }

    /**
     * Get existsInvoices
     *
     * @return boolean
     */
    public function getExistsInvoices()
    {
        return $this->existsInvoices;
    }

    /**
     * Set codeForeign
     *
     * @param integer $codeForeign
     *
     * @return Items
     */
    public function setCodeForeign($codeForeign)
    {
        $this->codeForeign = $codeForeign;

        return $this;
    }

    /**
     * Get codeForeign
     *
     * @return integer
     */
    public function getCodeForeign()
    {
        return $this->codeForeign;
    }

    /**
     * Set manufacturerId
     *
     * @param integer $manufacturerId
     *
     * @return Items
     */
    public function setManufacturerId($manufacturerId)
    {
        $this->manufacturerId = $manufacturerId;

        return $this;
    }

    /**
     * Get manufacturerId
     *
     * @return integer
     */
    public function getManufacturerId()
    {
        return $this->manufacturerId;
    }

    /**
     * Set barcodeNumerator
     *
     * @param integer $barcodeNumerator
     *
     * @return Items
     */
    public function setBarcodeNumerator($barcodeNumerator)
    {
        $this->barcodeNumerator = $barcodeNumerator;

        return $this;
    }

    /**
     * Get barcodeNumerator
     *
     * @return integer
     */
    public function getBarcodeNumerator()
    {
        return $this->barcodeNumerator;
    }

    /**
     * Set companyc
     *
     * @param \B2B\BlogBundle\Entity\Companies $companyc
     *
     * @return Items
     */
    public function setCompanyc(\B2B\BlogBundle\Entity\Companies $companyc = null)
    {
        $this->companyc = $companyc;

        return $this;
    }

    /**
     * Get companyc
     *
     * @return \B2B\BlogBundle\Entity\Companies
     */
    public function getCompanyc()
    {
        return $this->companyc;
    }

    /**
     * Set groupc
     *
     * @param \B2B\BlogBundle\Entity\ItemsGroups $groupc
     *
     * @return Items
     */
    public function setGroupc(\B2B\BlogBundle\Entity\ItemsGroups $groupc = null)
    {
        $this->groupc = $groupc;

        return $this;
    }

    /**
     * Get groupc
     *
     * @return \B2B\BlogBundle\Entity\ItemsGroups
     */
    public function getGroupc()
    {
        return $this->groupc;
    }

    /**
     * Set itemMaterial
     *
     * @param \B2B\BlogBundle\Entity\CatalogItemmaterial $itemMaterial
     *
     * @return Items
     */
    public function setItemMaterial(\B2B\BlogBundle\Entity\CatalogItemmaterial $itemMaterial = null)
    {
        $this->itemMaterial = $itemMaterial;

        return $this;
    }

    /**
     * Get itemMaterial
     *
     * @return \B2B\BlogBundle\Entity\CatalogItemmaterial
     */
    public function getItemMaterial()
    {
        return $this->itemMaterial;
    }

    /**
     * Set itemStandard
     *
     * @param \B2B\BlogBundle\Entity\CatalogItemstandard $itemStandard
     *
     * @return Items
     */
    public function setItemStandard(\B2B\BlogBundle\Entity\CatalogItemstandard $itemStandard = null)
    {
        $this->itemStandard = $itemStandard;

        return $this;
    }

    /**
     * Get itemStandard
     *
     * @return \B2B\BlogBundle\Entity\CatalogItemstandard
     */
    public function getItemStandard()
    {
        return $this->itemStandard;
    }

    /**
     * Set color
     *
     * @param \B2B\BlogBundle\Entity\CatalogColor $color
     *
     * @return Items
     */
    public function setColor(\B2B\BlogBundle\Entity\CatalogColor $color = null)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return \B2B\BlogBundle\Entity\CatalogColor
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set currencyBuyPrice
     *
     * @param \B2B\BlogBundle\Entity\Currencies $currencyBuyPrice
     *
     * @return Items
     */
    public function setCurrencyBuyPrice(\B2B\BlogBundle\Entity\Currencies $currencyBuyPrice = null)
    {
        $this->currencyBuyPrice = $currencyBuyPrice;

        return $this;
    }

    /**
     * Get currencyBuyPrice
     *
     * @return \B2B\BlogBundle\Entity\Currencies
     */
    public function getCurrencyBuyPrice()
    {
        return $this->currencyBuyPrice;
    }

    /**
     * Set currencySalePrice
     *
     * @param \B2B\BlogBundle\Entity\Currencies $currencySalePrice
     *
     * @return Items
     */
    public function setCurrencySalePrice(\B2B\BlogBundle\Entity\Currencies $currencySalePrice = null)
    {
        $this->currencySalePrice = $currencySalePrice;

        return $this;
    }

    /**
     * Get currencySalePrice
     *
     * @return \B2B\BlogBundle\Entity\Currencies
     */
    public function getCurrencySalePrice()
    {
        return $this->currencySalePrice;
    }

    /**
     * Set importer
     *
     * @param \B2B\BlogBundle\Entity\CatalogImporter $importer
     *
     * @return Items
     */
    public function setImporter(\B2B\BlogBundle\Entity\CatalogImporter $importer = null)
    {
        $this->importer = $importer;

        return $this;
    }

    /**
     * Get importer
     *
     * @return \B2B\BlogBundle\Entity\CatalogImporter
     */
    public function getImporter()
    {
        return $this->importer;
    }

    /**
     * Set itemModel
     *
     * @param \B2B\BlogBundle\Entity\CatalogItemmodel $itemModel
     *
     * @return Items
     */
    public function setItemModel(\B2B\BlogBundle\Entity\CatalogItemmodel $itemModel = null)
    {
        $this->itemModel = $itemModel;

        return $this;
    }

    /**
     * Get itemModel
     *
     * @return \B2B\BlogBundle\Entity\CatalogItemmodel
     */
    public function getItemModel()
    {
        return $this->itemModel;
    }

    /**
     * Set size
     *
     * @param \B2B\BlogBundle\Entity\CatalogSize $size
     *
     * @return Items
     */
    public function setSize(\B2B\BlogBundle\Entity\CatalogSize $size = null)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return \B2B\BlogBundle\Entity\CatalogSize
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set stampdevice
     *
     * @param \B2B\BlogBundle\Entity\Devices $stampdevice
     *
     * @return Items
     */
    public function setStampdevice(\B2B\BlogBundle\Entity\Devices $stampdevice = null)
    {
        $this->stampdevice = $stampdevice;

        return $this;
    }

    /**
     * Get stampdevice
     *
     * @return \B2B\BlogBundle\Entity\Devices
     */
    public function getStampdevice()
    {
        return $this->stampdevice;
    }

    /**
     * Set vatgroup
     *
     * @param \B2B\BlogBundle\Entity\Vatgroups $vatgroup
     *
     * @return Items
     */
    public function setVatgroup(\B2B\BlogBundle\Entity\Vatgroups $vatgroup = null)
    {
        $this->vatgroup = $vatgroup;

        return $this;
    }

    /**
     * Get vatgroup
     *
     * @return \B2B\BlogBundle\Entity\Vatgroups
     */
    public function getVatgroup()
    {
        return $this->vatgroup;
    }

    /**
     * Set unit
     *
     * @param \B2B\BlogBundle\Entity\CatalogItemsunits $unit
     *
     * @return Items
     */
    public function setUnit(\B2B\BlogBundle\Entity\CatalogItemsunits $unit = null)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Get unit
     *
     * @return \B2B\BlogBundle\Entity\CatalogItemsunits
     */
    public function getUnit()
    {
        return $this->unit;
    }
}

