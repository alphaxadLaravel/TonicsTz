@extends('layouts.app')

@section('pages')
<section class="inner-page mt-5">
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-md-12">
                <h5 class=""><b>Waliofanya Malipo:</b></h5>
            </div>
        </div>
        @if (session()->has('success'))
        <div class="alert alert-success fade show" role="alert">
            <strong>Success!</strong> {{ session('success') }}
        </div>
        @endif
        <div class="row">
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Region</th>
                        <th scope="col">Street</th>
                        <th scope="col">Computer</th>
                        <th scope="col">Price</th>
                        <th scope="col">Phone</th>
                        {{-- <th scope="col">Method</th> --}}
                        <th scope="col">Date Payed</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($payments as $payment)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td><b>{{ucwords($payment->user->username)}}</b></td>
                            <td>{{ucwords($payment->mkoa)}}</td>
                            <td>{{ucwords($payment->mahali)}}</td>
                            <td>{{ucwords($payment->computer->brand." ".$payment->computer->generation)}}</td>
                            <td>{{number_format($payment->computer->price)}}</td>
                            <td>{{ucwords($payment->Phone)}}</td>
                            {{-- <td>{{ucwords($payment->payment)}}</td> --}}
                            <td>
                                {{date('d M Y', strtotime($payment->created_at))}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection