<?php

namespace App\Http\Controllers;

use App\Models\NIDInfo;
use Illuminate\Http\Request;
use App\Repositories\NIDInfoRepository;
class NIDInfoController extends Controller
{
    public function addPage(){
        return view('welcome');
    }
    public function create(NIDInfoRepository $NIDInfoRepository){
        $NIDInfoRepository->addNID();
        return redirect('/');
    }

    public function getNIDInfo(NIDInfoRepository $NIDInfoRepository){
        return $NIDInfoRepository->getNID();
    }
    public function list(){
        $nid_infos = NIDInfo::all();
//        return $nid_infos;
        return view('nid_list',compact('nid_infos'));
    }
    public function edit($id){
        $nid_info = NIDInfo::find($id);
        return view('edit_nid',compact('nid_info'));
    }

    public function update($id,NIDInfoRepository $NIDInfoRepository){
        $NIDInfoRepository->updateNID($id);
        return redirect('/');
    }

    public function delete($id){
        NIDInfo::where('id',$id)->delete();
        return redirect('/');
    }
}
