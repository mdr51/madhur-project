<center>
    <h1>Complete Order Form</h1>
    <table class="table table-border">
        <thead>
            <tr>
            <th>Product Info</th>
            <th>Order Form</th>
            </tr>
        </thead>
        <tbody>  
            <td>     
            <table class="table table-striped">
            <tbody>
                <tr>
                    <th>Cake Name</th>
                    <td>{{$cake->name}}</td>
                </tr>
                <tr>
                    <th>Cake Image</th>
                    <td><img src="{{$cake->image}}" style="height:100px;width:100px;"></td>
                </tr>
                <tr>
                    <th>Cake Description</th>
                    <td>{{$cake->description}}</td>
                </tr>
                <tr>
                    <th>Cake price</th>
                    <td>{{$cake->cost}}</td>
                </tr>
            </tbody>
            </table>
            </td>
            <td>     
            <table class="table table-striped">
            <tbody>
                <form action={{url('placeorder')}} method="post">
                @csrf
                <input type="hidden" value="{{$cake->id}}" name="cake_id" readonly>
                <input type="hidden" value="{{Request::segment(3)}}" name="cart_id" readonly>
                <tr>
                    <th>User Name</th>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <th>User Mobile</th>
                    <td><input type="text" name="mobile" required></td>
                </tr>
                <tr>
                <th>User Address</th>
                    <td><textarea name="address" required></textarea></td>
                </tr>
                <tr>
                    <th>Cake price</th>
                    <td><input type="text" name="cost" required value="{{$cake->cost}}" readonly></td>
                </tr>

                <tr>
                    <th>PinCode</th>
                    <td><input type="number" name="pincode" required></td>
                </tr>

                <tr>
                    <th>Proceed With Order</th>
                    <td><button type="submit"  class="btn btn-success">Order Now</button></td>
                </tr>
                </form>
            </tbody>
            </table>
            </td>
        </tbody>
    </table>
</center>