@extends('template.main')

@section('main_body')
                    <h1 class="mt-4">Songs</h1>
                    <div class="card mb-4">
                        
                        @if (count($lyrics) > 0)
                        <div class="card-header">
                            <p>ID : {{ $lyrics->id }}</p> 
                            <p>Title : {{ $lyrics->title }}</p> 
                        </div>
                        <div class="card-body">
                            
                            <p>Artist : {{ $lyrics->artist }}</p> 
                            <p>Lyrics : </p>
                            {{ $lyrics->lyrics }}
                        </div>
                        @else
                            <h1>
                                No records found
                            </h1>
                        @endif
                    </div>
@endsection