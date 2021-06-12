@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation-errors')
    <form action="{{route('estudio.store')}}" method="POST">
        @include('dashboard.estudio._form')
    </form>
@endsection