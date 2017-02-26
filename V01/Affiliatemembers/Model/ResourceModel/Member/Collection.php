<?php
namespace V01\Affiliatemembers\Model\ResourceModel\Member;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'member_id';
    protected $_eventPrefix = 'v01_affiliatemembers_member_collection';
    protected $_eventObject = 'member_collection';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('V01\Affiliatemembers\Model\Member', 'V01\Affiliatemembers\Model\ResourceModel\Member');
    }

    /**
     * Get SQL for get record count.
     * Extra GROUP BY strip added.
     *
     * @return \Magento\Framework\DB\Select
     */
    // public function getSelectCountSql()
    // {
    //     $countSelect = parent::getSelectCountSql();
    //     $countSelect->reset(\Zend_Db_Select::GROUP);
    //     return $countSelect;
    // }
    // *
    //  * @param string $valueField
    //  * @param string $labelField
    //  * @param array $additional
    //  * @return array
     
    // protected function _toOptionArray($valueField = 'member_id', $labelField = 'name', $additional = [])
    // {
    //     return parent::_toOptionArray($valueField, $labelField, $additional);
    // }
}