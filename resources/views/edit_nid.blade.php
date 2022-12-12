@extends('layout')
@section('content')
    <div class="col-8">
        <form action="{{route('update-nid',["id" => $nid_info->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">নাম</label>
                <input type="text" name="b_name"  class="form-control" id="b_name" value="{{$nid_info->b_name}}" required>
            </div>
            <div class="form-group">
                <label for="b_name">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{$nid_info->name}}" required>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" value="{{$nid_info->image}}" class="form-control-file" id="image">
                <input type="hidden" name="image_name" value="{{$nid_info->image}}">

                <img style="height: 150px;width: 150px;" src="{{URL::to('/images/'.$nid_info->image)}}">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" class="form-control" id="gender" required>
                    <option disabled>gender</option>
                    @if($nid_info->gender == "Male")
                        <option selected>Male</option>
                    @else
                        <option>Male</option>
                    @endif
                    @if($nid_info->gender == "Female")
                        <option selected>Female</option>
                    @else
                        <option>Female</option>
                    @endif

                </select>
            </div>
            <div class="form-group">
                <label for="f_name">পিতা</label>
                <input type="text" name="f_name" class="form-control" id="f_name" value="{{$nid_info->f_name}}" required>
            </div>
            <div class="form-group">
                <label for="m_name">মাতা</label>
                <input type="text" name="m_name" class="form-control" id="m_name" value="{{$nid_info->m_name}}" required>
            </div>
            <div class="form-group">
                <label for="spouse">Spouse</label>
                <input type="text" name="spouse" class="form-control" id="spouse" value="{{$nid_info->spouse}}">
            </div>
            <div class="form-group">
                <label for="date_of_birth">Date of Birth</label>
                <input type="date" name="date_of_birth" class="form-control" id="date_of_birth" value="{{$nid_info->date_of_birth}}" required>
            </div>

            <div class="form-group">
                <label for="nid">NID No</label>
                <input type="text" name="nid" class="form-control" id="nid" value="{{$nid_info->nid}}" required>
            </div>
            <div class="form-group">
                <label for="nid">Pin</label>
                <input type="text" name="pin" class="form-control" id="pin" value="{{$nid_info->pin}}" required>
            </div>

            <div class="form-group">
                <label for="occupation">Occupation</label>
                <select name="occupation" class="form-control" id="occupation" required>
                    <option disabled>Occupation</option>
                    @if($nid_info->occupation == "Student")
                        <option selected>Student</option>
                    @else
                        <option>Student</option>
                    @endif
                    @if($nid_info->occupation == "Private Employee")
                        <option selected>Private Employee</option>
                    @else
                        <option>Private Employee</option>
                    @endif
                    @if($nid_info->occupation == "Government Employee")
                        <option selected>Government Employee</option>
                    @else
                        <option>Government Employee</option>
                    @endif
                    @if($nid_info->Businessmen == "Businessmen")
                        <option selected>Businessmen</option>
                    @else
                        <option>Businessmen</option>
                    @endif

                </select>
            </div>
            <div class="form-group">
                <label for="blood_group">Blood Group</label>
                <select name="blood_group" class="form-control" id="blood_group" required>
                    <option disabled>Blood Group</option>
                    @if($nid_info->blood_group == "A+")
                        <option selected>A+</option>
                    @else
                        <option>A+</option>
                    @endif

                    @if($nid_info->blood_group == "A-")
                        <option selected>A-</option>
                    @else
                        <option>A-</option>
                    @endif
                    @if($nid_info->blood_group == "B+")
                        <option selected>B+</option>
                    @else
                        <option>B+</option>
                    @endif
                    @if($nid_info->blood_group == "B-")
                        <option selected>B-</option>
                    @else
                        <option>B-</option>
                    @endif
                    @if($nid_info->blood_group == "AB+")
                        <option selected>AB+</option>
                    @else
                        <option>AB+</option>
                    @endif
                    @if($nid_info->blood_group == "AB-")
                        <option selected>AB-</option>
                    @else
                        <option>AB-</option>
                    @endif
                    @if($nid_info->blood_group == "O+")
                        <option selected>O+</option>
                    @else
                        <option>O+</option>
                    @endif
                    @if($nid_info->blood_group == "O-")
                        <option selected>O-</option>
                    @else
                        <option>O-</option>
                    @endif
                </select>
            </div>

            <div class="form-group">
                <label for="present_address">বর্তমান ঠিকানা</label>
                <textarea name="present_address" class="form-control" id="present_address" rows="3" required>{{$nid_info->present_address}}</textarea>
            </div>
            <div class="form-group">
                <label for="permanent_address">স্থায়ী ঠিকানা</label>
                <textarea name="permanent_address" class="form-control" id="permanent_address" rows="3" required>{{$nid_info->permanent_address}}</textarea>
            </div>
            <div class="form-group">
                <input type="submit">
            </div>

        </form>
    </div>
@endsection

