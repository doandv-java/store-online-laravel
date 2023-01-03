<?php

declare(strict_types=1);
namespace Domains\Customer\States\Statuses;


use Spatie\Enum\Laravel\Enum;


/**
 * @method static self pending()
 * @method static self checkedout()
 * @method static self done()
 */
class CartStatus extends Enum
{

}
