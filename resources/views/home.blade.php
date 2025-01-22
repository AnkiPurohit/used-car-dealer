@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="bg-dark text-secondary px-4 py-4 text-center">
            <div class="py-2">
                <h2 class="display-5 fw-bold text-white">Looking for a particular car?</h2>
                <div class="col-lg-6 mx-auto">
                    <p class="display-6 text-white">Search our
                        inventory </p>
                    <div>
                        <a class="btn btn-outline-info btn-lg px-4" href="{{ route('search') }}">here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        @foreach ($manufacturers as $manufacturer)
            <div class="col-md-4  p-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $manufacturer->manufacturer }}</h5>
                        <p>Country: {{ $manufacturer->origin_country }}</p>
                        <p>Cars in Stock: {{ $manufacturer->cars_count }}</p>
                        <a href="{{ route('manufacturer.detail', $manufacturer->id) }}"
                            class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- Pagination Links -->
    <div class="d-flex justify-content-center mt-4">
        {{ $manufacturers->links('pagination::bootstrap-4') }}
    </div>
@endsection
