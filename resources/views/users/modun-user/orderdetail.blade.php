@extends('users.masterUser')

@section('orderdetail')
<section>
<div class="container-fluid pt-5">
    @if (session('message'))
    <h1 class="text-primary">{{ session('message') }}</h1>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>

                
                

                <th>image</th>
                <th>Product</th>

                <th>Color</th>
                <th>Size</th>
                
                <th>Quantity</th>
                <th>total</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($orders as $item)
            <tr>
                <td>{{ $item->id }}</td>

                
                


                <td> <img src='/anh/{{$item->prd_image}}' width="120px" height="auto"></td>
                <td>{{ $item->prd_name }}</td>


                <td>{{ $item->prd_color }}</td>
                <td>{{ $item->prd_size }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->price }}</td>

                
            </tr>
            @endforeach


        </tbody>

    </table>

    

</div>
</section>
@endsection
