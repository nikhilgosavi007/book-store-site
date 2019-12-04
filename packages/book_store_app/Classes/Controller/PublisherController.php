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
 * PublisherController
 */
class PublisherController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * publisherRepository
     * 
     * @var \NikhilGosavi\BookStoreApp\Domain\Repository\PublisherRepository
     */
    protected $publisherRepository = null;

    /**
     * @param \NikhilGosavi\BookStoreApp\Domain\Repository\PublisherRepository $publisherRepository
     */
    public function injectPublisherRepository(\NikhilGosavi\BookStoreApp\Domain\Repository\PublisherRepository $publisherRepository)
    {
        $this->publisherRepository = $publisherRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $publishers = $this->publisherRepository->findAll();
        $this->view->assign('publishers', $publishers);
    }

    /**
     * action show
     * 
     * @param \NikhilGosavi\BookStoreApp\Domain\Model\Publisher $publisher
     * @return void
     */
    public function showAction(\NikhilGosavi\BookStoreApp\Domain\Model\Publisher $publisher)
    {
        $this->view->assign('publisher', $publisher);
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
     * @param \NikhilGosavi\BookStoreApp\Domain\Model\Publisher $newPublisher
     * @return void
     */
    public function createAction(\NikhilGosavi\BookStoreApp\Domain\Model\Publisher $newPublisher)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->publisherRepository->add($newPublisher);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \NikhilGosavi\BookStoreApp\Domain\Model\Publisher $publisher
     * @ignorevalidation $publisher
     * @return void
     */
    public function editAction(\NikhilGosavi\BookStoreApp\Domain\Model\Publisher $publisher)
    {
        $this->view->assign('publisher', $publisher);
    }

    /**
     * action update
     * 
     * @param \NikhilGosavi\BookStoreApp\Domain\Model\Publisher $publisher
     * @return void
     */
    public function updateAction(\NikhilGosavi\BookStoreApp\Domain\Model\Publisher $publisher)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->publisherRepository->update($publisher);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \NikhilGosavi\BookStoreApp\Domain\Model\Publisher $publisher
     * @return void
     */
    public function deleteAction(\NikhilGosavi\BookStoreApp\Domain\Model\Publisher $publisher)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->publisherRepository->remove($publisher);
        $this->redirect('list');
    }
}
