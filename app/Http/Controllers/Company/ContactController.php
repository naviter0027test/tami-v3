<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use \App\Http\Controllers\Controller;
use App\Repositories\CompanyRepository;
use App\Repositories\ContactRepository;
use Session;
use Exception;

class ContactController extends Controller
{
    public function index(Request $request) {
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
        $params['companyId'] = $company->id;
        $result = [
            'result' => true,
            'msg' => 'success',
            'nowPage' => $params['nowPage'],
            'offset' => $params['offset'],
        ];
        try {
            $contactRepository = new ContactRepository();
            $result['contacts'] = $contactRepository->lists($params);
            $result['amount'] = $contactRepository->listsAmount($params);
        }
        catch(Exception $e) {
            $result['result'] = false;
            $result['msg'] = $e->getMessage();
        }
        return view('company.contact.index', ['company' => $company, 'result' => $result, 'offset' => $result['offset'], 'nowPage' => $result['nowPage'], 'params' => $params]);
    }

    public function edit(Request $request, $id) {
        $company = Session::get('company');
        $params = $request->all();
        $files = [];
        $result = [
            'result' => true,
            'msg' => 'success',
        ];

        try {
            $contactRepository = new ContactRepository();
            $result['contact'] = $contactRepository->getByIdCompany($id, $company->id);
        } catch (Exception $e) {
            $result['result'] = false;
            $result['msg'] = $e->getMessage();
        }
        return view('company.contact.edit', ['company' => $company, 'result' => $result ]);
    }

    public function update(Request $request, $id) {
        $company = Session::get('company');
        $params = $request->all();
        $files = [];
        $result = [
            'result' => true,
            'msg' => 'success',
        ];

        try {
            $contactRepository = new ContactRepository();
            $contactRepository->updateById($id, $params, $company, $files);
        } catch (Exception $e) {
            $result['result'] = false;
            $result['msg'] = $e->getMessage();
        }
        return view('company.proccessResult', ['company' => $company, 'result' => $result]);
    }
}
