@extends('layouts.app')

@section('content')

        <form action="{{ route('tag.save') }}" method="POST">
             @csrf

             <div class="form-group row mt-2">
                <label for="tag_title" class="col-sm-2 col-form-label">Tag title</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="tag_title" placeholder="Tag Title" name="tag_title" required>
                </div>
              </div>

            <div class="form-group row " >
                    <label for="category_color" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10 mb-2">
                    <button type="submit" class="btn btn-primary mb-2">Store Tag</button>
                </div>
            </div>


        </form>


    <div class="row">
        @foreach ($tags  as $tag)
            <div class="col-md-2 mt-2 mb-2">
                <div class="card">
                    <div class="card-body">
                        {{ $tag->title }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
