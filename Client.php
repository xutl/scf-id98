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
            //��������ȷ
            return 'Consistent.';
            break;
        case '2':
            //��������ȷ
            return 'Inconsistent.';
            break;
        case '3':
            //��������ȷ
            return 'No such ID number.';
            break;
        case '11':
            //��������ȷ
            return 'The parameter is incorrect.';
            break;
        case '12':
            //�̻�����
            return 'Insufficient business balance.';
            break;
        case '13':
            //appkey������
            return 'Appkey does not exist.';
            break;
        case '14':
            //IP���ܾ�
            return 'IP rejected.';
            break;
        case '20':
            //���֤����ά����
            return 'Identity card center maintenance';
            break;
        default:
            return 'Unknown';
    }
}
}