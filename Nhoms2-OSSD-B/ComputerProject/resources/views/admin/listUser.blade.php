@extends('adminform')

@section('listUser')

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
                    <h3>List User</h3>
                    <div class="toolbar">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID </th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Role</th>                                     
                                        <th class="text-center">password</th>                                   
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($listusers as $user)
                                    <tr>
                                        <td class="text-left">{{ $user->id }}</td>
                                        <td class="text-left">{{ $user->name }}</td>
                                        <td class="text-left">{{ $user->email }}</td>
                                        <td class="text-left">{{ $user->role }}</td>
                                        <td class="text-left">{{ $user->password }}</td>
                                    
                                        <td class="center">
                                            <a href="{{ route('admin.deleteProduct', ['id' => $user->id]) }}" class="btn btn-danger"><i class="fa fa-trash-o fa-fw"></i> Delete</a>
                                            <a href="{{ route('admin.editProduct', ['id' => $user->id]) }}" class="btn btn-primary"><i class="fa fa-pencil fa-fw"></i> Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </header>
    
                <div class="agileits-box-body clearfix">
                    {{ $listusers->links() }} <!-- Hiển thị các liên kết phân trang -->
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
