<?php
namespace Rcaddressfield\Athletendaten\Controller;




use Rcaddressfield\Athletendaten\Domain\Repository\AddressRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

/**
 * Class AddressController
 *
 * @package Rcaddressfield\Athletendaten\Controller
 */
class AddressController extends ActionController
{

  /**
     * AddressRepository
     * remove if injection dose not work
     * @var AddressRepository
     */
    protected $addressRepository = null;


    /**
     * remove if injection dose not work
     * @param AddressRepository $addressRepository
     */
    public function injectAddressRepository(AddressRepository $addressRepository)
    {
        $this->AddressRepository = $addressRepository;
    }


    public function listAction()
    {

        //comment in if injection dose not work
        //$addressRepository = GeneralUtility::makeInstance(\Rcaddressfield\athletendaten\Domain\AddressRepository::class);
        //$allAddresses = $addressRepository->findAll()

        //comment out if the lines above should work
        $allAddresses = $this->AddressRepository->findAll();

        $this->view->assign('addresses', $allAddresses);

    }
}
