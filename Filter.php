<?php
/**
 * @package   ImpressPages
 */


/**
 * Created by PhpStorm.
 * User: maskas
 * Date: 15.3.24
 * Time: 13.01
 */

namespace Plugin\TawkTo;


class Filter
{
    public static function ipJavaScript($javascript)
    {
        $code = ipGetOptionLang('TawkTo.widgetCode');
        if ($code) {
            $javascript .= "\n" . $code . "\n";
        }
        return $javascript;
    }
}
