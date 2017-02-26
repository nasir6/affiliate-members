<?php
namespace V01\Affiliatemembers\Controller\Adminhtml\Member;


use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Backend\App\Action
{

    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * Index action
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        // $resultPage->setActiveMenu('V01_Affiliatemembers::member');
        // $resultPage->addBreadcrumb(__('V01 Affiliatemembers'), __('V01 Affiliatemembers'));
        // $resultPage->addBreadcrumb(__('Manage V01 Affiliatemembers'), __('Manage Affiliatemembers Members'));
        $resultPage->getConfig()->getTitle()->prepend(__('Affiliate Members'));

        return $resultPage;
    }

    /**
     * Is the user allowed to view the blog post grid.
     *
     * @return bool
     */
    // protected function _isAllowed()
    // {
    //     return $this->_authorization->isAllowed('V01_Affiliatemembers::member');
    // }


}