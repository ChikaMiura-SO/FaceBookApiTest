@extends('layouts.app')

@section('content')
<div class="container-fluid">
   <div class="">
       <div class="mx-auto" style="max-width:1200px">
           <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">{{ Auth::user()->name }}さんのカートの中身</h1>           

               <div class="">
                <p class="text-conter">{{ $message ?? '' }}</p><br>
                <div class="d-flex flex-row flex-wrap">
                    @foreach($my_carts as $my_cart)
                        <div class="mycart-box">
                            {{ optional($my_cart->product)->name }}<br>
                            {{ number_format(optional($my_cart->product)->fee ) }}円 <br>
                                <img src="/image/{{ optional($my_cart->product)->imgpath }}" alt="" class="incart">
                                <br>

                                <form action="/cartdelete" method="post">
                                    @csrf
                                    <input type="hidden" name="products_id" value="{{ optional($my_cart->product)->id }}">
                                    <input type="submit" value="カートから削除する">
                                </form>
                        </div>
                    @endforeach
               </div>

               <a href="/">商品一覧へ</a>
           </div>
       </div>
   </div>
</div>
@endsection
