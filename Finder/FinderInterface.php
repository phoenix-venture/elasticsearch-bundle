<?php

/*
 * This file is part of the Phoenix package.
 *
 * (c) Hiren Chhatbar <hc.rajkot@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Phoenix\EasyElasticsearchBundle\Finder;

use Phoenix\EasyElasticsearchBundle\Index\IndexInterface;
use Phoenix\EasyElasticsearchBundle\Search\SearchInterface;

/**
 * Class FinderInterface
 * @package Phoenix\EasyElasticsearchBundle\Finder
 * @author Hiren Chhatbar
 */
interface FinderInterface
{
    /**
     * Finds IndexInterface class.
     *
     * @return IndexInterface|SearchInterface
     */
    public function find(string $name);
}