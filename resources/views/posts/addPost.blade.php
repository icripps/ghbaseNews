@extends('layouts.app')

@section('content')

<div class="row mt-4">
    <div class="col-md-12 mb-2">
            <div class="card">
                    <div class="card-body">
                            <form action="{{ route('post.save') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row mt-2">
                                       <label for="post_title" class="col-sm-2 col-form-label">Post title</label>
                                       <div class="col-sm-10">
                                         <input type="text" class="form-control" id="post_title" placeholder="Post Title" name="post_title" required>
                                       </div>
                                     </div>

                                     <div class="form-group row mt-4">
                                           <label for="post_content" class="col-sm-2 col-form-label">Post Content</label>
                                           <div class="col-md-10">
                                               <textarea name="post_content" id="post_content" class="form-control" cols="30" rows="10" placeholder="Type your content oer here"></textarea>
                                           </div>
                                         </div>


                                     <div class="form-group row mt-4">
                                           <label for="category_id" class="col-sm-2 col-form-label">Select category</label>
                                           <div class="col-md-10">
                                                   <select class="form-control" name="category_id" id="category_id" required>
                                                       <option selected>Select category</option>
                                                           @foreach($category as $category)

                                                               <option value="{{$category->id}}">{{$category->title}}</option>

                                                           @endforeach
                                                   </select>
                                           </div>
                                         </div>

                                         <div class="form-group row mt-4">
                                               <label for="tags" class="col-sm-2 col-form-label">Select tags</label>
                                               <div class="col-md-10">

                                                    <select class="form-control" name="tags[]" id="tag_id" multiple>
                                                                @foreach($tags as $tag)

                                                                    <option value="{{$tag->id}}">{{$tag->title}}</option>

                                                                @endforeach
                                                        </select>
                                               </div>
                                             </div>

                                             <div class="form-group row mt-4">
                                                    <label for="post_images" class="col-sm-2 col-form-label">Select image(s)</label>
                                                    <div class="col-md-10">
                                                            <input type="file" class="form-control" id="post_images" name="post_images[]" multiple>
                                                    </div>
                                                  </div>

                                   <div class="form-group row " >
                                           <label for="category_color" class="col-sm-2 col-form-label"></label>
                                       <div class="col-sm-10 mb-2">
                                           <button type="submit" class="btn btn-primary mb-2">Store Post</button>
                                       </div>
                                   </div>


                               </form>
                    </div>
                </div>
    </div>
</div>

@endsection
