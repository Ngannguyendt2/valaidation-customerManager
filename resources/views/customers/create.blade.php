@extends('home')
@section('title', 'THÊM KHÁCH HÀNG ')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12"><h1>THÊM KHÁCH HÀNG</h1></div>
            <div class="col-12">
                @if (Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                    </p>
                @endif
            </div>
            <div class="error-message">
                @if ($errors->any())
                    @foreach($errors->all() as $nameError)
                        <p style="color:red">{{ $nameError }}</p>
                    @endforeach

                @endif
            </div>
            <form method="post" action="{{route('customers.store')}}">
                @csrf
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" class="form-control" placeholder="Full name" name="name">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Enter email" name="email">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection
