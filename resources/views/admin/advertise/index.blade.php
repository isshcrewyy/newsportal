<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header justify-content-between">
                            <h4>Advertise</h4>
                            <a href="{{ route('admin.advertise.create') }}" class="btn btn-primary">Add New</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Company Name</th>
                                            <th>Image</th>
                                            <th>Link</th>
                                            <th>Expiry Date</th>
                                            <th>Contact</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($advertise as $index => $ad)
                                            <tr>
                                                <td>{{ ++$index }}</td>
                                                <td>{{ $ad->company_name }}</td>
                                                <td>
                                                    <img src="{{ asset($ad->image) }}" height="80" width="80" alt="Advertisement Image">
                                                </td>
                                                <td>{{ $ad->link }}</td>
                                                <td>{{ $ad->expire_date }}</td>
                                                <td>{{ $ad->contact }}</td>
                                                <td>
                                                    <form action="{{ route('admin.advertise.destroy', $ad->id) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <a href="{{ route('admin.advertise.edit', $ad->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                        <button class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
