<x-app-layout>
    <section class="section">
        <div class="section-body">
            <ul>
                <li>
                    <a href="">Company</a>
                </li>
            </ul>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Company Create</h4>
                            <a href="{{ route('admin.company.index') }}" class="btn btn-primary">Go Back</a>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.company.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-6 mb-4">
                                        <label for="name">Company Name</label>
                                        <input type="text" name="name" id="name" class="form-control">
                                    </div>

                                    <div class="col-6 mb-4">
                                        <label for="email">Company Email</label>
                                        <input type="email" name="email" id="email" class="form-control">
                                    </div>
                                    <div class="col-6 mb-4">
                                        <label for="phone">Company Phone</label>
                                        <input type="tel" name="phone" id="phone" class="form-control">
                                    </div>
                                      <div class="col-6 mb-4">
                                        <label for="youtube">Youtube Link</label>
                                        <input type="text" name="youtube" id="youtube" class="form-control">
                                    </div>
                                    <div class="col-6 mb-4">
                                        <label for="facebook">Facebook Link</label>
                                        <input type="text" name="facebook" id="facebook" class="form-control">
                                    </div>
                                    <div class="col-6 mb-4">
                                        <label for="instagram">Instagram Link</label>
                                        <input type="text" name="instagram" id="instagram" class="form-control">
                                    </div>
                                    <div class="col-6 mb-4">
                                        <label for="logo">Upload Company Logo</label>
                                        <input type="file" name="logo" id="logo" class="form-control">
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-success">Save record</button>
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
