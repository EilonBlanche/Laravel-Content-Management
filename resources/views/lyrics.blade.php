@extends('template.main')

@section('main_body')

<style>
    
.borderless td, .borderless th {
    border: none;
}
</style>
                    <h1 class="mt-4">Song List</h1>
                    <div class="card mb-4">
                        
                    @include('messages')
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Songs
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="col-md-3"  style="float:right">
                                    <a href="/lyrics/create" class="btn btn-success form-control"><span class="fas fa-plus"></span> Add new song</a>
                                </div>
                                <br>
                                <br>
                                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="table-primary">
                                        <tr>
                                            <th style="text-align: center"><span class="fa fa-cog"></span></th>
                                            <th>ID</th>
                                            <th>Song Title</th>
                                            <th>Artist</th>
                                            <th>Lyrics</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    @if (count($lyrics) > 0)
                                    
                                        @foreach ($lyrics as $item)
                                                <tr>
                                                    <td style="text-align: center;">                                                
                                                        <form action="/lyrics/{{$item->id}}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <button type="submit" class="btn btn-danger"><span class="fa fa-trash"></span></button>
                                                        </form>
                                                        <a href="/lyrics/{{$item->id}}/edit" class="btn btn-success">
                                                            <span class="fa fa-pen"></span>
                                                        </a>
                                                    </td>
                                                    <td>{{ $item->id }}</td>
                                                    <td><a href="/lyrics/{{$item->id}}">{{ $item->title }}</a></td>
                                                    <td>{{ $item->artist }}</td>
                                                    <td style="white-space:pre-wrap">{{ $item->lyrics }}</td>
                                                </tr>
                                        @endforeach
                                    @else
                                        <tr><td colspan="5" style="text-align: center">No records found</td></tr>
                                    @endif
                                    
                                    </tbody> 
                                </table>
                            </div>
                        </div>
                    </div>
@endsection



@section('scripts')
<script>
    $(document).ready(function () {
        $("#dataTable").DataTable({
            dom: 'frtipl',
        });
    })
</script>    
@endsection