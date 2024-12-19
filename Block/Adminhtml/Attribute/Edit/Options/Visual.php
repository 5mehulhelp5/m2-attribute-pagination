<?php
/**
 * Copyright © qoliber. All rights reserved.
 * @author      Jakub Winkler <jwinkler@qsolutionsstudio.com>
 *
 * @category    Qoliber
 * @package     Qoliber_AttributeOptionPager
 */
namespace Qoliber\AttributeOptionPager\Block\Adminhtml\Attribute\Edit\Options;

class Visual extends \Magento\Swatches\Block\Adminhtml\Attribute\Edit\Options\Visual
{
    use PaginationTrait;

    /** @var string  */
    protected $_template = 'Qoliber_AttributeOptionPager::catalog/product/attribute/visual.phtml';
}
