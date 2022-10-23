@extends('layouts.app')
@section('content')
<div>
    <h3>This is contact info</h3>
    <div>
        <form class="row g-3" action="{{route('contact.us')}}" method="post">
            @csrf
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">Email</span>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="email"
                        placeholder="exemple@mail.com" value="{{old('email')}}">
                </div>
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="col-md-6">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">Subject</span>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="sub"
                        placeholder="write short subject" value="{{old('sub')}}">
                </div>
                @error('sub')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>


            <div class="col-12">
                <div class="input-group">
                    <span class="input-group-text">Message</span>
                    <textarea class="form-control" aria-label="With textarea" placeholder="Write your message here..."
                        name="message" value="{{old('message')}}"></textarea>
                </div>
                @error('message')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </form>
    </div>
</div>
@endsection