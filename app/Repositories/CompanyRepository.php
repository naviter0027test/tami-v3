<?php

namespace App\Repositories;

use App\Company;
use Exception;

class CompanyRepository
{
    public function checkPassword($params) {
        $company = Company::where('account', '=', $params['account'])
            ->where('password', '=', md5($params['password']))
            ->first();
        if(isset($company->id)) {
            return $company;
        }
        return false;
    }

    public function updatePassword($params) {
        $company = Company::where('account', '=', $params['account'])
            ->where('password', '=', md5($params['passwordOld']))
            ->first();
        if(isset($company->id) == false) {
            throw new Exception('舊密碼輸入錯誤');
        }
        $company->password = md5($params['password']);
        $company->save();
    }

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

    public function lists($params) {
        $nowPage = isset($params['nowPage']) ? (int) $params['nowPage'] : 1;
        $offset = isset($params['offset']) ? (int) $params['offset'] : 10;

        $companyQuery = Company::orderBy('id', 'desc')
            ->skip(($nowPage-1) * $offset)
            ->take($offset);
        $companies = $companyQuery->get();
        foreach($companies as $i => $company) {
            switch($company->active) {
            case 0:
                $companies[$i]->activeShow = '否';
                break;
            case 1:
                $companies[$i]->activeShow = '是';
                break;
            }
        }
        return $companies;
    }

    public function listsAmount($params) {
        $companyQuery = Company::orderBy('id', 'desc');
        return $companyQuery->count();
    }

    public function getById($id) {
        $company = Company::where('id', '=', $id)
            ->first();
        if(isset($company->id) == false) {
            throw new Exception("廠商不存在 id:[$id]");
        }
        if(trim($company->infoPath1) != "" && $company->infoMode1 == 2) {
            $company->infoPath1 = substr($company->infoPath1, 17);
        }
        if(trim($company->infoPath2) != "" && $company->infoMode2 == 2) {
            $company->infoPath2 = substr($company->infoPath2, 17);
        }
        if(trim($company->infoPath3) != "" && $company->infoMode3 == 2) {
            $company->infoPath3 = substr($company->infoPath3, 17);
        }
        if(trim($company->infoPath4) != "" && $company->infoMode4 == 2) {
            $company->infoPath4 = substr($company->infoPath4, 17);
        }
        if(trim($company->infoPath5) != "" && $company->infoMode5 == 2) {
            $company->infoPath5 = substr($company->infoPath5, 17);
        }
        return $company;
    }

    public function updateById($id, $params, $admin, $files) {
        $company = Company::where('id', '=', $id)
            ->first();
        if(isset($company->id) == false)
            throw new Exception("廠商不存在 id:[$id]");
        $company->account = $params['account'];
        //$company->password = md5(trim($params['password']));
        $company->name = isset($params['name']) ? $params['name'] : '';
        $company->email = isset($params['email']) ? $params['email'] : '';
        $company->active = isset($params['active']) ? $params['active'] : 1;
        $company->infoMode1 = isset($params['infoMode1']) ? $params['infoMode1'] : 0;
        if(isset($params['infoVideo1']) && trim($params['infoVideo1']) != '' && $company->infoMode1 == 2)
            $company->infoPath1 = isset($params['infoVideo1']) ? $params['infoVideo1'] : '';
        $company->infoMode2 = isset($params['infoMode2']) ? $params['infoMode2'] : 0;
        if(isset($params['infoVideo2']) && trim($params['infoVideo2']) != '' && $company->infoMode2 == 2)
            $company->infoPath2 = isset($params['infoVideo2']) ? $params['infoVideo2'] : '';
        $company->infoMode3 = isset($params['infoMode3']) ? $params['infoMode3'] : 0;
        if(isset($params['infoVideo3']) && trim($params['infoVideo3']) != '' && $company->infoMode3 == 2)
            $company->infoPath3 = isset($params['infoVideo3']) ? $params['infoVideo3'] : '';
        $company->infoMode4 = isset($params['infoMode4']) ? $params['infoMode4'] : 0;
        if(isset($params['infoVideo4']) && trim($params['infoVideo4']) != '' && $company->infoMode4 == 2)
            $company->infoPath4 = isset($params['infoVideo4']) ? $params['infoVideo4'] : '';
        $company->infoMode5 = isset($params['infoMode5']) ? $params['infoMode5'] : 0;
        if(isset($params['infoVideo5']) && trim($params['infoVideo5']) != '' && $company->infoMode5 == 2)
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

    public function del($id) {
        $company = Company::where('id', '=', $id)
            ->first();
        if(isset($company->id) == false) {
            throw new Exception('廠商不存在');
        }
        $company->delete();
    }
}
