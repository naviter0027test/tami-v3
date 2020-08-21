<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndustryContactRelation extends Model
{
    protected $table = 'IndustryContactRelation';
    protected $primaryKey = 'id';
    protected $dateFormat = 'U';

    public function getDateFormat() {
        return 'Y-m-d H:i:s';
    }
}
