<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyAreaRelation extends Model
{
    protected $table = 'CompanyAreaRelation';
    protected $primaryKey = 'id';
    protected $dateFormat = 'U';

    public function getDateFormat() {
        return 'Y-m-d H:i:s';
    }
}
