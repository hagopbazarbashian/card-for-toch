@extends('layout.app-shop')
@section('title'){{ 'Checkout'}}@endsection
@section('home')
<style>
.containerr{
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande", "Lucida Sans", Arial, sans-serif;
    font-size: 80%;
    font-weight: 700;
    margin-bottom: 8rem;
    gap: 2rem;
    padding: 0px 20px;
}
</style>
<div class="iq-breadcrumb" style="background-image: url({{ asset('productimages/'.$newproduct->photo) }});">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <nav aria-label="breadcrumb" class="text-center">
                    <h2 class="title">Checkout</h2>
                </nav>
            </div>
        </div> 
    </div>
</div>  

<div class="checkout-page  section-padding">
<div class="containerr">
    <div class="main-cart mb-3 mb-md-5 pb-0 pb-md-5">
        <ul class="cart-page-items d-flex justify-content-center list-inline align-items-center gap-3 gap-md-5 flex-wrap">
            <li class="cart-page-item">
                <span class="cart-pre-number border-radius rounded-circle me-1"> 1 </span>
                <span class="cart-page-link"> Shopping Cart </span>
            </li>
            <li class="cart-page-item">
                <svg width="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </li>
            <li class="cart-page-item active">
                <span class="cart-pre-heading badge cart-pre-number  border-radius rounded-circle me-1" style="background-color: #68b7e2;"> 2 </span>
                <span class="cart-page-link"> Checkout </span>
            </li>
            <li class="cart-page-item">
                <svg width="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21.2498C17.108 21.2498 21.25 17.1088 21.25 11.9998C21.25 6.89176 17.108 2.74976 12 2.74976C6.892 2.74976 2.75 6.89176 2.75 11.9998C2.75 17.1088 6.892 21.2498 12 21.2498Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M10.5576 15.4709L14.0436 11.9999L10.5576 8.52895" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </li>
            <li class="cart-page-item">
                <span class="cart-pre-number border-radius rounded-circle me-1"> 3 </span>
                <span class="cart-page-link"> Order Summary </span>
            </li>
        </ul>
    </div>
    <div class="mb-5">
        <div class="d-flex align-items-center justify-content-center gap-3 flex-wrap">
            <div class="woocommerce-info">
                <span class="text-primary"><i class="fa-solid fa-percent" style="color: #68b7e2;"></i></span>
                <span class="text-body ps-2">Have a coupon?</span>
                <a href="#" data-bs-toggle="collapse" data-bs-target="#apply-coupon" class="text-white">Click here to enter your code</a>
            </div>
        </div>
        <div id="apply-coupon" class="collapse mt-5">
            <form class="checkout-coupon">
                <p class="mt-0">If you have a coupon code, please apply it below.</p>
                <div class="iq-checkout-coupon">
                    <input name="coupon-code" type="text" required="required" placeholder="Coupon code" class="form-control" />
                    <div class="iq-button">
                        <button type="submit" class="btn text-uppercase position-relative">
                            <span class="button-text">apply coupon</span>
                            <i class="fa-solid fa-play"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-md-7">
            <form action="order-received.html">
                <h5 class="mb-4">Billing details</h5>
                <div class="mb-4">
                    <input name="first-name" type="text" required="required" placeholder="First Name" class="form-control" />
                </div>
                <div class="mb-4">
                    <input name="last-name" type="text" required="required" placeholder="Last Name" class="form-control" />
                </div>
                <div class="mb-4">
                    <input name="billing-company" type="text" placeholder="Company" class="form-control" />
                </div>
                <div class="mb-4">
                    <select class="form-select">
                        <option selected>India</option>
                        <option value="1">United Kingdom</option>
                        <option value="2">United States</option>
                        <option value="3">Australia</option>
                        <option value="4">North Korea</option>
                    </select>
                </div>
                <div class="mb-4">
                    <input name="billing-address" type="text" required="required" placeholder="House number and street name" class="form-control" />
                </div>
                <div class="mb-4">
                    <input name="billing-address2" type="text" placeholder="Apartment, suite, unit, etc. (optional)" class="form-control" />
                </div>
                <div class="mb-4">
                    <input name="city" type="text" required="required" placeholder="Town / City" class="form-control" />
                </div>
                <div class="mb-4">
                    <select class="form-select">
                        <option selected>Colorado</option>
                        <option value="1">Alaska</option>
                        <option value="2">Hawaii</option>
                        <option value="3">Texas</option>
                        <option value="4">Washington</option>
                    </select>
                </div>
                <div class="mb-4">
                    <input name="postcode" type="text" required="required" placeholder="ZIP Code" class="form-control" />
                </div>
                <div class="mb-4">
                    <input name="phone" type="tel" required="required" placeholder="Phone Number" class="form-control" />
                </div>
                <div class="mb-4">
                    <input name="email" type="email" required="required" placeholder="E-mail Address" class="form-control rounded-0 mb-5" />
                </div>
                <h5 class="mb-4">Additional Information</h5>
                <div class="mb-4">
                    <label class="mb-2">Order notes (optional)</label>
                    <textarea name="your-message" placeholder="Notes about your order, e.g. special notes for delivery." class="form-control mb-5"></textarea>
                </div>
            </form>
        </div>
        <div class="col-lg-4 col-md-5">
            <div class="order_review-box border p-4">
                <h5 class="mb-3 mt-0 mt-md-2">Product</h5>
                <div class="checkout-review-order">
                    <div class="table-responsive">
                        <table class="table w-100">
                            <tbody>
                                <tr class="cart_item">
                                    <td class="product-name">
                                        <div class="product-image"><img width="300" height="400" src="{{asset('productimages/'.$newproduct->photo)}}" class="cartimg" alt="image" loading="lazy" /></div>
                                        <div class="text">
                                            <span class="fw-500 text-body">{{$newproduct->title}}</span><br />
                                            <strong class="text-white font-size-12 fw-bold">QTY:&nbsp;1</strong>
                                        </div>
                                    </td>
                                    <td class="product-total">
                                        <span class="Price-amount">
                                            <bdi class="fw-500 text-body"><span>{{$newproduct->symbole}}</span>{{$newproduct->price}}</bdi>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                            <tr class="border-bottom">
                                <td class="ps-0 p-3 fw-500 font-size-18">Subtotal</td>
                                <td class="pe-0 p-3 fw-500 text-end">
                                    <span class="mb-0 text-body">{{$newproduct->symbole}}{{$newproduct->price}}</span>
                                </td>
                            </tr>
                            <tr class="border-bottom">
                                <td class="ps-0 p-3 fw-500 font-size-18">Fee</td>
                                <td class="pe-0 p-3 fw-500 text-end">
                                    <span class="mb-0 text-body">{{$newproduct->symbole}}{{$newproduct->fee}}</span>
                                </td>
                            </tr>
                            <tr class="border-bottom">
                                <td class="ps-0 p-3 fw-500 font-size-18">Total</td>
                                <td class="pe-0 p-3 fw-500 text-end">
                                    <span class="text-primary mb-0">{{$newproduct->symbole}}{{$total}}</span>
                                </td>
                            </tr>
                        </tfoot>
                        </table>
                        <div class="checkout-payment mt-4 pt-3 pb-2">
                            <div class="payment-box border-bottom mb-5 pb-4">
                                <div class="accordion" id="accordionPayment">
                                    <div class="accordion-item-payment">
                                        <h6 class="accordion-header" id="payment-1">
                                            <div class="accordion-button-payment" data-bs-toggle="collapse" data-bs-target="#collapseOnepayment" aria-expanded="true" aria-controls="collapseOnepayment">
                                                <span class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked="checked" />
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Direct bank transfer
                                                    </label>
                                                </span>
                                            </div>
                                        </h6>
                                        <div id="collapseOnepayment" class="accordion-collapse collapse show" data-bs-parent="#accordionPayment">
                                            <div class="accordion-body">
                                                Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item-payment">
                                        <h6 class="accordion-header" id="payment-2">
                                            <div class="accordion-button-payment collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwopayment" aria-expanded="false" aria-controls="collapseTwopayment">
                                                <span class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" />
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        Check payments
                                                    </label>
                                                </span>
                                            </div>
                                        </h6>
                                        <div id="collapseTwopayment" class="accordion-collapse collapse" aria-labelledby="payment-2" data-bs-parent="#accordionPayment">
                                            <div class="accordion-body">
                                                Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item-payment">
                                        <h6 class="accordion-header" id="payment-3">
                                            <div class="accordion-button-payment collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThreepayment" aria-expanded="false" aria-controls="collapseThreepayment">
                                                <span class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" />
                                                    <label class="form-check-label" for="flexRadioDefault3">
                                                        Cash on delivery
                                                    </label>
                                                </span>
                                            </div>
                                        </h6>
                                        <div id="collapseThreepayment" class="accordion-collapse collapse" aria-labelledby="payment-3" data-bs-parent="#accordionPayment">
                                            <div class="accordion-body">
                                                Pay with cash upon delivery.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-5">
                                Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="../privacy-policy.html">privacy policy</a>.
                            </p>
                            <div class="iq-button">
                                <a href="order-tracking.html" class="btn text-uppercase position-relative">
                                    <span class="button-text">Place Order</span>
                                    <i class="fa-solid fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
