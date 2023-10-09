@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Be Corporate Partner</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Be Corporate Partner Requests</li>

                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">List Corporate Partner Requests</h3>
                            </div>
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover table-responsive-sm">
                                    <thead>
                                    <tr>
                                        <th>Company Name</th>
                                        <th>Email</th>
                                        <th>Contact Number</th>
                                        <th>Trade Licence</th>
                                        <th>Created Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($BeOurCorporatePartners as $data)
                                        <tr>
                                            <td>{{ $data->company_name }} </td>
                                            <td>{{ $data->email }}</td>
                                            <td> + {{ $data->country_code }} {{ $data->mobile }}</td>
                                            <td> <a href="{{ asset('/Be-Our-Corporate-Partner/'. $data->file ) }}" title="Click Here To View File" target="_blank"> {{ $data->file }} </a>  </td>

                                            <td>{{ \Illuminate\Support\Carbon::parse($data->created_at)->format('d M y')  }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('scripts')
    <script>
        $('#example2').DataTable({
        });

    </script>
@endpush
