<?php

/*
 * This file is part of Contao.
 *
 * Copyright (c) 2005-2017 Dennis Hilpmann
 *
 * @license LGPL-3.0+
 */

namespace Dehil\TeaserBundle\ContaoManager;

// use Dehil\TeaserBundle\DehilTeaserBundle;
// use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

/**
 * Plugin for the Contao Manager.
 *
 * @author Andreas Schempp <https://github.com/aschempp>
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create('Dehil\TeaserBundle\DehilTeaserBundle')
                ->setLoadAfter(['Contao\CoreBundle\ContaoCoreBundle'])
                ->setReplace(['teaser']),
        ];
    }
}
