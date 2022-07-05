<center>
<h1>My Cart</h1>
<table class="table table-striped">
    <thead>
        <th>#</th>
        <th>cake Info</th>
        <th>Cake Image</th>
        <th>Price</th>
        <th>Buy Now</th>
        <th>Delete</th>
    </thead>    
    <tbody>
        @php 
            $i=1;
        @endphp
        @foreach($items as $item)
        <tr>
            <td>{{$i}}{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td><img src="{{$item->image}}" style="height:100px;width:100px;"></td>
            <td><span style="background-color: lightgreen;color:green;font-weight:bold;border-radius:2px;padding:5px">{{$item->cost}}</span></td>
            <td> 
                <a href="{{url('buy-now/'.$item->cake_id.'/'.$item->cart_id)}}">
                    <button class="btn btn-success">Buy Now</button></td>
                </a>
            <td>
                <form action="{{url('delete-item')}}" method="post">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" name="cart_id" value="{{$item->id}}">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @php 
            $i++;
        @endphp
        @endforeach
    </tbody>
</table>
</center>