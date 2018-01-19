@extends('master')

@section('title', 'About')

@section('styles')


@endsection

@section('content')

    <div class="row">
        <div class="col-lg-8">
            <h5 class="mt-3">Help</h5>
            <div id="accordion" class="custom-accordion" role="tablist">
                <div class="card">
                    <div class="card-header" role="tab" id="headingOne">
                        <h5 class="mb-0">
                            <a data-toggle="collapse" href="#panelDelivery" role="button" aria-expanded="true" aria-controls="panelDelivery">
                                Delivery and Shipping
                            </a>

                        </h5>

                    </div>

                    <div id="panelDelivery" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <p>Where is my order?</p>
                            <p>What are the delivery time scale for my order?</p>
                            <p>How much is delivery fee outside my countery?</p>
                            <p>Where is my order?</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab" id="headingTwo">
                        <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" href="#panelPayments" role="button" aria-expanded="false" aria-controls="panelPayments">
                                Payments
                            </a>
                        </h5>
                    </div>
                    <div id="panelPayments" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <p>Where is my order?</p>
                            <p>What are the delivery time scale for my order?</p>
                            <p>How much is delivery fee outside my countery?</p>
                            <p>Where is my order?</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab" id="headingTwo">
                        <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" href="#panelOrders" role="button" aria-expanded="false" aria-controls="panelOrders">
                                Orders
                            </a>
                        </h5>
                    </div>
                    <div id="panelOrders" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <p>Where is my order?</p>
                            <p>What are the delivery time scale for my order?</p>
                            <p>How much is delivery fee outside my countery?</p>
                            <p>Where is my order?</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab" id="headingTwo">
                        <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" href="#panelReturns" role="button" aria-expanded="false" aria-controls="panelReturns">
                                Returns
                            </a>
                        </h5>
                    </div>
                    <div id="panelReturns" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <p>Where is my order?</p>
                            <p>What are the delivery time scale for my order?</p>
                            <p>How much is delivery fee outside my countery?</p>
                            <p>Where is my order?</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab" id="headingTwo">
                        <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" href="#panelPromotions" role="button" aria-expanded="false" aria-controls="panelPromotions">
                                Promotions and Discounts
                            </a>
                        </h5>
                    </div>
                    <div id="panelPromotions" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <p>Where is my order?</p>
                            <p>What are the delivery time scale for my order?</p>
                            <p>How much is delivery fee outside my countery?</p>
                            <p>Where is my order?</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab" id="headingTwo">
                        <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" href="#panelMore" role="button" aria-expanded="false" aria-controls="panelMore">
                                More here...
                            </a>
                        </h5>
                    </div>
                    <div id="panelMore" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <p>Where is my order?</p>
                            <p>What are the delivery time scale for my order?</p>
                            <p>How much is delivery fee outside my countery?</p>
                            <p>Where is my order?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <h5 class="mt-3">Where is my Order?</h5>
            <input class="form-control" placeholder="eg. ANVMARC092015" />
            <button class="btn btn-success col-lg-12 mt-1">Track Order</button>

            <h5 class="mt-4">Contact Us</h5>
            <p>We're open 9am - 5pm GMT</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        </div>
    </div>


@endsection