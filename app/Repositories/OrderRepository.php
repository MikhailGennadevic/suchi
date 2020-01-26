<?php
/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 25.01.2020
 * Time: 23:00
 */

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Order;

class OrderRepository extends BaseRepository
{
    public function getFieldsSearchable()
    {
        // TODO: Implement getFieldsSearchable() method.
    }

    public function model()
    {
        return Order::class;
    }
}