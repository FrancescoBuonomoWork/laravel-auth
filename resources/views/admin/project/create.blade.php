@extends('layouts.app')

@section('content')
    
<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{route('admin.project.store')}}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Nome progetto</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>

                    <div class="mb-3">
                        <label for="language" class="form-label">Linguaggio</label>
                        <input type="text" name="language" class="form-control" id="language">
                    </div>

                    <button type="submit" class="btn btn-success">Aggiungi</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection