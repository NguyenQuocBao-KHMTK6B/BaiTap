@extends('adminform')

@section('listproduct')

<style>
    .table-image {
        width: 50px; /* hoặc kích thước bạn muốn */
        height: auto; /* đảm bảo tỉ lệ hình ảnh không thay đổi */
    }
</style>

<div class="panel-body">
    <div class="col-md-12 w3ls-graph">
        <!--agileinfo-grap-->
        <div class="agileinfo-grap">
            <div class="agileits-box">
                <header class="agileits-box-header clearfix">
                    <h3>List Products</h3>
                    <div class="toolbar">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID Products</th>
                                        <th class="text-center">ID Category</th>
                                        <th class="text-center">ID Band</th>
                                        <th class="text-center">Title</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Discount</th>
                                        <th class="text-center">Images</th>
                                        <th class="text-center">Description</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($listproducts as $product)
                                    <tr>
                                        <td class="text-left">{{ $product->product_id }}</td>
                                        <td class="text-left">{{ $product->category_id }}</td>
                                        <td class="text-left">{{ $product->band_id }}</td>
                                        <td class="text-left">{{ $product->title }}</td>
                                        <td class="text-left">{{ $product->price }}</td>
                                        <td class="text-left">{{ $product->discount }}</td>
                                        <td class="text-left"><img src="{{ $product->images }}" alt="Image" class="table-image"></td>
                                        <td class="text-left">{{ $product->description }}</td>
                                        <td class="center">
                                            <a href="{{ route('admin.deleteProduct', ['id' => $product->product_id]) }}" class="btn btn-danger"><i class="fa fa-trash-o fa-fw"></i> Delete</a>
                                            <a href="{{ route('admin.editProduct', ['id' => $product->product_id]) }}" class="btn btn-primary"><i class="fa fa-pencil fa-fw"></i> Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </header>
    
                <div class="agileits-box-body clearfix">
                    {{ $listproducts->links() }} <!-- Hiển thị các liên kết phân trang -->
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
