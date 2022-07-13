<?php
/**
 * Author: ChenGuangHui
 * Email：13035809409@163.com
 * Date Time: 2022/04/13 11:00
 */

namespace App\Models;

use App\Models\Model;

class BlindBoxOrder extends Model
{
    protected $table = 'store_blind_box_order';

    protected $primaryKey = 'order_id';
    
    protected $guarded = [];
}
