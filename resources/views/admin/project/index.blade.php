@extends('layouts.app')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 py-5">
                    <h1 class="title">I tuoi progetti</h1>
                    <a href="" class="btn btn-success">Aggiungi progetto</a>
                </div>
                @forelse ($projects as $project)
                    <div class="col-3">
                        <a href="{{route('admin.project.show',$project->id)}}">

                            <div class="card">
                                <ul>
                                    <li>{{$project->name}}</li>
                                    <li>{{$project->language}}</li>
                                </ul>
                            </div>
                        </a>
                    </div>   
                @empty
                    
                @endforelse
               
            </div>
        </div>
    </section>
@endsection