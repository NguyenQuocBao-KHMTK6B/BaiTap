@extends('adminform')
@section('addUser')
@if(session('Note'))
<div class="alert alert-success">
    {{ session('Note') }}
</div>
@endif

<form action="addUser" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <div class="mb-3">
            <label for="" class="form-label">ID</label>
            <input
                type="text"
                class="form-control"
                name="id"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input
                type="text"
                class="form-control"
                name="name"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
        </div>
        

        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input
                type="text"
                class="form-control"
                name="email"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Role</label>
            <input
                type="text"
                class="form-control"
                name="role"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input
                type="text"
                class="form-control"
                name="password"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
        </div>

    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-info" name="btInsert">add</button>
    </div>
</form>

@endsection
