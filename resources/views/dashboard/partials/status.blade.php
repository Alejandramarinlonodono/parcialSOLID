{{--  Con shift alt f se aplican estilos   --}}
{{--  y con Shift alt a se crean comentarios  --}}
@if (session('status'))
    <div class="alert alert-info">
        {{session('status')}}
    </div>
@endif
