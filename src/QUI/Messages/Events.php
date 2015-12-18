<?php

/**
 * This file contains \QUI\Messages\Events
 */
namespace QUI\Messages;

/**
 * Event handling
 *
 * @author www.pcsg.de (Henning Leutz)
 */
class Events
{
    public static function onTemplateGetHeader($Template)
    {
        $Template->extendHeaderWithCSSFile(URL_OPT_DIR .'quiqqer/messages/bin/messages.css');
    }
}
