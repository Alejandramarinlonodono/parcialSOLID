@csrf @include('dashboard.partials.validation-error')
<div class="form-group">
    <div class="row center">
        <div class="col">
            <label for="question" class="form-label">Pregunta</label>
            <input type="text" class="form-control" name="question" id="question">
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row center">
        <div class="col">
            <label for="answer" class="form-label">Respuesta</label>
            <input type="text" class="form-control" name="answer" id="answer">
        </div>
    </div>
</div>
<div class="mb-3">
    <div class="form-group">
        <a class="btn btn-outline-danger" href="{{  URL::previous() }}">Regresar</a>
        <button type="submit" class="btn btn-outline-success">Guardar</button>
    </div>
</div>
