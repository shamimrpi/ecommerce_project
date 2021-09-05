@extends('frontend.master')
@section('main_content')
<div class="u-s-p-b-60">
    <div class="mycart">
        <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-60">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary">SHOPPING CART</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->


                <!--====== Section Content ======-->
                <div class="section__content" >
                    <div class="container">
                    <form id="cart_update_form" action="{{ route('cart.update') }}" method="get">
                        <div class="row" style="background: #fff; padding: 10px">

                            <div class="col-lg-12 col-md-12 col-sm-12 u-s-m-b-30">
                                <div class="table-responsive">

                                    <table class="table-p">
                                        <tbody>
                                            @foreach($carts as $key=>$cart)
                                            <!--====== Row ======-->
                                            <tr>
                                                <td>
                                                    <div class="table-p__box">
                                                        <div class="table-p__img-wrap">

                                                            <img class="u-img-fluid" src="{{ asset('public/frontend/products/images/'.$cart->product->image) }}" alt="Product image"></div>
                                                        <div class="table-p__info">

                                                            <span class="table-p__name">

                                                                <a href="product-detail.html">{{ $cart->product->name }}</a></span>

                                                            <span class="table-p__category">

                                                                <a href="shop-side-version-2.html">Electronics</a></span>
                                                            <ul class="table-p__variant-list">
                                                                <li>

                                                                    <span>Size: 22</span></li>
                                                                <li>

                                                                    <span>Color: Red</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>

                                                    <span class="table-p__price">{{ $cart->price }}</span></td>
                                                <td>
                                                    <div class="table-p__input-counter-wrap">

                                                        <!--====== Input Counter ======-->
                                                        <div class="input-counter">
                                                            <input class="input-counter__text input-counter--text-primary-style" type="hidden" value="{{ $cart->price }}" name="price[]" id="price" >

                                                            <span class="input-counter__minus fas fa-minus"></span>
                                                           <input class="input-counter__text input-counter--text-primary-style" type="hidden" value="{{ $cart->id }}" data-min="1" name="id[]" id="qty" data-max="1000">
                                                            <input class="input-counter__text input-counter--text-primary-style" type="text" value="{{ $cart->qty }}" data-min="1" name="qty[]" id="qty" data-max="1000">

                                                            <span class="input-counter__plus fas fa-plus"></span></div>
                                                        <!--====== End - Input Counter ======-->
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-p__del-wrap">

                                                        <a class="far fa-trash-alt table-p__delete-link" href="{{ route('cart.delete',$cart->id) }}"></a></div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            <!--====== End - Row ======-->


                                            <!--====== Row ======-->
                                           
                                            <!--====== End - Row ======-->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="route-box">
                                    <div class="route-box__g1">

                                        <a class="route-box__link" href="shop-side-version-2.html"><i class="fas fa-long-arrow-alt-left"></i>

                                            <span>CONTINUE SHOPPING</span></a></div>
                                    <div class="route-box__g2">

                                        <a class="route-box__link" href="cart.html"><i class="fas fa-trash"></i>

                                            <span>CLEAR CART</span></a>

                                        <button class="route-box__link" type="submit" id="update_form"><i class="fas fa-sync"></i>

                                            <span>UPDATE CART</span></button></div>
                                </div>
                            </div>
                        </div>
                        </form>

                    </div>
                </div>
    </div>
    <br/>
                
                <!--====== End - Section Content ======-->
</div>
            <!--====== End - Section 2 ======-->
            <!--====== End - Section 2 ======-->       
@endsection
@section('scripts')

@endsection
  

