@extends('template.main')

@section('main_body')
                    <h1>Create Song</h1>
                    <form action="{{ action('LyricsController@store') }}" method="post">
                        @csrf
                        {{-- <input type="hidden" name="csrf_token" value="{{ csrf_token() }}"> --}}
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" id="title" value="">
                        </div>
                        <div class="form-group">
                            <label>Artist</label>
                            <input type="text" class="form-control" name="artist" id="artist" value="">
                        </div>
                        <div class="form-group">
                            <label>Lyrics</label>
                            <textarea name="lyrics" id="lyrics" cols="30" rows="10" class="form-control"> </textarea>
                        </div>
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </form>
                    <br>
                    @include('messages')
@endsection