<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header justify-content-between">
                            <h4>Category Edit</h4>
                            <a href="{{ route('admin.category.index') }}" class="btn btn-primary">go back</a>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.category.update',$category->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-6 pb-4">
                                        <label for="title">Enter Category Title</label>
                                        <input type="text" name="title" id="title" class="form-control" value="{{$category->title}}">
                                    </div>
                                    @error('title')
                                    <p>
                                        <span class="text-danger">{{$message}}</span>
                                    </p>

                                    @enderror

                                    <div class="col-12 pb-3">
                                        <label for="status">Change status</label>
                                        <select name="status" id=""status>
                                            <option value="1" {{$category->status == 1 ? 'selected' : ''}}>Active</option>
                                            <option value="0" {{$category->status == 0 ? 'selected': ''}}>Inactive</option>
                                        </select>

                                    </div>
                                    @error('status')
                                    <p>
                                        <span class="text-danger">{{$message}}</span>
                                    </p>

                                    @enderror
                                    <div class="col-12 pb-2">
                                        <label for="meta_keywords">Enter Meta Keywords</label>
                                        <textarea name="meta_keywords" id="meta_keywords" class="form-control">
                                            {{$category->meta_keywords}}
                                        </textarea>
                                    </div>

                                    <div class="col-12 pb-2">
                                        <label for="meta_description">Enter Meta Description</label>
                                        <textarea name="meta_description" id="meta_description" class="form-control">


                                            {{$category->meta_description}}
                                        </textarea>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-success">Save Record</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
