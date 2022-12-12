@extends('layout')
@section('content')

    <div  class="col-12">
        <table id="example" class="table table-striped table-bordered" >
            <thead>
            <tr>
                <th>Name</th>
                <th>NID No</th>
                <th>Date of Birth</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($nid_infos as $key => $nid_info)
                <tr>
                    <td>{{$nid_info->name}}</td>
                    <td>{{$nid_info->nid}}</td>
                    <td>{{$nid_info->date_of_birth}}</td>
                    <td><img style="width: 100px;height: 100px;" src="{{URL::to('/images/'.$nid_info->image)}}"></td>
                    <td><button><a href="{{route('edit-nid',['id'=>$nid_info->id])}}">edit</a></button>
                        <form action="{{route('delete-nid',['id'=>$nid_info->id])}}" method="POST">
                            @csrf
                            <button type="submit">delete</button>
                        </form>
                    </td>

                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>Name</th>
                <th>NID No</th>
                <th>Date of Birth</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            </tfoot>
        </table>


    </div>

@endsection
