<?php
namespace V01\Affiliatemembers\Block\Adminhtml\Member;

class Edit extends \Magento\Backend\Block\Widget\Form\Container
{
    /**
     * Core registry
     *
     * @var \Magento\Framework\Registry
     */
    protected $_coreRegistry = null;

    /**
     * @param \Magento\Backend\Block\Widget\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Widget\Context $context,
        \Magento\Framework\Registry $registry,
        array $data = []
    ) {
        $this->_coreRegistry = $registry;
        parent::__construct($context, $data);
    }

    /**
     * Initialize blog post edit block
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_objectId = 'member_id';
        $this->_blockGroup = 'V01_Affiliatemembers';
        $this->_controller = 'adminhtml_member';

        parent::_construct();

        // if ($this->_isAllowedAction('Ashsmith_Blog::save')) {
        $this->buttonList->update('save', 'label', __('Save Affiliate Member'));
        $this->buttonList->add(
            'saveandcontinue',
            [
                'label' => __('Save and Continue Edit'),
                'class' => 'save',
                'data_attribute' => [
                    'mage-init' => [
                        'button' => ['event' => 'saveAndContinueEdit', 'target' => '#edit_form'],
                    ],
                ]
            ],
            -100
        );
        // } else {
        //     $this->buttonList->remove('save');
        // }

        // if ($this->_isAllowedAction('Ashsmith_Blog::post_delete')) {
            $this->buttonList->update('delete', 'label', __('Delete Member'));
        // } else {
            // $this->buttonList->remove('delete');
        // }
    }

    /**
     * Retrieve text for header element depending on loaded post
     *
     * @return \Magento\Framework\Phrase
     */
    public function getHeaderText()
    {
        if ($this->_coreRegistry->registry('affiliatemembers_member')->getId()) {
            return __("Edit Member '%1'", $this->escapeHtml($this->_coreRegistry->registry('affiliatemembers_member')->getTitle()));
        } else {
            return __('New Member');
        }
    }

    /**
     * Check permission for passed action
     *
     * @param string $resourceId
     * @return bool
     */
    

    /**
     * Getter of url for "Save and Continue" button
     * tab_id will be replaced by desired by JS later
     *
     * @return string
     */
    protected function _getSaveAndContinueUrl()
    {
        return $this->getUrl('affiliatemembers/*/save', ['_current' => true, 'back' => 'edit', 'active_tab' => '']);
    }
}