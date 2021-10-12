<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
@include('navbar')

<div class="container">
    <table class="table">
        <a href="{{route('product.index')}}"><h2>Danh sách đồ uống</h2></a>
        <thead class="thead-dark">
        <tr>
            <th scope="col"><a class="btn btn-primary" href="{{route('product.create')}}">Thêm mới</a></th>
            <th scope="col">Tên đồ uống</th>
            <th scope="col">Ảnh</th>
            <th scope="col">Giá</th>
            <th>Loại đồ uống</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @forelse($products as $key=>$product)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <th scope="row">{{$product->name}}</th>
                <th scope="row"><img src="{{asset('images/'.$product->image)}}" style="height: 100px;width: 100px"></th>
                <th scope="row">{{$product->price}}</th>
                <th scope="row">{{$product->category->name}}</th>
                <th scope="row">
                    <a class="btn btn-warning" href="{{route('product.edit',$product->id)}}">Sửa</a>
                    <a class="btn btn-danger" href="{{route('product.delete',$product->id)}}" onclick="return confirm('Are you sure you want to delete this item?');">Xóa</a>
                </th>

            </tr>
        @empty
            <tr>
                <td colspan="6" class="textarea-center">
                    <h4>Không tồn tại đồ uống bạn muốn tìm</h4>
                </td>
            </tr>
        @endforelse
        {!! $products->links() !!}
        </tbody>
    </table>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
