@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation-errors')
    <form action="{{route('estudio.update', $estudio->id)}}" method="POST">
        @method('PUT')
        @include('dashboard.estudio._form')
    </form>
@endsection