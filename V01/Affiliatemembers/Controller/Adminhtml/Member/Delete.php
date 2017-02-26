<?php
namespace V01\Affiliatemembers\Controller\Adminhtml\Member;


use Magento\Backend\App\Action;
use Magento\TestFramework\ErrorLog\Logger;

class Delete extends \Magento\Backend\App\Action
{


    public function execute()
    {
        $id = $this->getRequest()->getParam('member_id');
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($id) {
            try {
                $model = $this->_objectManager->create('V01\Affiliatemembers\Model\Member');
                $model->load($id);
                $model->delete();
                $this->messageManager->addSuccess(__('Member has been deleted.'));
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
                return $resultRedirect->setPath('*/*/edit', ['member_id' => $id]);
            }
        }
        $this->messageManager->addError(__('member not found'));
        return $resultRedirect->setPath('*/*/');
    }
}