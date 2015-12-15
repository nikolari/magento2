<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\App\Response\HeaderProvider;

class XFrameOptionsTestCase extends AbstractHeaderTestCase
{
    public function testHeaderPresent()
    {
        $this->assertHeaderPresent('X-Frame-Options', 'SAMEORIGIN');
    }
}
