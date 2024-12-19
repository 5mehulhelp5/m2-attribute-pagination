<?php
/**
 * Copyright © qoliber. All rights reserved.
 * @author      Jakub Winkler <jwinkler@qsolutionsstudio.com>
 *
 * @category    Qoliber
 * @package     Qoliber_AttributeOptionPager
 */

declare(strict_types=1);

namespace Qoliber\AttributeOptionPager\Block\Adminhtml\Attribute\Edit\Options;

class Options extends \Magento\Eav\Block\Adminhtml\Attribute\Edit\Options\Options
{
    use PaginationTrait;

    /** @var string  */
    protected $_template = 'Qoliber_AttributeOptionPager::catalog/product/attribute/options.phtml';
}
