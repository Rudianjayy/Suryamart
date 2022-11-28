@extends('admin.admin')

@section('content')

<div id="content" class="main-content">
    <div class="container">
        <div class="page-header">
            <div class="page-title">
                <h3>Dashboard</h3>
            </div>
        </div>

        <div class="row layout-spacing ">

            <div class="col-xl-3 mb-xl-0 col-lg-6 mb-4 col-md-6 col-sm-6">
                <div class="widget-content-area  data-widgets br-4">
                    <div class="widget  t-sales-widget">
                        <div class="media">
                            <div class="icon ml-2">
                                <i class="flaticon-line-chart"></i>
                            </div>
                            <div class="media-body text-right">
                                <p class="widget-text mb-0">Produk</p>
                                <p class="widget-numeric-value">98,225</p>
                            </div>
                        </div>
                        <p class="widget-total-stats mt-2">94% New Sales</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 mb-xl-0 col-lg-6 mb-4 col-md-6 col-sm-6">
                <div class="widget-content-area  data-widgets br-4">
                    <div class="widget  t-order-widget">
                        <div class="media">
                            <div class="icon ml-2">
                                <i class="flaticon-cart-bag"></i>
                            </div>
                            <div class="media-body text-right">
                                <p class="widget-text mb-0">Makanan</p>
                                <p class="widget-numeric-value">24,017</p>
                            </div>
                        </div>
                        <p class="widget-total-stats mt-2">552 New Orders</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-sm-0 mb-4">
                <div class="widget-content-area  data-widgets br-4">
                    <div class="widget  t-customer-widget">
                        <div class="media">
                            <div class="icon ml-2">
                                <i class="flaticon-user-11"></i>
                            </div>
                            <div class="media-body text-right">
                                <p class="widget-text mb-0">Minuman</p>
                                <p class="widget-numeric-value">92,251</p>
                            </div>
                        </div>
                        <p class="widget-total-stats mt-2">390 New Customers</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">

                <div class="widget-content-area  data-widgets br-4">
                    <div class="widget  t-income-widget">
                        <div class="media">
                            <div class="icon ml-2">
                                <i class="flaticon-money"></i>
                            </div>
                            <div class="media-body text-right">
                                <p class="widget-text mb-0">Lain Lain</p>
                                <p class="widget-numeric-value">9.5 M</p>
                            </div>
                        </div>
                        <p class="widget-total-stats mt-2">$2.1 M This Week</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 col-12 layout-spacing">
                <div class="widget-content-area chat-messages p-0  br-4">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
