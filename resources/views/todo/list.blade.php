@extends('app')

@section('content')

            <h2>ToDo List</h2>

            <div class="table-responsive">
                <table class="table table-bordered table-condensed">
                    <tr>
                        <th>ID</th>
                        <th>Description</th>
                        <th>Done?</th>
                        <th>Character Count</th>
                        <th>Actions</th>
                    </tr>
                    @if(!$todo->isEmpty())
                        @foreach($todo as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->description}}</td>
                                <td>{{ $item->is_done ? 'Yes' : 'No' }}</td>
                                <td>{{$item->character_count}}</td>
                                <td>
                                    <a href="/edit/{{$item->id}}" class="btn btn-primary edit-button">Edit</a>
                                    <a href="/delete/{{$item->id}}" class="btn btn-warning delete-button">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">
                                <h5 class="text-center">
                                    No item yet. <a href="/add">Add?</a>
                                </h5>
                            </td>
                        </tr>
                    @endif

                </table>

                 <a href="/add" class="btn btn-success">Add new</a>
            </div>

@endsection