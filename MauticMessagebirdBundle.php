<?php

/*
 * @copyright   2016 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace MauticPlugin\MauticMessagebirdBundle;

use Mautic\CoreBundle\Factory\MauticFactory;
use Mautic\PluginBundle\Bundle\PluginBundleBase;
use Mautic\PluginBundle\Entity\Plugin;

/**
 * Class MauticMessagebirdBundle.
 */
class MauticMessagebirdBundle extends PluginBundleBase
{
    public static function onPluginInstall(Plugin $plugin, MauticFactory $factory, $metadata = null, $installedSchema = null) {
        parent::onPluginInstall($plugin, $factory, $metadata, $installedSchema);

        var_dump($plugin);

        /** @var Plugin $pluginRecord */
        $pluginRecord = $factory->getEntityManager()->getRepository('MauticPluginBundle:Plugin')->findBy(['name'=>$plugin->getName()]);
        var_dump($pluginRecord);


        if ($pluginRecord) {
            $pluginRecord->setVersion($plugin->getVersion());
            $pluginRecord->setIsMissing(false);
            $pluginRecord->setDescription('mautic.plugin.messagebird.description');
        }
        var_dump($pluginRecord); die();

        $factory->getEntityManager()->persist();
    }
}
