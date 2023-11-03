@extends('welcome')
@section('content')
    <main class="main-wrapper">

        <!-- Start Cart Area  -->
        <div class="axil-product-cart-area axil-section-gap">
            <div class="container">
                <div class="axil-product-cart-wrap">
                    <div class="product-table-heading">
                        <h4 class="title">Your Cart</h4>
                        <a href="#" class="cart-clear">Clear Shoping Cart</a>
                    </div>
                    <?php
                    // $content = Cart::content();
                    //  echo '<pre>';
                    //     print_r($content);
                    // echo '</pre>'
                    
                    //
                    ?>
                    <div class="table-responsive">
                        <?php
                        $content = Cart::content();
                        
                        ?>
                        <table class="table axil-product-table axil-cart-table mb--40">

                            <thead>
                                <tr>

                                    <th scope="col" class="product-thumbnail">Ảnh</th>
                                    <th scope="col" class="product-title">Tên sản phẩm</th>
                                    <th scope="col" class="product-price">Giá</th>
                                    <th scope="col" class="product-quantity">Số lượng</th>
                                    <th scope="col" class="product-size">size</th>
                                    <th scope="col" class="product-subtotal">Subtotal</th>
                                    <th scope="col" class="product-remove">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($content as $item)
                                    <tr>

                                        <td class="product-thumbnail"><img src="{{ asset($item->options->images) }}"
                                                alt="Digital Product"></td>
                                        <td class="product-title"><a href="single-product.html">{{ $item->name }}</a></td>
                                        <td class="product-price" data-title="Price">
                                            {{ number_format($item->price, 0, ',', '.') }}<span
                                                class="currency-symbol">VNĐ</span></td>
                                        <td class="product-quantity" data-title="Số lượng">
                                            <div class="" data-title="Số lượng">
                                                <form action="{{ URL::to('update-cart-qty') }}" method="post">
                                                    @csrf
                                                    <input type="number" name="cart_qty" class="quantity-input"
                                                        value="{{ $item->qty }}">
                                                    <input type="hidden" value="{{ $item->rowId }}" name="rowId_cart">
                                        <td class="product-remove"><input type="submit" value="Cập nhật"
                                                name="update_qty"></a></td>
                                        </form>
                    </div>
                    </td>
                    <td class="product-quantity" data-title="Size">
                        <div class="">
                            <input type="number" class="quantity-input" value="{{ $item->options->size }}">
                        </div>
                    </td>

                    <td class="product-subtotal" data-title="Subtotal">
                        <?php
                        $subtotal = $item->price * $item->qty;
                        echo number_format($subtotal, 0, ',', '.');
                        ?>
                        <span class="currency-symbol">VNĐ</span>
                    </td>
                    <td class="product-remove"><a href="{{ URL::to('delete-cart-item/' . $item->rowId) }}"
                            class="remove-wishlist" onclick="return confirm('Bạn có muốn xóa danh mục này không?')"><i
                                class="fal fa-times"></i></a></td>


                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
                <div class="cart-update-btn-area">
                    <div class="input-group product-cupon">
                        <input placeholder="Enter coupon code" type="text">
                        <div class="product-cupon-btn">
                            <button type="submit" class="axil-btn btn-outline">Apply</button>
                        </div>
                    </div>
                    <div class="update-btn">
                        <a href="#" class="axil-btn btn-outline">Update Cart</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-5 col-lg-7 offset-xl-7 offset-lg-5">
                        <div class="axil-order-summery mt--80">
                            <h5 class="title mb--20">Tổng hóa đơn</h5>
                            <div class="summery-table-wrap">
                                <table class="table summery-table mb--30">
                                    <tbody>
                                        <tr class="order-subtotal">
                                            <td>Tổng</td>
                                            <td>{{ Cart::priceTotal(0, ',', '.') . '' . 'VND' }}</td>
                                        </tr>
                                        <tr class="order-shipping">
                                            <td>Phí vận chuyển</td>
                                            <td>
                                                <label for="radio1">Free Shippping</label>
                                            </td>
                                        </tr>
                                        <tr class="order-tax">
                                            <td>Thuế</td>
                                            <td>{{ Cart::tax(0, ',', '.') . '' . 'VND' }}</td>
                                        </tr>
                                        <tr class="order-total">
                                            <td>Thành tiền</td>
                                            <td class="order-total-amount">{{ Cart::total(0, ',', '.') . '' . 'VND' }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <?php
								$customer_id = Session::get('id_user');
								if($customer_id==null){
									?>
                            <a href="{{ URL::to('login_acc') }}" class="axil-btn btn-bg-primary checkout-btn">Login</a>
                            <?php
							} else {?>
                            <a href="{{ URL::to('payment_show') }}" class="axil-btn btn-bg-primary checkout-btn">Thanh
                                toán</a>
                            <?php
								}
								?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- End Cart Area  -->

    </main>
@endsection
