<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace xutl\scf\id98;

use xutl\scf\http\Client as BaseClient;

class Client
{
	function getError($errorCode)
{
    switch ($errorCode) {
        case '1':
            //参数不正确
            return 'Consistent.';
            break;
        case '2':
            //参数不正确
            return 'Inconsistent.';
            break;
        case '3':
            //参数不正确
            return 'No such ID number.';
            break;
        case '11':
            //参数不正确
            return 'The parameter is incorrect.';
            break;
        case '12':
            //商户余额不足
            return 'Insufficient business balance.';
            break;
        case '13':
            //appkey不存在
            return 'Appkey does not exist.';
            break;
        case '14':
            //IP被拒绝
            return 'IP rejected.';
            break;
        case '20':
            //身份证中心维护中
            return 'Identity card center maintenance';
            break;
        default:
            return 'Unknown';
    }
}
}