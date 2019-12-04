<?php
namespace NikhilGosavi\BookStoreApp\Controller;


/***
 *
 * This file is part of the "Book Store App" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 NIkhil Gosavi <nikhilgosavi007@gmail.com>
 *
 ***/
/**
 * CountryController
 */
class CountryController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * countryRepository
     * 
     * @var \NikhilGosavi\BookStoreApp\Domain\Repository\CountryRepository
     */
    protected $countryRepository = null;

    /**
     * @param \NikhilGosavi\BookStoreApp\Domain\Repository\CountryRepository $countryRepository
     */
    public function injectCountryRepository(\NikhilGosavi\BookStoreApp\Domain\Repository\CountryRepository $countryRepository)
    {
        $this->countryRepository = $countryRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $countries = $this->countryRepository->findAll();
        $this->view->assign('countries', $countries);
    }

    /**
     * action show
     * 
     * @param \NikhilGosavi\BookStoreApp\Domain\Model\Country $country
     * @return void
     */
    public function showAction(\NikhilGosavi\BookStoreApp\Domain\Model\Country $country)
    {
        $this->view->assign('country', $country);
    }

    /**
     * action new
     * 
     * @return void
     */
    public function newAction()
    {
    }

    /**
     * action create
     * 
     * @param \NikhilGosavi\BookStoreApp\Domain\Model\Country $newCountry
     * @return void
     */
    public function createAction(\NikhilGosavi\BookStoreApp\Domain\Model\Country $newCountry)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->countryRepository->add($newCountry);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \NikhilGosavi\BookStoreApp\Domain\Model\Country $country
     * @ignorevalidation $country
     * @return void
     */
    public function editAction(\NikhilGosavi\BookStoreApp\Domain\Model\Country $country)
    {
        $this->view->assign('country', $country);
    }

    /**
     * action update
     * 
     * @param \NikhilGosavi\BookStoreApp\Domain\Model\Country $country
     * @return void
     */
    public function updateAction(\NikhilGosavi\BookStoreApp\Domain\Model\Country $country)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->countryRepository->update($country);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \NikhilGosavi\BookStoreApp\Domain\Model\Country $country
     * @return void
     */
    public function deleteAction(\NikhilGosavi\BookStoreApp\Domain\Model\Country $country)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->countryRepository->remove($country);
        $this->redirect('list');
    }
}
