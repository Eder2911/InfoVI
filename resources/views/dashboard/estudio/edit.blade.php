@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation-errors')
    <form action="{{route('estudio.update', $estudio->idEstudio)}}" method="POST">
        @method('PUT')
        @include('dashboard.post._form')
    </form>
@endsection