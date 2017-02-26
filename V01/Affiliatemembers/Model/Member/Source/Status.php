<?php
namespace V01\Affiliatemembers\Model\Member\Source;

class Status implements \Magento\Framework\Data\OptionSourceInterface
{
    /**
     * @var \V01\Affiliatemembers\Model\Member
     */
    protected $member;

    /**
     * Constructor
     *
     * @param \V01\Affiliatemembers\Model\Member $member
     */
    public function __construct(\V01\Affiliatemembers\Model\Member $member)
    {
        $this->member = $member;
    }

    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray()
    {
        $options[] = ['label' => '', 'value' => ''];
        $availableOptions = $this->member->getAvailableStatuses();
        // $availableOptions[] = [1 => "Enabled",0 => "Disabled"];
        foreach ($availableOptions as $key => $value) {
            $options[] = [
                'label' => $value,
                'value' => $key,
            ];
        }
        return $options;
    }
}