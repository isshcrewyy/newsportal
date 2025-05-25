<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header justify-content-between">
                            <h4>Advertise Create</h4>
                            <a href="{{ route('admin.advertise.index') }}" class="btn btn-primary">go back</a>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.advertise.store') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div class="row">
                                    <div class="col-6 pb-2">
                                        <label for="company_name">Enter Company Name</label>
                                        <input type="text" name="company_name" id="company_name" class="form-control">
                                    </div>

                                    <div class="col-12 pb-2">
                                        <label for="link">Enter Link</label>
                                         <input type="text" name="link" id="link" class="form-control">
                                    </div>
                                    <div class="col-12 pb-2">
                                        <label for="expire_date">Enter Expiry Date</label>
                                       <input type="date" id="expire_date" name="expire_date">

                                    </div>

                                    <div class="col-12 pb-2">
                                        <label for="contact">Contact</label>
                                       <input type="text" name="contact" id="contact" class="form-control">
                                    </div>
                                    <div class="col-6 pb-2">
                                        <label for="image">Upload Image</label>
                                        <input type="file" name="image" id="image" class="form-control">
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
