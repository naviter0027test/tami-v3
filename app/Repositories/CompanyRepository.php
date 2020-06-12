<?php

namespace App\Repositories;

use App\Company;
use Exception;

class CompanyRepository
{
    public function create($params, $admin, $files) {
        $company = new Company();
        $company->account = $params['account'];
        $company->password = md5(trim($params['password']));
        $company->name = isset($params['name']) ? $params['name'] : '';
        $company->email = isset($params['email']) ? $params['email'] : '';
        $company->active = isset($params['active']) ? $params['active'] : 1;
        $company->contact = isset($params['contact']) ? $params['contact'] : '';
        $company->save();
    }
}
