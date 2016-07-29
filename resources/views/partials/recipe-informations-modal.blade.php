<div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4>&nbsp</h4>
        <div class="container-fluid">
            <div class="row">
                <div class="input-field col s6 m6 l6">
                    <input name="recipe_name" id="recipe_name" type="text" class="validate">
                    <label for="recipe_name">Nome</label>
                </div>
            </div>
        @include('partials.modal_partials.steps')
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Cancelar</a>
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" id="button-create-recipe">Criar</a>
    </div>
</div>
<script type="text/javascript" src="{{ asset('js/firebase/new-recipe.js') }}"></script>
<script type="text/javascript">

    $("#button-create-recipe").on('click', function(){
        var steps = $('#steps-textarea').val().toString().split(';');
        var ingredients = $('#ingredients-textarea').val().toString().split(';');
        saveRecipe($("#recipe_name").val().toString(), steps, ingredients);
    });  

</script>