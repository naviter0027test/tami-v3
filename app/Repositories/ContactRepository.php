<?php

namespace App\Repositories;

use App\Contact;
use Exception;

class ContactRepository
{
    public function lists($params) {
        $nowPage = isset($params['nowPage']) ? (int) $params['nowPage'] : 1;
        $offset = isset($params['offset']) ? (int) $params['offset'] : 10;
        if(isset($params['companyId']) == false)
            throw new Exception('please input company id');

        $contactQuery = Contact::orderBy('id', 'desc')
            ->where('companyId', '=', $params['companyId'])
            ->skip(($nowPage-1) * $offset)
            ->take($offset);
        $contacts = $contactQuery->get();
        foreach($contacts as $i => $contact) {
            switch($contact->active) {
            case 0:
                $contacts[$i]->activeShow = '否';
                break;
            case 1:
                $contacts[$i]->activeShow = '是';
                break;
            }
        }
        return $contacts;
    }

    public function listsAmount($params) {
        if(isset($params['companyId']) == false)
            throw new Exception('please input company id');
        $contactQuery = Contact::orderBy('id', 'desc')
            ->where('companyId', '=', $params['companyId']);
        return $contactQuery->count();
    }

    public function getById($id) {
        $contact = Contact::where('id', '=', $id)
            ->first();
        if(isset($contact->id) == false) {
            throw new Exception("資料不存在 id:[$id]");
        }
        return $contact;
    }
}
