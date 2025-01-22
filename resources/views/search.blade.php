@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="bg-dark text-secondary px-4 py-4 text-center">
            <div class="py-2">
                <h2 class="display-5 mb-3 fw-bold text-white">Search Cars</h2>
                <form method="GET" action="{{ route('search.results') }}">
                    <div class="form-group mb-3">
                        <input type="text" id="search" name="search" required class="form-control"
                            value="{{ $query ?? '' }}" placeholder="Type a manufacturer, model, colour or year">
                    </div>
                    <button type="submit" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Go</button>
                    <a href="{{ route('home') }}" class="btn btn-outline-light btn-lg px-4">Back</a>
                </form>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        @if ($query)
            <div class="col-md-12">
                <h2>Search Results for "{{ $query }}"</h2>
                @if ($cars->isEmpty())
                    <p>No cars found matching your query.</p>
                @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Manufacturer</th>
                                <th>Model</th>
                                <th>Year</th>
                                <th>Colour</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cars as $car)
                                <tr>
                                    <td>{{ $car->manufacturer->manufacturer ?? 'Unknown' }}</td>
                                    <td>{{ $car->model }}</td>
                                    <td>{{ $car->year }}</td>
                                    <td>{{ $car->colour }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
            <div class="col-md-4">
                <a href="{{ route('home') }}" class="btn btn-sm btn-secondary">Back</a>
            </div>
        @endif
    </div>
@endsection
