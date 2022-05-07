 <!-- OffCanvas Cart Start -->
 <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
    <div class="inner">
        <div class="head">
            <span class="title">Cart</span>
            <button class="offcanvas-close">×</button>
        </div>
        <div class="body customScroll">

        </div>
        <div class="foot">
            <div class="sub-total">
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="text-start">Sub-Total :</td>
                            <td class="text-end">$523.30</td>
                        </tr>
                        <tr>
                            <td class="text-start">Eco Tax (-2.00) :</td>
                            <td class="text-end">$4.52</td>
                        </tr>
                        <tr>
                            <td class="text-start">VAT (20%) :</td>
                            <td class="text-end">$104.66</td>
                        </tr>
                        <tr>
                            <td class="text-start">Total :</td>
                            <td class="text-end theme-color">$632.48</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="buttons">
                <a href="cart.html" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                <a href="checkout.html" class="btn btn-outline-dark current-btn">checkout</a>
            </div>
            <p class="minicart-message">Free Shipping on All Orders Over $100!</p>
        </div>
    </div>
</div>
<!-- OffCanvas Cart End -->

<!-- OffCanvas Menu Start -->
<div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
    <button class="offcanvas-close"></button>
    <div class="inner customScroll">

        <div class="offcanvas-menu mb-20px">
            <ul>
                <li ><a href="{{ route('home') }}"><span class="menu-text">Home</span></a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#"><span class="menu-text">Shop</span></a>
                    <ul class="sub-menu">
                        <li>

                        </li>
                    </ul>
                </li>
                <li><a href="{{ route('contact_us')}}">Contact us</a></li>
            </ul>
        </div>
        <!-- OffCanvas Menu End -->

        <!-- Language Currency End -->
        <div class="offcanvas-social mt-auto">
            <ul>
                <li>
                    <a href="#"><i class="ion-social-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="ion-social-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="ion-social-google"></i></a>
                </li>
                <li>
                    <a href="#"><i class="ion-social-youtube"></i></a>
                </li>
                <li>
                    <a href="#"><i class="ion-social-instagram"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- OffCanvas Menu End -->


<div class="offcanvas-overlay"></div>
