@extends('layouts.default')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">
    <!-- Widgets  -->
    <div class="row">
        <div class="col-12 col-sm-6">
            <div class="card card-money">
                <div class="card-body card-money-body">
                    <div class="card-body-text">
                        <h4>Balance</h4>
                        <a href="#mymodal" data-remote="{{ route('moneys.create') }}" data-toggle="modal"
                            data-target="#mymodal" data-title="Tambah Uang Anda">+ Add</a>
                    </div>
                    <h2 class="money">Rp.100,000</h2>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6">
            <div class="card card-money">
                <div class="card-body card-money-body">
                    <div class="card-body-text">
                        <h4>Savings</h4>
                    </div>
                    <h2 class="money">Rp.80,000</h2>
                </div>
            </div>
        </div>
    
        
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-sm-6">
            <div class="card card-money">
                <div class="card-body card-money-body">
                    <div class="card-body-text">
                        <h4>Bank</h4>
                    </div>
                    <h2 class="money">Rp.80,000</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /Widgets -->
    <!-- Orders -->
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">
                            Recent Activities
                        </h4>
                    </div>

                    <div class="card-body">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Category</th>
                                        <th>Location</th>
                                        <th>Description</th>
                                        <th>Price (Rupiah)</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="id">
                                            1.
                                        </td>
                                        <td>Wants</td>
                                        <td>
                                            <span class="location">Uniqlo</span>
                                        </td>
                                        <td>
                                            <span class="description">T-Shirt</span>
                                        </td>
                                        <td>
                                            <span class="count">2000</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-complete">Complete</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="id">
                                            2.
                                        </td>
                                        <td>Savings</td>
                                        <td>
                                            <span class="location">Bank</span>
                                        </td>
                                        <td>
                                            <span class="description">T-Shirt</span>
                                        </td>
                                        <td>
                                            <span class="count">2000</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-pending">Pending</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="id">
                                            3.
                                        </td>
                                        <td>Essentials</td>
                                        <td>
                                            <span class="location">Uniqlo</span>
                                        </td>
                                        <td>
                                            <span class="description">T-Shirt</span>
                                        </td>
                                        <td>
                                            <span class="count">2000</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-pending">Pending</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="id">
                                            4.
                                        </td>
                                        <td>Wants</td>
                                        <td>
                                            <span class="location">Uniqlo</span>
                                        </td>
                                        <td>
                                            <span class="description">T-Shirt</span>
                                        </td>
                                        <td>
                                            <span class="count">2000</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-pending">Pending</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="id">
                                            5.
                                        </td>
                                        <td>Wants</td>
                                        <td>
                                            <span class="location">Uniqlo</span>
                                        </td>
                                        <td>
                                            <span class="description">T-Shirt</span>
                                        </td>
                                        <td>
                                            <span class="count">2000</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-complete">Complete</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="id">
                                            6.
                                        </td>
                                        <td>Wants</td>
                                        <td>
                                            <span class="location">Uniqlo</span>
                                        </td>
                                        <td>
                                            <span class="description">T-Shirt</span>
                                        </td>
                                        <td>
                                            <span class="count">2000</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-complete">Complete</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="id">
                                            7.
                                        </td>
                                        <td>Wants</td>
                                        <td>
                                            <span class="location">Uniqlo</span>
                                        </td>
                                        <td>
                                            <span class="description">T-Shirt</span>
                                        </td>
                                        <td>
                                            <span class="count">2000</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-pending">Pending</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-stats -->
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-lg-8 -->
        </div>
    </div>
    <!-- /.orders -->
    <!-- /#add-category -->
</div>
<!-- .animated -->
<div class="col-xl-7 chart" style="margin: 0 auto;">
    <div class="card card-chart">
        <h3>Expense Alocation</h3>
        <div class="chart-container ov-h">
            <div id="flotPie1" class="float-chart"></div>
        </div>
        <div class="legend-chart">
            <h4 class="essentials">
                <i class="menu-icon fa fa-cube"></i> Essentials
            </h4>
            <h4 class="wants">
                <i class="menu-icon fa fa-cube"></i> Wants
            </h4>
            <h4 class="savings">
                <i class="menu-icon fa fa-cube"></i> Savings
            </h4>
        </div>
    </div>
</div>
@endsection
