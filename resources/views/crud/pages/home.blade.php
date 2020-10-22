@extends('crud.layouts.master')
@section('title')
    Student Management Crud
@endsection
@section('main-content')
<!--Content Start-->
<section class="container-fluid">
    <div class="row content bg-list home-box" style="">
        <h1>Welcome to student management crud.</h1>
        <h3>Click the button below to see the student list and other facilities:-</h3>
     <a href="{{ route('students-list')}}" class="click">Click Here</a>
    </div>
</section>
<!--Content End-->
@endsection