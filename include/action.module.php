<?php
defined('XOOPS_ROOT_PATH') || exit('XOOPS root path not defined');

/**
 * @param  XoopsObject $module
 * @return bool
 */
function xoops_module_install_about(XoopsObject $module)
{
    $data_file = XOOPS_ROOT_PATH . '/modules/about/sql/mysql.about.sql';
    $GLOBALS['xoopsDB']->queryF('SET NAMES utf8');
    if (!$GLOBALS['xoopsDB']->queryFromFile($data_file)) {
        $module->setErrors('Pre-set data were not installed');

        return true;
    }

    return true;
}

/**
 * @param  XoopsModule $module
 * @param  null        $prev_version
 * @return bool
 */
function xoops_module_update_about(XoopsModule $module, $prev_version = null)
{
    return true;
}
