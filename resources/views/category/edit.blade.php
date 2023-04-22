@extends('layouts.app')

@section('content')
<form action="{{route('category.update', $category->id)}}" method="POST" class="pb-5 pt-5">
    <div  class=" container pb-5 mt-5 form-row bg-light shadow p-3 mb-5 bg-light rounded-3 col-4">
        @csrf
        @method('PUT')
        <div class="form-row col-md"> <!-- Nome da Categoria-->
            <label for="nomeCate">Categoria</label>
            <input type="text" class="form-control" id="nomeCate" name="name" value="{{$category->name}}">
            <div   class="d-flex flex-column">
                <button type="submit"  class="btn btn-warning mt-2">Enviar</button>
            </div>
    </div>
</form>
@endsection
