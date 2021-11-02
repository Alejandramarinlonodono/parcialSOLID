@extends('dashboard.master')
@section('content')
    <form action="{{ route(question.update',$question->id)}}" method="post">
        @method('PUT')
        @include('dashboard.pet._form')
    </form>
    <button class="btn btn-info" href="{{  URL::previous() }}">Regresar</button>
@endsection
