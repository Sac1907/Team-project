@extends('layouts.app')
@section('contents')
    <ul>
        @foreach($all as $single)
        <il>
            {{$single->product_name}}
        </il>
        @endforeach
    </ul>
@endsection
