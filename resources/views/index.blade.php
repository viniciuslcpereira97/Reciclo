@extends('layouts.app')

@section('content')
<div class="container-fluid">    
    <div class="row" id="recipes-container"></div>
    
    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <a class="modal-trigger btn-floating btn-large red" data-target="modal1" href="#modal1">
            <i class="large material-icons">add</i>
        </a>
    </div>
    
</div>
<script type="text/javascript" src="{{ asset('js/init-modal.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/firebase/draw-card.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/firebase/recipes.js') }}"></script>
@include('partials.create_recipe_modal')
@endsection
