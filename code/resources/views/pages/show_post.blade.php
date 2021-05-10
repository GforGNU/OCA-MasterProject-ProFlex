@extends('layouts.default')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   your posts:
                  
                   <h3>{{$post->job_name}}</h3>
                   <p> {{$post->job_description}}</p>
                   <!-- @can('update', $post)
                   <button> update </button>
                   @endcan -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
