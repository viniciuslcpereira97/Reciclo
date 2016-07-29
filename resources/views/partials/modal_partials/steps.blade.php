<div class="container-fluid" id="steps-list">
    
    <div class="row">
        <div class="input-field col s6 m6 l6">
            {!! Form::textarea('ingredients', null, ['class'  =>  'materialize-textarea', 'id'    =>  'ingredients-textarea']) !!}
            <label for="steps-textarea">Ingredientes</label>
            <small class="grey-text text-lighten-1">Separe os ingredientes utilizando ";"</small>
        </div>
        <div class="input-field col s6 m6 l6">
            {!! Form::textarea('steps', null, ['class'  =>  'materialize-textarea', 'id'    =>  'steps-textarea']) !!}
            <label for="steps-textarea">Passos</label>
            <small class="grey-text text-lighten-1">Separe os passos utilizando ";"</small>
        </div>
    </div>

</div>