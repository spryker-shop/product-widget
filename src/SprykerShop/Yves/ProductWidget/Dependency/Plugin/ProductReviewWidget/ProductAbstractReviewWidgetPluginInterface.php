<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\ProductWidget\Dependency\Plugin\ProductReviewWidget;

use Spryker\Yves\Kernel\Dependency\Plugin\WidgetPluginInterface;

/**
 * @deprecated Use {@link \SprykerShop\Yves\ProductReviewWidget\Widget\DisplayProductAbstractReviewWidget} instead.
 */
interface ProductAbstractReviewWidgetPluginInterface extends WidgetPluginInterface
{
    public const NAME = 'ProductAbstractReviewWidgetPlugin';

    /**
     * @api
     *
     * @param int $idProductAbstract
     *
     * @return void
     */
    public function initialize(int $idProductAbstract): void;
}
