@extends('crud.layouts.master')
@section('title')
    Student Management Crud
@endsection
{{-- for show message --}}
@include('crud.includes.alert')
@section('main-content')
<!--Content Start-->
<section class="container-fluid">
    <div class="row content">
        <div class="col-12 pl-0 pr-0">
            <div class="form-group">
                <div class="col-sm-12">
                    <h4 class="text-center font-weight-bold font-italic mt-3">All Student Data List</h4>
                </div>
            </div>

            <div class="table-responsive p-1">
                <table id="example" class="table table-striped table-bordered dt-responsive nowrap text-center" style="width: 100%;">
                    <thead>
                    <tr>
                        <th>Sl.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th style="width: 100px;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i=1)
                    @foreach ( $students as $student)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->mobile }}</td>                     
                        <td>
                            <a href="{{ route('add-student-form') }}" class="btn btn-sm btn-success"><i class="fas fa-user-edit" title="Insert"></i></a>
                            <a href="{{ route('edit-student-form',['id'=>$student->id]) }}" class="btn btn-sm btn-info fa fa-edit" title="Edit"></a>
                            <a href="{{ route('delete-student-info',['id'=>$student->id]) }}" onclick="return confirm('If you want to delete this info Press OK')" class="btn btn-sm btn-danger fa fa-trash-alt" title="Delete"></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!--Content End-->
@endsection