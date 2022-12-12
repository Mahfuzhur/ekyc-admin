<?php

namespace App\Repositories;
use App\Models\NIDInfo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\UploadPhoto;
use PHPUnit\Exception;
use Illuminate\Support\Facades\DB;

class NIDInfoRepository
{
    public function addNID(){
//        dd(public_path('images'));
//        $request->validate([
//            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//        ]);
        DB::beginTransaction();
        try {
            $imageName = time().'.'.request()->image->extension();

            $image_result = request()->image->move(public_path('images'), $imageName);
//        request()->image=$imageName;
            $data = request()->merge(['image' => $imageName]);
            $result = NIDInfo::create(["b_name"=> request()->b_name,"name"=> request()->name,"f_name"=> request()->f_name,"m_name"=> request()->m_name,"spouse"=> request()->spouse,"date_of_birth"=> request()->date_of_birth,"nid"=>request()->nid,"pin"=> request()->pin,"occupation"=> request()->occupation,"blood_group"=> request()->blood_group,"present_address"=> request()->present_address,"permanent_address"=> request()->permanent_address,"image" => $imageName ]);
            DB::commit();
        }catch (Exception $exception){
            DB::rollBack();
            return $exception->getMessage();
        }


    }
    public function getNID(){

        $result = NIDInfo::where(['nid' => request()->person_nid,'date_of_birth' => request()->person_dob])->first();
//        return $result;
        $image = base64_encode(file_get_contents(public_path('images').'\\'.$result->image));

        return response()->json([
            "is_success" => true,
            "result" => "Success",
            'data'=>
            [
                "nid_info"=>
                [
                    "bangla_name" => $result->b_name,
                    "blood" => $result->blood_group,
                    "dob" => $result->date_of_birth,
                    "father" => $result->f_name,
                    "gender" => $result->gender,
                    "info_img" => "info image",
                    "mother" => $result->m_name,
                    "name" => $result->name,
                    "nid" => $result->nid,
                    "occupation" => $result->occupation,
                    "parmanent" => $result->permanent_address,
                    "photo" => $image,
                    "present" => $result->present_address,

                ]

            ]

        ]);
    }
}
