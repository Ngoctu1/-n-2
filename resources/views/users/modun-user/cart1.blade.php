<div class="card-body">
    
                    @if (count(Cart::content()))
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Price</th>
                                <th scope="col">Total</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (Cart::content() as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->qty }}</td>
                                <td>{{ $item->options->color }}</td>


                                <td>{{ $item->total }}</td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <p>{{ Cart::total() }}</p>
                    @else
                    <div class="alert alert-info text-center m-0" role="alert">
                        Your Cart is <b>empty</b>.
                    </div>
                    @endif