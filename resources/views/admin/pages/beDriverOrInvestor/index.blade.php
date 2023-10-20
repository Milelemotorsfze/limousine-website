@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Be Driver Or Investor</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Be Driver Or Investor</li>

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
                                <h3 class="card-title">List Driver Or Investor Requests</h3>
                            </div>
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover table-responsive-sm">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Contact Number</th>
                                        <th>Vehicle</th>
                                        <th>Passport Or Visa Copy</th>
                                        <th>Driver License</th>
                                        <th>Created Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datas as $data)
                                        <tr>
                                            <td>{{ $data->name }} </td>
                                            <td>{{ $data->email }}</td>
                                            <td>{{ $data->country_code }} {{ $data->number }}</td>
                                            <td>{{ $data->vehicle }}</td>
                                            <td>
                                                <a href="{{ asset('/Be-Our-RSL-Driver/passport-or-visa/'. $data->passport_or_visa_copy) }}" target="_blank"
                                                title="Click Here to View">
                                                    {{ $data->passport_or_visa_copy }}
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{ asset('/Be-Our-RSL-Driver/driving-licence/'. $data->driver_license) }}" target="_blank"
                                                   title="Click Here to View">
                                                    {{ $data->driver_license }}
                                                </a>
                                            </td>
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
