<?php

namespace Rcaddressfield\Athletendaten\Domain\Model;

class Address extends \FriendsOfTYPO3\TtAddress\Domain\Model\Address
{

    /**
     * onmstartklasse
     * 
     * @var string
     */
    protected $onmstartklasse = '';

    /**
     * iomstartklasse
     * 
     * @var string
     */
    protected $iomstartklasse = '';

    /**
     * wettbewerb
     * 
     * @var string
     */
    protected $wettbewerb = '';

    /**
     * startlizenz
     * 
     * @var string
     */
    protected $startlizenz = '';

    /**
     * startbuch
     * 
     * @var string
     */
    protected $startbuch = '';

    /**
     * iomstart
     * 
     * @var string
     */
    protected $iomstart = '';

    /**
     * emquali
     * 
     * @var string
     */
    protected $emquali = '';

    /**
     * wmquali
     * 
     * @var string
     */
    protected $wmquali = '';

    /**
     * arnoldquali
     * 
     * @var string
     */
    protected $arnoldquali = '';

    /**
     * reisepassnummer
     * 
     * @var string
     */
    protected $reisepassnummer = '';

    /**
     * reisepassland
     * 
     * @var string
     */
    protected $reisepassland = '';

    /**
     * aufenthalt
     * 
     * @var \DateTime
     */
    protected $aufenthalt = null;

    /**
     * genehmigung
     * 
     * @var \DateTime
     */
    protected $genehmigung = null;

    /**
     * reisepassimage
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $reisepassimage = null;

    /**
     * imageupload
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $imageupload = null;

    /**
     * Returns the onmstartklasse
     * 
     * @return string $onmstartklasse
     */
    public function getOnmstartklasse()
    {
        return $this->onmstartklasse;
    }

    /**
     * Sets the onmstartklasse
     * 
     * @param string $onmstartklasse
     * @return void
     */
    public function setOnmstartklasse($onmstartklasse)
    {
        $this->onmstartklasse = $onmstartklasse;
    }

    /**
     * Returns the iomstartklasse
     * 
     * @return string $iomstartklasse
     */
    public function getIomstartklasse()
    {
        return $this->iomstartklasse;
    }

    /**
     * Sets the iomstartklasse
     * 
     * @param string $iomstartklasse
     * @return void
     */
    public function setIomstartklasse($iomstartklasse)
    {
        $this->iomstartklasse = $iomstartklasse;
    }

    /**
     * Returns the wettbewerb
     * 
     * @return string $wettbewerb
     */
    public function getWettbewerb()
    {
        return $this->wettbewerb;
    }

    /**
     * Sets the wettbewerb
     * 
     * @param string $wettbewerb
     * @return void
     */
    public function setWettbewerb($wettbewerb)
    {
        $this->wettbewerb = $wettbewerb;
    }

    /**
     * Returns the startlizenz
     * 
     * @return string $startlizenz
     */
    public function getStartlizenz()
    {
        return $this->startlizenz;
    }

    /**
     * Sets the startlizenz
     * 
     * @param string $startlizenz
     * @return void
     */
    public function setStartlizenz($startlizenz)
    {
        $this->startlizenz = $startlizenz;
    }

    /**
     * Returns the startbuch
     * 
     * @return string $startbuch
     */
    public function getStartbuch()
    {
        return $this->startbuch;
    }

    /**
     * Sets the startbuch
     * 
     * @param string $startbuch
     * @return void
     */
    public function setStartbuch($startbuch)
    {
        $this->startbuch = $startbuch;
    }

    /**
     * Returns the iomstart
     * 
     * @return string $iomstart
     */
    public function getIomstart()
    {
        return $this->iomstart;
    }

    /**
     * Sets the iomstart
     * 
     * @param string $iomstart
     * @return void
     */
    public function setIomstart($iomstart)
    {
        $this->iomstart = $iomstart;
    }

    /**
     * Returns the emquali
     * 
     * @return string $emquali
     */
    public function getEmquali()
    {
        return $this->emquali;
    }

    /**
     * Sets the emquali
     * 
     * @param string $emquali
     * @return void
     */
    public function setEmquali($emquali)
    {
        $this->emquali = $emquali;
    }

    /**
     * Returns the wmquali
     * 
     * @return string $wmquali
     */
    public function getWmquali()
    {
        return $this->wmquali;
    }

    /**
     * Sets the wmquali
     * 
     * @param string $wmquali
     * @return void
     */
    public function setWmquali($wmquali)
    {
        $this->wmquali = $wmquali;
    }

    /**
     * Returns the arnoldquali
     * 
     * @return string $arnoldquali
     */
    public function getArnoldquali()
    {
        return $this->arnoldquali;
    }

    /**
     * Sets the arnoldquali
     * 
     * @param string $arnoldquali
     * @return void
     */
    public function setArnoldquali($arnoldquali)
    {
        $this->arnoldquali = $arnoldquali;
    }

    /**
     * Returns the reisepassnummer
     * 
     * @return string $reisepassnummer
     */
    public function getReisepassnummer()
    {
        return $this->reisepassnummer;
    }

    /**
     * Sets the reisepassnummer
     * 
     * @param string $reisepassnummer
     * @return void
     */
    public function setReisepassnummer($reisepassnummer)
    {
        $this->reisepassnummer = $reisepassnummer;
    }

    /**
     * Returns the reisepassland
     * 
     * @return string $reisepassland
     */
    public function getReisepassland()
    {
        return $this->reisepassland;
    }

    /**
     * Sets the reisepassland
     * 
     * @param string $reisepassland
     * @return void
     */
    public function setReisepassland($reisepassland)
    {
        $this->reisepassland = $reisepassland;
    }

    /**
     * Returns the aufenthalt
     * 
     * @return \DateTime $aufenthalt
     */
    public function getAufenthalt()
    {
        return $this->aufenthalt;
    }

    /**
     * Sets the aufenthalt
     * 
     * @param \DateTime $aufenthalt
     * @return void
     */
    public function setAufenthalt(\DateTime $aufenthalt)
    {
        $this->aufenthalt = $aufenthalt;
    }

    /**
     * Returns the genehmigung
     * 
     * @return \DateTime $genehmigung
     */
    public function getGenehmigung()
    {
        return $this->genehmigung;
    }

    /**
     * Sets the genehmigung
     * 
     * @param \DateTime $genehmigung
     * @return void
     */
    public function setGenehmigung(\DateTime $genehmigung)
    {
        $this->genehmigung = $genehmigung;
    }

    /**
     * Returns the reisepassimage
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $reisepassimage
     */
    public function getReisepassimage()
    {
        return $this->reisepassimage;
    }

    /**
     * Sets the reisepassimage
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $reisepassimage
     * @return void
     */
    public function setReisepassimage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $reisepassimage)
    {
        $this->reisepassimage = $reisepassimage;
    }

    /**
     * Returns the imageupload
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $imageupload
     */
    public function getImageupload()
    {
        return $this->imageupload;
    }

    /**
     * Sets the imageupload
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $imageupload
     * @return void
     */
    public function setImageupload(\TYPO3\CMS\Extbase\Domain\Model\FileReference $imageupload)
    {
        $this->imageupload = $imageupload;
    }

    /**
     * __construct
     */
    public function __construct()
    {

        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     * 
     * @return void
     */
    protected function initStorageObjects()
    {
    }

}