@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="bg-dark text-secondary px-4 py-4 text-center">
            <div class="py-2">
                <h2 class="display-5 mb-3 fw-bold text-white">{{ $manufacturer->manufacturer }}</h2>
                <div class="col-lg-6 mx-auto">
                    <p class="fs-4 text-white">{{ $manufacturer->origin_country }}</p>
                    <p class="fs-5 text-white">Cars in Stock: <b> {{ $manufacturer->cars->count() }}</b></p>
                    <p class="fs-5 mb-3">{{ $manufacturer->description }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <h3>Available Cars</h3>
        </div>
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Model</th>
                        <th>Year</th>
                        <th>Colour</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($manufacturer->cars as $car)
                        <tr>
                            <td>{{ $car->model }}</td>
                            <td>{{ $car->year }}</td>
                            <td>{{ $car->colour }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <a href="{{ route('home') }}" class="btn btn-sm btn-secondary">Back</a>
        </div>
    </div>
@endsection
