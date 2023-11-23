@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'tables',
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="row d-flex justify-content-end">
                    <a class="btn btn-info" href="{{ route('page.index', 'client-info') }}">
                        <i class="nc-icon nc-plus"></i>
                        <p>{{ __('Create New') }}</p>
                    </a>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">CLIENTS</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Contact
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach ($clients as $client)
                                        <tr>
                                            <td>
                                                {{ $client->first_name }} {{ $client->last_name }}
                                            </td>
                                            <td>
                                                {{ $client->contact }}
                                            </td>
                                            <td>
                                                {{ $client->email_address }}
                                            </td>
                                            <td class="text-right">
                                                {{ $client->is_active }}
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
@endsection
