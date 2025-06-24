@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-3">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Product Information
                </div>
                <div class="float-end">
                    <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                <div class="row mb-2">
                    <label class="col-md-4 col-form-label text-md-end text-start"><strong>Code:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $product->code }}
                    </div>
                </div>

                <div class="row mb-2">
                    <label class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $product->name }}
                    </div>
                </div>

                <div class="row mb-2">
                    <label class="col-md-4 col-form-label text-md-end text-start"><strong>Quantity:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $product->quantity }}
                    </div>
                </div>

                <div class="row mb-2">
                    <label class="col-md-4 col-form-label text-md-end text-start"><strong>Price:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $product->price }}
                    </div>
                </div>

                <div class="row mb-2">
                    <label class="col-md-4 col-form-label text-md-end text-start"><strong>Description:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $product->description }}
                    </div>
                </div>

                @if ($product->filelink)
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end text-start"><strong>Image:</strong></label>
                    <div class="col-md-6">
                        <img src="{{ asset( $product->filelink) }}" class="img-fluid" style="max-height: 1000px; max-width: 100%;" alt="Product Image">
                    </div>
                </div>
                @endif

            </div>
        </div>
    </div>
</div> 
@endsection
