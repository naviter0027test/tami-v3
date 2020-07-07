<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use \App\Http\Controllers\Controller;
use App\Repositories\ContactRepository;
use Session;
use Exception;

class ContactController extends Controller
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
        try {
            $contactRepository = new ContactRepository();
            $result['contacts'] = $contactRepository->listsByAdmin($params);
            $result['amount'] = $contactRepository->listsAmountByAdmin($params);
        }
        catch(Exception $e) {
            $result['result'] = false;
            $result['msg'] = $e->getMessage();
        }
        return view('admin.contact.index', ['admin' => $admin, 'result' => $result, 'offset' => $result['offset'], 'nowPage' => $result['nowPage'], 'params' => $params]);
    }

    public function edit(Request $request, $id) {
        $admin = Session::get('admin');
        $params = $request->all();
        $files = [];
        $result = [
            'result' => true,
            'msg' => 'success',
        ];

        try {
            $contactRepository = new ContactRepository();
            $result['contact'] = $contactRepository->getById($id);
        } catch (Exception $e) {
            $result['result'] = false;
            $result['msg'] = $e->getMessage();
        }
        return view('admin.contact.edit', ['admin' => $admin, 'result' => $result ]);
    }

    public function update(Request $request, $id) {
        $admin = Session::get('admin');
        $params = $request->all();
        $files = [];
        $result = [
            'result' => true,
            'msg' => 'success',
        ];

        try {
            $contactRepository = new ContactRepository();
            $contactRepository->updateById($id, $params, $admin, $files);
        } catch (Exception $e) {
            $result['result'] = false;
            $result['msg'] = $e->getMessage();
        }
        return view('admin.proccessResult', ['admin' => $admin, 'result' => $result]);
    }
}
