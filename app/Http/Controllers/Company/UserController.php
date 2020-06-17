<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use \App\Http\Controllers\Controller;
use App\Repositories\CompanyRepository;
use Session;
use Exception;

class UserController extends Controller
{
    public function home(Request $request) {
        $company = Session::get('company');
        $params = $request->all();
        $validate = Validator::make($request->all(), [
            'nowPage' => 'integer',
            'offset' => 'integer',
        ]);

        if($validate->fails()) {
            $res['status'] = false;
            $res['message'] = $validate->errors();
            return response()->json($res, 200);
        }
        $params['nowPage'] = isset($params['nowPage']) ? $params['nowPage'] : 1;
        $params['offset'] = isset($params['offset']) ? $params['offset'] : 10;
        $result = [
            'result' => true,
            'msg' => 'success',
            'nowPage' => $params['nowPage'],
            'offset' => $params['offset'],
        ];
        return view('company.home', ['adm' => $company]);
    }

    public function loginPage(Request $request) {
        return view('company.login');
    }

    public function passAdmin(Request $request) {
        $company = Session::get('company');
        return view('company.setting.index', ['adm' => $company]);
    }

    public function login(Request $request) {
        $params = $request->all();
        $params['account'] = isset($params['account']) ? $params['account'] : '';
        $params['password'] = isset($params['password']) ? $params['password'] : '';
        $companyRepository = new CompanyRepository();
        $adm = $companyRepository->checkPassword($params);
        if($adm != false) {
            Session::put('company', $adm);
            return redirect('/company/home');
        }
        return view('company.login');
    }

    public function logout(Request $request) {
        Session::flush();
        return redirect('/company/login');
    }

    public function passUpdate(Request $request) {
        $company = Session::get('company');
        $params = $request->all();
        $params['account'] = $company->account;
        $result = [
            'result' => true,
            'msg' => 'success',
        ];

        try {
            $companyRepository = new CompanyRepository();
            $companyRepository->updatePassword($params);
        }
        catch(Exception $e) {
            $result['result'] = false;
            $result['msg'] = $e->getMessage();
        }
        return view('company.proccessResult', ['adm' => $company, 'result' => $result]);
    }
}
