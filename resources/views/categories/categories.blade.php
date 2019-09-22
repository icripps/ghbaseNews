@extends('layouts.app')

@section('content')

        <form action="{{ route('category.save') }}" method="POST">
             @csrf

             <div class="form-group row mt-2">
                <label for="category_title" class="col-sm-2 col-form-label">Category title</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="category_title" placeholder="Category Title" name="category_title" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="category_color" class="col-sm-2 col-form-label">Category Color</label>
                <div class="col-sm-10">
                  <input type="color" class="form-control" id="category_color" placeholder="Category Title" name="category_color" required>
                </div>
              </div>

            <div class="form-group row " >
                    <label for="category_color" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10 mb-2">
                    <button type="submit" class="btn btn-primary mb-2">Store Category</button>
                </div>
            </div>


        </form>


    <div class="row">
        @foreach ($categories  as $category)
            <div class="col-md-3 mt-2 mb-2">
                <div class="card">
                    <div class="card-body" style="background-color: {{ $category->color }}">
                        {{ $category->title }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
