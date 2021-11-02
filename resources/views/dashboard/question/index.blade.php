@extends('dashboard.master') @section('content')

<a href="{{ route('question.create')}}" class='btn btn-info mb-3'>Crear</a>
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col">Código Pregunta</th>
            <th scope="col">Pregunta</th>
            <th scope="col">Respuesta</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($questions as $question)
        <tr>
            <th scope="row">{{ $question -> id}}</th>
            <td>{{ $question -> question}}</td>
            <td>{{ $question -> answer}}</td>
            <td>
                <a href="{{ route('question.show', $question->id)}}">Ver</a>
                <a href="{{ route('question.edit', $question->id)}}">Editar</a>
                <a href="{{ route('question.destroy', $question->id)}}">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection {{$questions->links() }}
