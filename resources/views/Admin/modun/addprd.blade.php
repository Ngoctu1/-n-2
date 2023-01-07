@extends('Admin.master')

@section('addprd')

<div class="card" style="float: right; width: 72%; margin-right: 7%">
    <div class="card-body">
        <div style="box-sizing: border-box;">
        <h4 class="card-title">Add Product</h4>
        <br>
</div>
        <form method="post" action="{{route('admin.prd_add')}}" class="forms-sample">
            <div class="row">
                <div class="col">
                    @csrf
                    

                    <div class="form-group">
                        <label for="exampleInputUsername1">Product name</label>
                        <input type="text" name="prd_name" class="form-control" id="exampleInputUsername1"
                            value="" placeholder="name">


                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Example multiple select</label>
                        <select class="form-control" id="example FormControlSelect2" name="cat_id">
                            <option value="1" >Adidas</option>
                            <option value="2" >Nike</option>
                            <option value="3" >Puma</option>
                            <option value="4" >Yeezy</option>

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Color</label>
                        <input type="text" name="prd_color" class="form-control" id="exampleInputEmail1"
                            value="" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="number" name="prd_price" class="form-control" id="exampleInputEmail1"
                            value="" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Amount</label>
                        <input type="number" name="prd_amount" class="form-control" id="exampleInputPassword1"
                            value="" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Size</label>
                        <input type="number" name="prd_size" class="form-control" id="exampleInputPassword1"
                            value="">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Detail</label>
                        <textarea type="text" name="prd_details" class="form-control" id="" value=""
                            style="height: 10rem ;"> </textarea>
                    </div>

                    <div class="form-group">
                        <label>Ảnh sản phẩm</label>
                        <input type="file" name="prd_image" onchange="preview();">
                        <img id="prd_image" width="auto" height="170px"
                                    src="/anh/noimg.jpg">
                        

                    </div>
                    <div class="form-group">
                        <label for="">prd_sale</label>
                        <input type="number" name="prd_sale" class="form-control" id="" value=""
                            placeholder="%" style="width: 65px; margin-right:0;">
                    </div>
                    <button type="submit" href="{{route('admin.prd_add')}}" class="btn btn-light"
                        style="background-color: #c4f0c4; color: black">Edit</button>
                    <a href="" class="btn btn-light" style="background-color: #f85766; color: black">Delete</a>

                </div>
            </div>
        </form>
    </div>
</div>
<script>
function preview() {
    prd_image.src = URL.createObjectURL(event.target.files[0]);
}
</script>
@stop