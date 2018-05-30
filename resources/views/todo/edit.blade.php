@extends('app')

@section('content')

            <h2>Edit Todo ID: {{$todo->id}}</h2>

            <form action="/update/{{$todo->id}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <div class="form-group">
                <label for="description">Description <span class="required">*</span></label>
                <textarea class="form-control" maxlength="255" name="description" id="description" aria-describedby="descriptionHelp" placeholder="Description here">{{$todo->description}}</textarea>
                <small id="descriptionHelp" class="form-text text-muted">Maximum of 255 characters.</small>
              </div>

              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="is_done" id="is_done" {{ $todo->is_done ? 'checked' : '' }} >
                <label class="form-check-label" for="is_done">Is Done?</label>
              </div>

              <button type="submit" class="btn btn-success">Save</button>
                 <a href="/" class="btn btn-default">Cancel</a>
            </form>


@endsection