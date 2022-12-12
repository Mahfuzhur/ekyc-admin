<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\NIDInfoRepository;
class NIDInfoController extends Controller
{
    public function create(NIDInfoRepository $NIDInfoRepository){
        $NIDInfoRepository->addNID();
    }

    public function getNIDInfo(NIDInfoRepository $NIDInfoRepository){
        return $NIDInfoRepository->getNID();
    }
}
