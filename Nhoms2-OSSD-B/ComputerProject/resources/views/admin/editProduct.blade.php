@extends('adminform')

@section('editProduct')
@if(session('Note'))
<div class="alert alert-success">
    {{ session('Note') }}
</div>
@endif

<form action="{{ route('admin.updateProduct') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="product_id" value="{{ $product->product_id }}"/>
    <div>
        <div class="mb-3">
            <label for="" class="form-label">ID Product</label>
            <input
                type="text"
                class="form-control"
                name="product_id"
                id=""
                value="{{ $product->product_id }}"
                disabled
            />
        </div>
        <div class="mb-3">
            <label for="" class="form-label">ID Categories</label>
            <input
                type="text"
                class="form-control"
                name="category_id"
                id=""
                value="{{ $product->category_id }}"
            />
        </div>

        <div class="mb-3">
            <label for="" class="form-label">ID Band</label>
            <input
                type="text"
                class="form-control"
                name="band_id"
                id=""
                value="{{ $product->band_id }}"
            />
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Title</label>
            <input
                type="text"
                class="form-control"
                name="title"
                id=""
                value="{{ $product->title }}"
            />
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Price</label>
            <input
                type="text"
                class="form-control"
                name="price"
                id=""
                value="{{ $product->price }}"
            />
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Discount</label>
            <input
                type="text"
                class="form-control"
                name="discount"
                id=""
                value="{{ $product->discount }}"
            />
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Images</label>
            <input
                type="file"
                class="form-control"
                name="images"
                id=""
            />
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Description</label>
            <textarea
                class="form-control"
                name="description"
                id=""
                rows="3"
            >{{ $product->description }}</textarea>
        </div>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-info" name="btUpdate">Update</button>
    </div>
    
</form>
@endsection
