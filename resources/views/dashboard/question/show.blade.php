@extends('dashboard.master')
@section('content')
<div class="form-group">
    <div class="row center">
        <div class="col">
            <label for="question" class="form-label">Pregunta</label>
            <input readonly type="text" class="form-control" name="question" id="question" value= {{ $question ->question}} >
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row center">
        <div class="col">
            <label for="answer" class="form-label">Respuesta</label>
            <input readonly type="text" class="form-control" name="answer" id="answer" value= {{ $question ->answer}} >
        </div>
    </div>
</div>

@endsection
