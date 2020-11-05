@extends('layouts.app')

@section('content')
<div class="container-fluid">
   <div class="">
       <div class="mx-auto" style="max-width:1200px">
           <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">商品一覧</h1>
           <div class="">
               <div class="d-flex flex-row flex-wrap">
                   
                    @foreach($products as $products)
                        <div class="col-xs-6 col-sm-4 col-md-4">
                            <div class="mycart_box">
                                {{$products->name}}<br>
                                {{$products->fee}}円<br>
                                <img src="{{$products->imgpath}}" alt="" class="incart" width="200px" height="200px"><br>
                                {{$products->detail}}<br>

                                <form action="mycart" method="post">
                                    @csrf
                                    <input type="hidden" name="products_id" value="{{ $products->id }}">
                                    <input type="submit" value="カートにいれる">
                                </form>
                            </div>
                        </div>
                    @endforeach
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
