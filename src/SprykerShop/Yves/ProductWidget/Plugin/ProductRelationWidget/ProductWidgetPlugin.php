<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\ProductWidget\Plugin\ProductRelationWidget;

use Generated\Shared\Transfer\ProductViewTransfer;
use Spryker\Yves\Kernel\Widget\AbstractWidgetPlugin;
use SprykerShop\Yves\ProductRelationWidget\Dependency\Plugin\ProductWidget\ProductWidgetPluginInterface;
use SprykerShop\Yves\ProductWidget\Widget\PdpProductRelationWidget;

/**
 * @deprecated Use {@link \SprykerShop\Yves\ProductWidget\Widget\PdpProductRelationWidget} instead.
 *
 * @method \SprykerShop\Yves\ProductWidget\ProductWidgetFactory getFactory()
 */
class ProductWidgetPlugin extends AbstractWidgetPlugin implements ProductWidgetPluginInterface
{
    public function initialize(ProductViewTransfer $productViewTransfer): void
    {
        $widget = new PdpProductRelationWidget($productViewTransfer);

        $this->parameters = $widget->getParameters();

        $this->addWidgets($this->getFactory()->getProductRelationWidgetSubWidgets());
    }

    public static function getName(): string
    {
        return static::NAME;
    }

    public static function getTemplate(): string
    {
        return PdpProductRelationWidget::getTemplate();
    }
}
