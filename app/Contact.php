<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'Contact';
    protected $primaryKey = 'id';
    protected $dateFormat = 'U';

    public function getDateFormat() {
        return 'Y-m-d H:i:s';
    }
}
