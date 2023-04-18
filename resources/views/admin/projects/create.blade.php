@extends('layouts.app')

@section('title', 'Aggiungi nuovo progetto')

@section('actions')
<div>
  <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">
    Torna alla lista progetti
  </a>
</div>
@endsection

@section('content')
<section class="card py-2">

  <div class="card-body">

    <form method="POST" action="{{ route('admin.projects.store') }}" enctype="multipart/form-data" class="row">
        @csrf


        <div class="row mb-3">
        <div class="col-md-2 text-end">
            <label for="title" class="form-label">Titolo</label>
        </div>
        <div class="col-md-10">
            <input type= "text" name = "title" id = "title" class="form-control"/>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-2 text-end">
            <label for="title" class="form-label">Immagine</label>
        </div>
        <div class="col-md-10">
            <input type= "text" name = "title" id = "title" class="form-control"/>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-2 text-end">
            <label for="title" class="form-label">Testo</label>
        </div>
        <div class="col-md-10">
            <textarea type= "text" name = "title" id = "title" class="form-control" rows="5"></textarea>
        </div>
    </div>
            
            <div class="row">
                <div class="offset-2 col-8">
                    <input type= "submit" class="btn btn-primary" value="Salva"/>
                </div>
            </div>
        </form>


</div>

</section>

@endsection