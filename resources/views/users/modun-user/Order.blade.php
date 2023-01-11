@extends('users.masterUser')

@section('order')
<section>
<div class="container-fluid pt-5">
    @if (session('message'))
    <h1 class="text-primary">{{ session('message') }}</h1>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>

                
                <th>total</th>

                <th>customer_name</th>

                <th>customer_address</th>
                <th>status</th>
                <th>Chi tiet</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($orders as $item)
            <tr>
                <td>{{ $item->order_id }}</td>

                
                <td>${{ $item->grand_total }}</td>


                <td>{{ $item->name }}</td>


                <td>{{ $item->address }}</td>
                

                <td>
                    
                    @if($item->status == 'decline')
                    <a>decline roi</a>
                    @else
                    {{ $item->status }}
                    <a>decline</a>
                    @endif
                    

                </td>
<td><a href="{{route('users.orderdetail',['id' => $item->order_id])}}">chi tiet</a></td>
            </tr>
            @endforeach


        </tbody>

    </table>

    

</div>
</section>
@endsection
@section('script')
<script>
$(function() {

    $(document).on("click", ".btn-cancel", function(e) {
        e.preventDefault();
        let id = $(this).data("id");
        confirmDelete()
            .then(function() {
                $(`#form-cancel${id}`).submit();
            })
            .catch();
    });

});
</script>

@endsection