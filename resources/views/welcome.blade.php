@extends('layout')
@section('content')
                <div class="col-8">
                    <form action="{{route('add-nid')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">নাম</label>
                            <input type="text" name="b_name"  class="form-control" id="b_name" placeholder="নাম" required>
                        </div>
                        <div class="form-group">
                            <label for="b_name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="name" required>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control-file" id="image">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select name="gender" class="form-control" id="gender" required>
                                <option disabled selected>gender</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="f_name">পিতা</label>
                            <input type="text" name="f_name" class="form-control" id="f_name" placeholder="পিতা" required>
                        </div>
                        <div class="form-group">
                            <label for="m_name">মাতা</label>
                            <input type="text" name="m_name" class="form-control" id="m_name" placeholder="মাতা" required>
                        </div>
                        <div class="form-group">
                            <label for="spouse">Spouse</label>
                            <input type="text" name="spouse" class="form-control" id="spouse" placeholder="Spouse">
                        </div>
                        <div class="form-group">
                            <label for="date_of_birth">Date of Birth</label>
                            <input type="date" name="date_of_birth" class="form-control" id="date_of_birth" required>
                        </div>

                        <div class="form-group">
                            <label for="nid">NID No</label>
                            <input type="text" name="nid" class="form-control" id="nid" placeholder="NID No" required>
                        </div>
                        <div class="form-group">
                            <label for="nid">Pin</label>
                            <input type="text" name="pin" class="form-control" id="pin" placeholder="Pin" required>
                        </div>

                        <div class="form-group">
                            <label for="occupation">Occupation</label>
                            <select name="occupation" class="form-control" id="occupation" required>
                                <option disabled selected>Occupation</option>
                                <option>Student</option>
                                <option>Private Employee</option>
                                <option>Government Employee</option>
                                <option>Businessmen</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="blood_group">Blood Group</label>
                            <select name="blood_group" class="form-control" id="blood_group" required>
                                <option disabled selected>Blood Group</option>
                                <option>A+</option>
                                <option>A-</option>
                                <option>B+</option>
                                <option>B-</option>
                                <option>AB+</option>
                                <option>AB-</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="present_address">বর্তমান ঠিকানা</label>
                            <textarea name="present_address" class="form-control" id="present_address" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="permanent_address">স্থায়ী ঠিকানা</label>
                            <textarea name="permanent_address" class="form-control" id="permanent_address" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit">
                        </div>

                    </form>
                </div>
@endsection

