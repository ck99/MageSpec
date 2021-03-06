<?php
/**
 * MageSpec
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License, that is bundled with this
 * package in the file LICENSE.
 * It is also available through the world-wide-web at this URL:
 *
 * http://opensource.org/licenses/MIT
 *
 * If you did not receive a copy of the license and are unable to obtain it
 * through the world-wide-web, please send an email
 * to <magetest@sessiondigital.com> so we can send you a copy immediately.
 *
 * @category   MageTest
 * @package    PhpSpec_MagentoExtension
 *
 * @copyright  Copyright (c) 2012-2013 MageTest team and contributors.
 */
namespace MageTest\PhpSpec\MagentoExtension\Locator\Magento;

use PhpSpec\Locator\ResourceLocator as ResourceLocatorInterface;

/**
 * BlockLocator
 *
 * @category   MageTest
 * @package    PhpSpec_MagentoExtension
 *
 * @author     MageTest team (https://github.com/MageTest/MageSpec/contributors)
 */
class BlockLocator extends AbstractResourceLocator implements ResourceLocatorInterface
{
    /**
     * @return int
     */
    public function getPriority()
    {
        return 30;
    }

    /**
     * @param string $file
     * @return bool
     */
    protected function isSupported($file)
    {
        return strpos($file, 'Block') > 0;
    }

    /**
     * @param array $parts
     * @param ResourceLocatorInterface $locator
     * @return BlockResource
     * @throws \InvalidArgumentException
     */
    protected function getResource(array $parts, ResourceLocatorInterface $locator)
    {
        if (!$locator instanceof BlockLocator) {
            throw new \InvalidArgumentException('Block resource requires a block locator');
        }
        return new BlockResource($parts, $locator);
    }

    /**
     * @return string
     */
    protected function getClassType()
    {
        return 'Block';
    }

    /**
     * @return string
     */
    protected function getValidator()
    {
        return '/^(block):([a-zA-Z0-9]+)_([a-zA-Z0-9]+)\/([a-zA-Z0-9]+)(_[\w]+)?$/';
    }
}
