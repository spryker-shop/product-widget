<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\ProductWidget\Dependency\Plugin\ProductLabelWidget;

use Spryker\Yves\Kernel\Dependency\Plugin\WidgetPluginInterface;

/**
 * @deprecated Use {@link \SprykerShop\Yves\ProductLabelWidget\Widget\ProductConcreteLabelWidget} instead.
 */
interface ProductLabelWidgetPluginInterface extends WidgetPluginInterface
{
    /**
     * @var string
     */
    public const NAME = 'ProductLabelWidgetPlugin';

    /**
     * @api
     *
     * @param array<int> $idProductLabels
     *
     * @return void
     */
    public function initialize(array $idProductLabels): void;
}
