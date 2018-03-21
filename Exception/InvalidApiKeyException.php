<?php

/*
 * @copyright   2016 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace MauticPlugin\MauticMessagebirdBundle\Exception;

class InvalidApiKeyException extends MessagebirdException
{
    protected $message = 'mautic.plugin.messagebird.missing_api_key';
}
