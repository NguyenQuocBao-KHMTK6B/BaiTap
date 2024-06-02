@extends('adminform')
@section('addproduct')
@if(session('Note'))
<div class="alert alert-success">
    {{ session('Note') }}
</div>
@endif

<form action="addProduct" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <div class="mb-3">
            <label for="" class="form-label">ID Product</label>
            <input
                type="text"
                class="form-control"
                name="product_id"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Category ID</label>
            <input
                type="text"
                class="form-control"
                name="category_id"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
        </div>

        <div class="mb-3">
            <label for="" class="form-label">band ID</label>
            <input
                type="text"
                class="form-control"
                name="band_id"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
        </div>
        

        <div class="mb-3">
            <label for="" class="form-label">Title</label>
            <input
                type="text"
                class="form-control"
                name="title"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Price</label>
            <input
                type="text"
                class="form-control"
                name="price"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Discount</label>
            <input
                type="text"
                class="form-control"
                name="discount"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Description</label>
            <textarea
                class="form-control"
                name="description"
                id=""
                rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Choose Image</label>
            <input
                type="file"
                class="form-control"
                name="images"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
        </div>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-info" name="btInsert">Insert</button>
    </div>
</form>

@endsection
