<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use \App\Http\Controllers\Controller;
use App\Repositories\CompanyRepository;
use Session;
use Exception;

class ProductController extends Controller
{
    public function index(Request $request) {
        return view('company.product.index');
    }

    public function createPage(Request $request) {
        $company = Session::get('company');
        return view('company.product.create', ['company' => $company]);
    }
}
