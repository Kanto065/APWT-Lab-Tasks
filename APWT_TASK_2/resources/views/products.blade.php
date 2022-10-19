@extends('layouts.app')
@section('content')
<div>
    <h3>this is product list</h3>
    <table>
        <ul>
            <li>phone name : {{$name}}</li>
            <li>phone price: {{$price}}</li>
            <li>description: {{$des}}</li>

        </ul>
    </table>
</div>
@endsection