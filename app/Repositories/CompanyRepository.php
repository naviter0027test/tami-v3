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
        $company->infoMode1 = isset($params['infoMode1']) ? $params['infoMode1'] : 0;
        if($company->infoMode1 == 2)
            $company->infoPath1 = isset($params['infoVideo1']) ? $params['infoVideo1'] : '';
        $company->infoMode2 = isset($params['infoMode2']) ? $params['infoMode2'] : 0;
        if($company->infoMode2 == 2)
            $company->infoPath2 = isset($params['infoVideo2']) ? $params['infoVideo2'] : '';
        $company->infoMode3 = isset($params['infoMode3']) ? $params['infoMode3'] : 0;
        if($company->infoMode3 == 2)
            $company->infoPath3 = isset($params['infoVideo3']) ? $params['infoVideo3'] : '';
        $company->infoMode4 = isset($params['infoMode4']) ? $params['infoMode4'] : 0;
        if($company->infoMode4 == 2)
            $company->infoPath4 = isset($params['infoVideo4']) ? $params['infoVideo4'] : '';
        $company->infoMode5 = isset($params['infoMode5']) ? $params['infoMode5'] : 0;
        if($company->infoMode5 == 2)
            $company->infoPath5 = isset($params['infoVideo5']) ? $params['infoVideo5'] : '';
        $company->contact = isset($params['contact']) ? $params['contact'] : '';
        $company->save();

        $root = config('filesystems')['disks']['uploads']['root'];
        $path = date('/Y/m'). '/';
        if(isset($files['logo'])) {
            $ext = $files['logo']->getClientOriginalExtension();
            $filename = $company->id. "_logo.$ext";
            $company->logo = $path. $filename;
            $company->save();
            $files['logo']->move($root. $path, $filename);
        }
        if(isset($files['infoPath1']) && $company->infoMode1 == 1) {
            $ext = $files['infoPath1']->getClientOriginalExtension();
            $filename = $company->id. "_companyInfo1.$ext";
            $company->infoPath1 = $path. $filename;
            $company->save();
            $files['infoPath1']->move($root. $path, $filename);
        }
        if(isset($files['infoPath2']) && $company->infoMode2 == 1) {
            $ext = $files['infoPath2']->getClientOriginalExtension();
            $filename = $company->id. "_companyInfo2.$ext";
            $company->infoPath2 = $path. $filename;
            $company->save();
            $files['infoPath2']->move($root. $path, $filename);
        }
        if(isset($files['infoPath3']) && $company->infoMode3 == 1) {
            $ext = $files['infoPath3']->getClientOriginalExtension();
            $filename = $company->id. "_companyInfo3.$ext";
            $company->infoPath3 = $path. $filename;
            $company->save();
            $files['infoPath3']->move($root. $path, $filename);
        }
        if(isset($files['infoPath4']) && $company->infoMode4 == 1) {
            $ext = $files['infoPath4']->getClientOriginalExtension();
            $filename = $company->id. "_companyInfo4.$ext";
            $company->infoPath4 = $path. $filename;
            $company->save();
            $files['infoPath4']->move($root. $path, $filename);
        }
        if(isset($files['infoPath5']) && $company->infoMode5 == 1) {
            $ext = $files['infoPath5']->getClientOriginalExtension();
            $filename = $company->id. "_companyInfo5.$ext";
            $company->infoPath5 = $path. $filename;
            $company->save();
            $files['infoPath5']->move($root. $path, $filename);
        }
    }
}
