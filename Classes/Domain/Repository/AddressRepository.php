<?php
namespace Rcaddressfield\Athletendaten\Domain\Repository;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Extbase\Persistence\Repository;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;


class AddressRepository extends \FriendsOfTYPO3\TtAddress\Domain\Repository\AddressRepository
{

    public function initializeObject() {
        /** @var $defaultQuerySettings \TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings */
        $defaultQuerySettings = $this->objectManager->get('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Typo3QuerySettings');
        // add the pid constraint
        $defaultQuerySettings->setRespectStoragePage(TRUE);
    }

}
