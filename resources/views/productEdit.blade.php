<!doctype html>
<html lang="en">
<head>
    <title>Edit product</title>
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
    <h2>Cập nhật sản phẩm</h2>
    <form action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Tên sản phẩm</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" value="{{$product->name}}" name="name">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Thể loại</label>
            <div class="col-sm-10">
                <select name="category_id" id="">
                    @foreach($categories as $key=>$cate)
                        <option @if($cate->id == $product->category_id) selected
                                @endif value="{{$cate->id}}">{{$cate->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Giá tiền</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" value="{{$product->price}}" name="price">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">Hình ảnh hiện tại</div>
            <div class="col-sm-10">
                <div class="form-check">
                    <input type="text" name="oldimage" value="{{$product->image}}" style="display: none">
                    <img src="{{asset('images/'.$product->image)}}" alt="" style="width: 150px;height: 150px">
                </div>
                <div>
                    <b4>Ảnh mới:</b4>
                    <input type="file" id="inputEmail3" name="image">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-success">Cập nhật</button>
                <button type="submit" class="btn btn-danger"
                        onclick="window.history.go(-1); return false;"
                        value="Cancel">Hủy
                </button>
            </div>
        </div>
    </form>
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
