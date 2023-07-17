<a href="orderForm">Back</a>
<div class="cart" data-url="{{ route('deleteCart') }}">
    <div class="container">
        <div class="row">
            <table class="table table-hover updateCartUrl" data-url="{{ route('updateCart') }}">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price(VND)</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Sub Total</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $total = 0;

                    @endphp
                    @foreach ($carts as $id => $cartItem)
                        @php
                            $total += $cartItem['price'] * $cartItem['quantity'];
                        @endphp
                        <tr>
                            <th scope="row">{{ $id }}</th>
                            <td>
                                <img style="width: 200px;height: 100px"
                                    src="{{ asset($cartItem['image']) }}"alt="">
                            </td>
                            <td>{{ $cartItem['name'] }}</td>
                            <td>{{ number_format($cartItem['price']) }}</td>
                            <td><input type="number" value="{{ $cartItem['quantity'] }}" min="1"
                                    class="quantity"></td>
                            <td>{{ number_format($cartItem['price'] * $cartItem['quantity']) }}</td>
                            <td>
                                <a href="" data-id="{{ $id }}"
                                    class="btn btn-primary cart_update">Update</a>
                                <a href="" data-id="{{ $id }}"
                                    class="btn btn-danger cart_delete">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="col-md-12">
                <h2>Total: {{ number_format($total) }} VND</h2>
            </div>
        </div>
    </div>
</div>
