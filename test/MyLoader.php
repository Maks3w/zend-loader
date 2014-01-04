<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

/**
 * Static methods for loading classes and files.
 */
class Zend_Loader_MyLoader extends Zend_Loader
{
    public static function loadClass($class, $dirs = null)
    {
        parent::loadClass($class, $dirs);
    }
}
