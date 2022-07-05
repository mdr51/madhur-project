<header id="header-top" class="bg_color_a">
<div class="header-mobile">
<ul id="menu-dropdown" class="inline-list left">
<li><a href="index.html" class="company-name"><img alt="JJ Bakers" class="mobile-logo-img" src="{{url('')}}/s3-ap-southeast-1.amazonaws.com/assets.limetray.com/assets/user_images/logos/original/1472820841_Logo.png" /></a></li>
</ul>
<ul class="inline-list right">
<li class="order-btn"><a href="order-online/index.html" class="nav-button font_2">Order Now</a></li>                            <li class="menu-btn"><a href="#" class="right-off-canvas-toggle"><i class="fa fa-3x fa-reorder"></i></a></li>
</ul>
</div>
<div class="header-wrapper clearfix">
<div class="nav-left header-nav large-5 columns">
<ul class="nav-list">
<li class="active"><a href="{{url('/')}}" class="nav-button">Home</a></li>
<li class=""><a href="{{url('/about-us')}}" class="nav-button">About Us</a></li>
<li class=""><a href="{{url('/customise')}}" class="nav-button">Customise</a></li>
</ul>
</div>
<div class="header-logo header-nav large-12 columns">
<a href="index.html"><img alt="JJ Bakers" class="logo-img" src="{{url('')}}/s3-ap-southeast-1.amazonaws.com/assets.limetray.com/assets/user_images/logos/original/1472820841_Logo.png" /></a>

</div>

@php

if(session()->has('user')){
    $user_id = session()->get('user')->id;
    $items = \Illuminate\Support\Facades\DB::table('carts')->where('user_id',$user_id)->get(); 
    $count_items = count($items);
}

@endphp

<div class="nav-right header-nav large-5 columns">
<ul class="nav-list">
<li class=""><a href="{{url('/faq')}}" class="nav-button">faq</a></li>
@if(!session()->has('user') and basename(url()->current())!='login')
<li class=""><a href="{{url('/login')}}" class="nav-button">Login</a></li>
@endif
<li class=""><a href="{{url('/locate-us')}}" class="nav-button">Locate Us</a></li>
@if(session()->has('user') and basename(url()->current())!='login')
<li class=""><a href="{{url('mycart')}}" class="nav-button">Cart({{$count_items}})</a></li>
@else
<li class=""><a href="{{url('/order-online')}}" class="nav-button">Order Online</a></li>
@endif
</ul>
</div>
</div>
</header>