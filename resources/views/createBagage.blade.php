@extends('template')
@section('content')
    <br>
<div align="center">
    <h1>Formulaire bagage</h1>
    <form method="get" action="{{action('BagageController@getPost')}}">
        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="type" placeholder="Entrer le type du bagage">
        </div>
        <div class="form-group">
            <label for="couleur">Couleur</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="couleur" placeholder="Entrer la couleur du bagage">
        </div>
        <div class="form-group">
            <label for="poids">Poids</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="poids" placeholder="Entrer le poids du bagage">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
    <br>
    @endsection