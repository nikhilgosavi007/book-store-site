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
 * TopicController
 */
class TopicController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * topicRepository
     * 
     * @var \NikhilGosavi\BookStoreApp\Domain\Repository\TopicRepository
     */
    protected $topicRepository = null;

    /**
     * @param \NikhilGosavi\BookStoreApp\Domain\Repository\TopicRepository $topicRepository
     */
    public function injectTopicRepository(\NikhilGosavi\BookStoreApp\Domain\Repository\TopicRepository $topicRepository)
    {
        $this->topicRepository = $topicRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $topics = $this->topicRepository->findAll();
        $this->view->assign('topics', $topics);
    }

    /**
     * action show
     * 
     * @param \NikhilGosavi\BookStoreApp\Domain\Model\Topic $topic
     * @return void
     */
    public function showAction(\NikhilGosavi\BookStoreApp\Domain\Model\Topic $topic)
    {
        $this->view->assign('topic', $topic);
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
     * @param \NikhilGosavi\BookStoreApp\Domain\Model\Topic $newTopic
     * @return void
     */
    public function createAction(\NikhilGosavi\BookStoreApp\Domain\Model\Topic $newTopic)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->topicRepository->add($newTopic);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \NikhilGosavi\BookStoreApp\Domain\Model\Topic $topic
     * @ignorevalidation $topic
     * @return void
     */
    public function editAction(\NikhilGosavi\BookStoreApp\Domain\Model\Topic $topic)
    {
        $this->view->assign('topic', $topic);
    }

    /**
     * action update
     * 
     * @param \NikhilGosavi\BookStoreApp\Domain\Model\Topic $topic
     * @return void
     */
    public function updateAction(\NikhilGosavi\BookStoreApp\Domain\Model\Topic $topic)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->topicRepository->update($topic);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \NikhilGosavi\BookStoreApp\Domain\Model\Topic $topic
     * @return void
     */
    public function deleteAction(\NikhilGosavi\BookStoreApp\Domain\Model\Topic $topic)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->topicRepository->remove($topic);
        $this->redirect('list');
    }
}
