<?php 
namespace V01\Affiliatemembers\Model;
class Member extends \Magento\Framework\Model\AbstractModel
{
    const CACHE_TAG = 'v01_affiliatemembers_member';

    protected $_cacheTag = 'v01_affiliatemembers_member';

    protected $_eventPrefix = 'v01_affiliatemembers_member';

     protected function _construct()
    {
        $this->_init('V01\Affiliatemembers\Model\ResourceModel\Member');
    }

    public function getAvailableStatuses()
	{
		return [1 => __("Enabled"),0 => __("Disabled")];	
	}

    

    
}