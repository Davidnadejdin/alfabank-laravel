<?php

namespace Davidnadejdin\LaravelAlfabank;

use Illuminate\Support\Facades\Facade;

/**
 * @method static register(array $params)
 * @method static registerPreAuth(array $params)
 * @method static deposit(array $params)
 * @method static getOrderStatus(array $params)
 * @method static getOrderStatusExtended(array $params)
 * @method static reverse(array $params)
 * @method static refund(array $params)
 * @method static verifyEnrollment(array $params)
 * @method static addParams(array $params)
 * @method static getLastOrdersForMerchants(array $params)
 * @method static paymentotherway(array $params)
 * @method static paymentOrderBinding(array $params)
 * @method static unBindCard(array $params)
 * @method static bindCard(array $params)
 * @method static extendBinding(array $params)
 * @method static getBindings(array $params)
 * @method static getBindingsByCardOrId(array $params)
 * @method static payment(array $params)
 *
 * @see \Davidnadejdin\AlfabankClient\Client
 */
class Alfabank extends Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'laravelalphabank';
    }
}
