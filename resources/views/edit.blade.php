@extends('template.main')

@section('main_body')

                    <h1>Update Song</h1>
                    <form action="{{ url('/lyrics') }}/{{ $lyrics->id }}" method="post">
                        <input type="hidden" name="_method" value="PUT"> 
                        @csrf
                        <div class="form-group">
                            <label>ID</label>
                            <input type="text" class="form-control" name="id" id="id" value="{{ $lyrics->id }}">
                        </div>
                        {{-- <input type="hidden" name="csrf_token" value="{{ csrf_token() }}"> --}}
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" id="title" value="{{ $lyrics->title }}">
                        </div>
                        <div class="form-group">
                            <label>Artist</label>
                            <input type="text" class="form-control" name="artist" id="artist" value="{{ $lyrics->artist }}">
                        </div>
                        <div class="form-group">
                            <label>Lyrics</label>
                            <textarea name="lyrics" id="lyrics" cols="30" rows="10" class="form-control">{{ $lyrics->lyrics }}</textarea>
                        </div>
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </form>
                    <br>
                    @include('messages')
@endsection