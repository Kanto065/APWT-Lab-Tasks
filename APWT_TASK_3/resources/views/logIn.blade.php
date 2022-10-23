@extends('layouts.app')
@section('content')
<div>
    <h3>This is log in</h3>
    <form class="row g-3" action="{{route('log.in')}}" method="post">
        @csrf
        <div class="col-md-6">
            <label for="validationDefaultEmail" class="form-label">Email</label>
            <div class="input-group">

                <input type="email" class="form-control" id="validationDefaultEmail"
                    aria-describedby="inputGroupPrepend2" name="email" placeholder="exemple@mail.com"
                    value="{{old('email')}}">
            </div>
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="validationDefaultPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
            @error('password')
            <span class="text-danger">{{$message}}</span>
            @enderror
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Log in</button>
        </div>
    </form>


</div>
@endsection