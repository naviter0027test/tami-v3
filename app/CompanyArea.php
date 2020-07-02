<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyArea extends Model
{
    protected $table = 'CompanyArea';
    protected $primaryKey = 'id';
    protected $dateFormat = 'U';

    public function getDateFormat() {
        return 'Y-m-d H:i:s';
    }
}
