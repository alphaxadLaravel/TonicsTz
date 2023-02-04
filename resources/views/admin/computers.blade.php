@extends('layouts.app')

@section('pages')
<section class="inner-page mt-5">
    <div class="container">
        <div class="row mb-3">
            <div class="col-md-12">
                <h5 class=""><b>Computer Zilizopo:</b></h5>
            </div>
        </div>
        @if (session()->has('success'))
        <div class="alert alert-success fade show" role="alert">
            <strong>Success!</strong> {{ session('success') }}
        </div>
        @endif
        <div class="row">
            @foreach ($computers as $computer)
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="{{asset($computer->picha)}}" style="height: 250px" class="card-img-top" alt="">
                    <div class="card-body">
                        <h6 class="card-title"><b>{{ ucwords($computer->category) }} ({{$computer->brand."
                                ".$computer->generation}})</b> <span
                                class="text-muted"><small>{{$computer->hali}}</small></span></h6>
                        <small class="text-muted">HDD: {{$computer->hdd}} RAM: {{$computer->ram}} </small>
                        <p class="card-text">Tsh {{number_format($computer->price)}}/=</p>
                        <a href="/delete_computer/{{$computer->id}}" class="btn btn-outline-danger btn-sm w-100">Delete
                            Computer</a>
                    </div>
                    <div class="card-footer">
                        <sub>Processor: {{$computer->processor}}</sub>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection