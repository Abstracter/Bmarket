<?php

namespace B2B\BlogBundle\Entity;

/**
 * Companies
 */
class Companies
{
    /**
     * @var integer
     */
    private $c;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $nm;

    /**
     * @var \DateTime
     */
    private $dateclose;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $phoneareacode;

    /**
     * @var string
     */
    private $phonenumber;

    /**
     * @var string
     */
    private $mobileareacode;

    /**
     * @var string
     */
    private $mobilenumber;

    /**
     * @var string
     */
    private $faxareacode;

    /**
     * @var string
     */
    private $faxnumber;

    /**
     * @var string
     */
    private $companyid;

    /**
     * @var integer
     */
    private $defaultincome;

    /**
     * @var string
     */
    private $logoimage;

    /**
     * @var \DateTime
     */
    private $dateCreated;

    /**
     * @var boolean
     */
    private $showCompanyOnline;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $stamddate;

    /**
     * @var boolean
     */
    private $swdelete;

    /**
     * @var string
     */
    private $sftpPassword;

    /**
     * @var string
     */
    private $sftpUrl;

    /**
     * @var string
     */
    private $sftpUsername;

    /**
     * @var string
     */
    private $amoCrmDomain;

    /**
     * @var string
     */
    private $amoCrmKey;

    /**
     * @var string
     */
    private $amoCrmLogin;

    /**
     * @var string
     */
    private $bankaccount;

    /**
     * @var string
     */
    private $companyregister;

    /**
     * @var string
     */
    private $registercode;

    /**
     * @var float
     */
    private $sharecapital;

    /**
     * @var integer
     */
    private $defaultunit;

    /**
     * @var boolean
     */
    private $includeVat;

    /**
     * @var integer
     */
    private $barcodeType;

    /**
     * @var integer
     */
    private $paymentType;

    /**
     * @var string
     */
    private $website;

    /**
     * @var integer
     */
    private $views;

    /**
     * @var \B2B\BlogBundle\Entity\Cities
     */
    private $cityc;

    /**
     * @var \B2B\BlogBundle\Entity\CatalogImporter
     */
    private $defaultimporter;

    /**
     * @var \B2B\BlogBundle\Entity\Items
     */
    private $defaultitem;

    /**
     * @var \B2B\BlogBundle\Entity\Countriescompanytypes
     */
    private $companytype;

    /**
     * @var \B2B\BlogBundle\Entity\Countries
     */
    private $countryc;

    /**
     * @var \B2B\BlogBundle\Entity\Users
     */
    private $defaultcashier;

    /**
     * @var \B2B\BlogBundle\Entity\Accounts
     */
    private $defaultcustomer;

    /**
     * @var \B2B\BlogBundle\Entity\Vatgroups
     */
    private $defaultincomevat;

    /**
     * @var \B2B\BlogBundle\Entity\CatalogManufacturer
     */
    private $defaultmanufacturer;

    /**
     * @var \B2B\BlogBundle\Entity\Devices
     */
    private $stampdevice;


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
     * Set email
     *
     * @param string $email
     *
     * @return Companies
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Companies
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set nm
     *
     * @param string $nm
     *
     * @return Companies
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
     * Set dateclose
     *
     * @param \DateTime $dateclose
     *
     * @return Companies
     */
    public function setDateclose($dateclose)
    {
        $this->dateclose = $dateclose;

        return $this;
    }

    /**
     * Get dateclose
     *
     * @return \DateTime
     */
    public function getDateclose()
    {
        return $this->dateclose;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Companies
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set phoneareacode
     *
     * @param string $phoneareacode
     *
     * @return Companies
     */
    public function setPhoneareacode($phoneareacode)
    {
        $this->phoneareacode = $phoneareacode;

        return $this;
    }

    /**
     * Get phoneareacode
     *
     * @return string
     */
    public function getPhoneareacode()
    {
        return $this->phoneareacode;
    }

    /**
     * Set phonenumber
     *
     * @param string $phonenumber
     *
     * @return Companies
     */
    public function setPhonenumber($phonenumber)
    {
        $this->phonenumber = $phonenumber;

        return $this;
    }

    /**
     * Get phonenumber
     *
     * @return string
     */
    public function getPhonenumber()
    {
        return $this->phonenumber;
    }

    /**
     * Set mobileareacode
     *
     * @param string $mobileareacode
     *
     * @return Companies
     */
    public function setMobileareacode($mobileareacode)
    {
        $this->mobileareacode = $mobileareacode;

        return $this;
    }

    /**
     * Get mobileareacode
     *
     * @return string
     */
    public function getMobileareacode()
    {
        return $this->mobileareacode;
    }

    /**
     * Set mobilenumber
     *
     * @param string $mobilenumber
     *
     * @return Companies
     */
    public function setMobilenumber($mobilenumber)
    {
        $this->mobilenumber = $mobilenumber;

        return $this;
    }

    /**
     * Get mobilenumber
     *
     * @return string
     */
    public function getMobilenumber()
    {
        return $this->mobilenumber;
    }

    /**
     * Set faxareacode
     *
     * @param string $faxareacode
     *
     * @return Companies
     */
    public function setFaxareacode($faxareacode)
    {
        $this->faxareacode = $faxareacode;

        return $this;
    }

    /**
     * Get faxareacode
     *
     * @return string
     */
    public function getFaxareacode()
    {
        return $this->faxareacode;
    }

    /**
     * Set faxnumber
     *
     * @param string $faxnumber
     *
     * @return Companies
     */
    public function setFaxnumber($faxnumber)
    {
        $this->faxnumber = $faxnumber;

        return $this;
    }

    /**
     * Get faxnumber
     *
     * @return string
     */
    public function getFaxnumber()
    {
        return $this->faxnumber;
    }

    /**
     * Set companyid
     *
     * @param string $companyid
     *
     * @return Companies
     */
    public function setCompanyid($companyid)
    {
        $this->companyid = $companyid;

        return $this;
    }

    /**
     * Get companyid
     *
     * @return string
     */
    public function getCompanyid()
    {
        return $this->companyid;
    }

    /**
     * Set defaultincome
     *
     * @param integer $defaultincome
     *
     * @return Companies
     */
    public function setDefaultincome($defaultincome)
    {
        $this->defaultincome = $defaultincome;

        return $this;
    }

    /**
     * Get defaultincome
     *
     * @return integer
     */
    public function getDefaultincome()
    {
        return $this->defaultincome;
    }

    /**
     * Set logoimage
     *
     * @param string $logoimage
     *
     * @return Companies
     */
    public function setLogoimage($logoimage)
    {
        $this->logoimage = $logoimage;

        return $this;
    }

    /**
     * Get logoimage
     *
     * @return string
     */
    public function getLogoimage()
    {
        return $this->logoimage;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return Companies
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set showCompanyOnline
     *
     * @param boolean $showCompanyOnline
     *
     * @return Companies
     */
    public function setShowCompanyOnline($showCompanyOnline)
    {
        $this->showCompanyOnline = $showCompanyOnline;

        return $this;
    }

    /**
     * Get showCompanyOnline
     *
     * @return boolean
     */
    public function getShowCompanyOnline()
    {
        return $this->showCompanyOnline;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Companies
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
     * Set stamddate
     *
     * @param \DateTime $stamddate
     *
     * @return Companies
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
     * @return Companies
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
     * Set sftpPassword
     *
     * @param string $sftpPassword
     *
     * @return Companies
     */
    public function setSftpPassword($sftpPassword)
    {
        $this->sftpPassword = $sftpPassword;

        return $this;
    }

    /**
     * Get sftpPassword
     *
     * @return string
     */
    public function getSftpPassword()
    {
        return $this->sftpPassword;
    }

    /**
     * Set sftpUrl
     *
     * @param string $sftpUrl
     *
     * @return Companies
     */
    public function setSftpUrl($sftpUrl)
    {
        $this->sftpUrl = $sftpUrl;

        return $this;
    }

    /**
     * Get sftpUrl
     *
     * @return string
     */
    public function getSftpUrl()
    {
        return $this->sftpUrl;
    }

    /**
     * Set sftpUsername
     *
     * @param string $sftpUsername
     *
     * @return Companies
     */
    public function setSftpUsername($sftpUsername)
    {
        $this->sftpUsername = $sftpUsername;

        return $this;
    }

    /**
     * Get sftpUsername
     *
     * @return string
     */
    public function getSftpUsername()
    {
        return $this->sftpUsername;
    }

    /**
     * Set amoCrmDomain
     *
     * @param string $amoCrmDomain
     *
     * @return Companies
     */
    public function setAmoCrmDomain($amoCrmDomain)
    {
        $this->amoCrmDomain = $amoCrmDomain;

        return $this;
    }

    /**
     * Get amoCrmDomain
     *
     * @return string
     */
    public function getAmoCrmDomain()
    {
        return $this->amoCrmDomain;
    }

    /**
     * Set amoCrmKey
     *
     * @param string $amoCrmKey
     *
     * @return Companies
     */
    public function setAmoCrmKey($amoCrmKey)
    {
        $this->amoCrmKey = $amoCrmKey;

        return $this;
    }

    /**
     * Get amoCrmKey
     *
     * @return string
     */
    public function getAmoCrmKey()
    {
        return $this->amoCrmKey;
    }

    /**
     * Set amoCrmLogin
     *
     * @param string $amoCrmLogin
     *
     * @return Companies
     */
    public function setAmoCrmLogin($amoCrmLogin)
    {
        $this->amoCrmLogin = $amoCrmLogin;

        return $this;
    }

    /**
     * Get amoCrmLogin
     *
     * @return string
     */
    public function getAmoCrmLogin()
    {
        return $this->amoCrmLogin;
    }

    /**
     * Set bankaccount
     *
     * @param string $bankaccount
     *
     * @return Companies
     */
    public function setBankaccount($bankaccount)
    {
        $this->bankaccount = $bankaccount;

        return $this;
    }

    /**
     * Get bankaccount
     *
     * @return string
     */
    public function getBankaccount()
    {
        return $this->bankaccount;
    }

    /**
     * Set companyregister
     *
     * @param string $companyregister
     *
     * @return Companies
     */
    public function setCompanyregister($companyregister)
    {
        $this->companyregister = $companyregister;

        return $this;
    }

    /**
     * Get companyregister
     *
     * @return string
     */
    public function getCompanyregister()
    {
        return $this->companyregister;
    }

    /**
     * Set registercode
     *
     * @param string $registercode
     *
     * @return Companies
     */
    public function setRegistercode($registercode)
    {
        $this->registercode = $registercode;

        return $this;
    }

    /**
     * Get registercode
     *
     * @return string
     */
    public function getRegistercode()
    {
        return $this->registercode;
    }

    /**
     * Set sharecapital
     *
     * @param float $sharecapital
     *
     * @return Companies
     */
    public function setSharecapital($sharecapital)
    {
        $this->sharecapital = $sharecapital;

        return $this;
    }

    /**
     * Get sharecapital
     *
     * @return float
     */
    public function getSharecapital()
    {
        return $this->sharecapital;
    }

    /**
     * Set defaultunit
     *
     * @param integer $defaultunit
     *
     * @return Companies
     */
    public function setDefaultunit($defaultunit)
    {
        $this->defaultunit = $defaultunit;

        return $this;
    }

    /**
     * Get defaultunit
     *
     * @return integer
     */
    public function getDefaultunit()
    {
        return $this->defaultunit;
    }

    /**
     * Set includeVat
     *
     * @param boolean $includeVat
     *
     * @return Companies
     */
    public function setIncludeVat($includeVat)
    {
        $this->includeVat = $includeVat;

        return $this;
    }

    /**
     * Get includeVat
     *
     * @return boolean
     */
    public function getIncludeVat()
    {
        return $this->includeVat;
    }

    /**
     * Set barcodeType
     *
     * @param integer $barcodeType
     *
     * @return Companies
     */
    public function setBarcodeType($barcodeType)
    {
        $this->barcodeType = $barcodeType;

        return $this;
    }

    /**
     * Get barcodeType
     *
     * @return integer
     */
    public function getBarcodeType()
    {
        return $this->barcodeType;
    }

    /**
     * Set paymentType
     *
     * @param integer $paymentType
     *
     * @return Companies
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * Get paymentType
     *
     * @return integer
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return Companies
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set views
     *
     * @param integer $views
     *
     * @return Companies
     */
    public function setViews($views)
    {
        $this->views = $views;

        return $this;
    }

    /**
     * Get views
     *
     * @return integer
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Set cityc
     *
     * @param \B2B\BlogBundle\Entity\Cities $cityc
     *
     * @return Companies
     */
    public function setCityc(\B2B\BlogBundle\Entity\Cities $cityc = null)
    {
        $this->cityc = $cityc;

        return $this;
    }

    /**
     * Get cityc
     *
     * @return \B2B\BlogBundle\Entity\Cities
     */
    public function getCityc()
    {
        return $this->cityc;
    }

    /**
     * Set defaultimporter
     *
     * @param \B2B\BlogBundle\Entity\CatalogImporter $defaultimporter
     *
     * @return Companies
     */
    public function setDefaultimporter(\B2B\BlogBundle\Entity\CatalogImporter $defaultimporter = null)
    {
        $this->defaultimporter = $defaultimporter;

        return $this;
    }

    /**
     * Get defaultimporter
     *
     * @return \B2B\BlogBundle\Entity\CatalogImporter
     */
    public function getDefaultimporter()
    {
        return $this->defaultimporter;
    }

    /**
     * Set defaultitem
     *
     * @param \B2B\BlogBundle\Entity\Items $defaultitem
     *
     * @return Companies
     */
    public function setDefaultitem(\B2B\BlogBundle\Entity\Items $defaultitem = null)
    {
        $this->defaultitem = $defaultitem;

        return $this;
    }

    /**
     * Get defaultitem
     *
     * @return \B2B\BlogBundle\Entity\Items
     */
    public function getDefaultitem()
    {
        return $this->defaultitem;
    }

    /**
     * Set companytype
     *
     * @param \B2B\BlogBundle\Entity\Countriescompanytypes $companytype
     *
     * @return Companies
     */
    public function setCompanytype(\B2B\BlogBundle\Entity\Countriescompanytypes $companytype = null)
    {
        $this->companytype = $companytype;

        return $this;
    }

    /**
     * Get companytype
     *
     * @return \B2B\BlogBundle\Entity\Countriescompanytypes
     */
    public function getCompanytype()
    {
        return $this->companytype;
    }

    /**
     * Set countryc
     *
     * @param \B2B\BlogBundle\Entity\Countries $countryc
     *
     * @return Companies
     */
    public function setCountryc(\B2B\BlogBundle\Entity\Countries $countryc = null)
    {
        $this->countryc = $countryc;

        return $this;
    }

    /**
     * Get countryc
     *
     * @return \B2B\BlogBundle\Entity\Countries
     */
    public function getCountryc()
    {
        return $this->countryc;
    }

    /**
     * Set defaultcashier
     *
     * @param \B2B\BlogBundle\Entity\Users $defaultcashier
     *
     * @return Companies
     */
    public function setDefaultcashier(\B2B\BlogBundle\Entity\Users $defaultcashier = null)
    {
        $this->defaultcashier = $defaultcashier;

        return $this;
    }

    /**
     * Get defaultcashier
     *
     * @return \B2B\BlogBundle\Entity\Users
     */
    public function getDefaultcashier()
    {
        return $this->defaultcashier;
    }

    /**
     * Set defaultcustomer
     *
     * @param \B2B\BlogBundle\Entity\Accounts $defaultcustomer
     *
     * @return Companies
     */
    public function setDefaultcustomer(\B2B\BlogBundle\Entity\Accounts $defaultcustomer = null)
    {
        $this->defaultcustomer = $defaultcustomer;

        return $this;
    }

    /**
     * Get defaultcustomer
     *
     * @return \B2B\BlogBundle\Entity\Accounts
     */
    public function getDefaultcustomer()
    {
        return $this->defaultcustomer;
    }

    /**
     * Set defaultincomevat
     *
     * @param \B2B\BlogBundle\Entity\Vatgroups $defaultincomevat
     *
     * @return Companies
     */
    public function setDefaultincomevat(\B2B\BlogBundle\Entity\Vatgroups $defaultincomevat = null)
    {
        $this->defaultincomevat = $defaultincomevat;

        return $this;
    }

    /**
     * Get defaultincomevat
     *
     * @return \B2B\BlogBundle\Entity\Vatgroups
     */
    public function getDefaultincomevat()
    {
        return $this->defaultincomevat;
    }

    /**
     * Set defaultmanufacturer
     *
     * @param \B2B\BlogBundle\Entity\CatalogManufacturer $defaultmanufacturer
     *
     * @return Companies
     */
    public function setDefaultmanufacturer(\B2B\BlogBundle\Entity\CatalogManufacturer $defaultmanufacturer = null)
    {
        $this->defaultmanufacturer = $defaultmanufacturer;

        return $this;
    }

    /**
     * Get defaultmanufacturer
     *
     * @return \B2B\BlogBundle\Entity\CatalogManufacturer
     */
    public function getDefaultmanufacturer()
    {
        return $this->defaultmanufacturer;
    }

    /**
     * Set stampdevice
     *
     * @param \B2B\BlogBundle\Entity\Devices $stampdevice
     *
     * @return Companies
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
}

