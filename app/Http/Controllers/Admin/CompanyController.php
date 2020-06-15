<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use \App\Http\Controllers\Controller;
use App\Repositories\CompanyRepository;
use Session;
use Exception;

class CompanyController extends Controller
{
    public function index(Request $request) {
        $admin = Session::get('admin');
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
        return view('admin.company.index', ['adm' => $admin]);
    }

    public function createPage(Request $request) {
        $admin = Session::get('admin');
        return view('admin.company.create', ['adm' => $admin]);
    }

    public function create(Request $request) {
        $admin = Session::get('admin');
        $params = $request->all();
        $files = [];
        $result = [
            'result' => true,
            'msg' => 'success',
        ];
        if($request->hasFile('logo'))
            $files['logo'] = $request->file('logo');
        if($request->hasFile('infoPath1'))
            $files['infoPath1'] = $request->file('infoPath1');
        if($request->hasFile('infoPath2'))
            $files['infoPath2'] = $request->file('infoPath2');
        if($request->hasFile('infoPath3'))
            $files['infoPath3'] = $request->file('infoPath3');
        if($request->hasFile('infoPath4'))
            $files['infoPath4'] = $request->file('infoPath4');
        if($request->hasFile('infoPath5'))
            $files['infoPath5'] = $request->file('infoPath5');

        try {
            $companyRepository = new CompanyRepository();
            $companyRepository->create($params, $admin, $files);
        } catch (Exception $e) {
            $result['result'] = false;
            $result['msg'] = $e->getMessage();
        }
        return view('admin.proccessResult', ['adm' => $admin, 'result' => $result]);
    }
}
