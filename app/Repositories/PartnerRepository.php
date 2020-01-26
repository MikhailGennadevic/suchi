<?php
/**
 * Created by PhpStorm.
 * User: Mikhail
 * Date: 26.01.2020
 * Time: 23:15
 */

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Partner;

class PartnerRepository extends BaseRepository
{
    public function model()
    {
        return Partner::class;
    }

    public function getFieldsSearchable()
    {
        // TODO: Implement getFieldsSearchable() method.
    }

    public function getNames()
    {
        return $this
            ->all()
            ->mapWithKeys(function ($item) {
                return [$item->id => $item->name];
            });;
    }
}