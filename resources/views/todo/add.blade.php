@extends('app')

@section('content')

            <h2>New Todo</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @else
              <div class="alert alert-success">
                   <p>New Todo Added! <a href="/">view list</a></p>
                </div>
            @endif

            <form action="/add" method="post">

              <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <div class="form-group">
                <label for="description">Description <span class="required">*</span></label>
                <textarea class="form-control" maxlength="255" name="description" id="description" aria-describedby="descriptionHelp" placeholder="Description here"></textarea>
                <small id="descriptionHelp" class="form-text text-muted">Maximum of 255 characters.</small>
              </div>

              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="is_done" id="is_done" >
                <label class="form-check-label" for="is_done">Is Done?</label>
              </div>

              <button type="submit" class="btn btn-success">Submit</button>
               <a href="/" class="btn btn-default">Cancel</a>
            </form>


@endsection