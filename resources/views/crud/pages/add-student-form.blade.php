@extends('crud.layouts.master')
@section('main-content')
    <!--Content Start-->
 <section class="container-fluid">
    <div class="row content registration-form">
        <div class="col-12 pl-0 pr-0">
            <div class="form-group">
                <div class="col-sm-12">
                    <h4 class="text-center font-weight-bold font-italic mt-3">Student Add Form</h4>
                </div>
            </div>
            <form method="POST" action="{{ route('save-value') }}" enctype="multipart/form-data" autocomplete="" class="form-inline">
                @csrf
                <div class="form-group col-12 mb-3">
                    <label for="name" class="col-sm-3 col-form-label text-right">{{ __('Name') }}</label>
                    <input id="name" type="text" class="col-sm-9 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group col-12 mb-3">
                    <label for="email" class="col-sm-3 col-form-label text-right">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="col-sm-9 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Address" required autofocus>
                    @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>


                <div class="form-group col-12 mb-3">
                    <label for="mobile" class="col-sm-3 col-form-label text-right">{{__('Mobile')}}</label>
                    <input id="mobile" type="text" class="col-sm-9 form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" placeholder="8801xxxxxxxxx" required>
                    @error('mobile')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                   </div>
                <div class="form-group col-12 mb-3">
                    <label class="col-sm-3"></label>
                    <button type="submit" class="col-sm-9 btn btn-block my-btn-submit">{{ __('Submit') }}</button>
                </div>
            </form>
        </div>
    </div>
</section>
<!--Content End-->
@endsection