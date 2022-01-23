<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserAddress
 *
 * @package App\Models
 */
class UserAddress extends Model
{
    use HasFactory;

    const ADDRESS_TYPE_BILLING = 'billing';
    const ADDRESS_TYPE_SHIPPING = 'shipping';

    const ADDRESS_TYPES = [
        self::ADDRESS_TYPE_BILLING,
        self::ADDRESS_TYPE_SHIPPING,
    ];

    protected $guarded = [];
}
