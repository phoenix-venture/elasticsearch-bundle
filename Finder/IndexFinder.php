<?php

/*
 * This file is part of the Phoenix package.
 *
 * (c) Hiren Chhatbar <hc.rajkot@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Phoenix\ElasticsearchBundle\Finder;

use Phoenix\ElasticsearchBundle\Index\IndexInterface;

/**
 * Class IndexFinder.
 *
 * @author Hiren Chhatbar
 */
class IndexFinder extends AbstractFinder
{
    /**
     * @var iterable
     */
    protected $handlers;

    /**
     * Constructor.
     */
    public function __construct(iterable $handlers)
    {
        $this->handlers = $handlers;
    }

    /**
     * {@inheritDoc}
     *
     * @see \Phoenix\ElasticsearchBundle\Finder\FinderInterface::find()
     */
    public function find(string $name): IndexInterface
    {
        foreach ($this->handlers as $handler) {
            if ($name == $handler->name) {
                return $handler;
            }
        }

        throw new \Exception(sprintf('Index %s not found', $name));
    }
}
