@extends('layouts.app')
@section('content')
<div>
    <h3>this is contact view page</h3>
    <div>
        <strong>message send by </strong>
        <p>{{$email}}</p><br>
        <strong>Subject </strong>
        <p>{{$subject}}</p><br>
        <strong>Message </strong>
        <p>{{$mess}}</p><br>
    </div>
</div>
@endsection