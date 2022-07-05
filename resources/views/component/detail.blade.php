<center>
<h2>Cake Details</h1>
<hr/>
<img src="{{$cake->image}}" style="height:200px;width:200px;border:5px dashed red;">
<p>
    <b>Cake Name : {{$cake->name}}</b>
</p>
<p>
<b>Cake Details :  {{$cake->description}}</b>
</p>
<p>
<b>Price :  {{$cake->cost}}</b>
</p>
<p>
    <a href="{{url('add-to-cart/'.$cake->id)}}">
        <button class="btn btn-info">
        Add to cart
        </button>
    </a>
    <a href="{{url('buy-now/'.$cake->id)}}">
        <button class="btn btn-info">
            Buy Now    
        </button>
    </a>
</p>
</center>