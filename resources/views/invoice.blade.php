@extends('layouts.app')

{{-- Page Title --}}
@section('page-title')
    Invoice Page
@endsection

@section('main-content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="invoice-area">
                        <div class="invoice-head">
                            <div class="row">
                                <div class="iv-left col-lg-6">
                                    <span>INVOICE</span>
                                </div>
                                <div class="iv-right col-lg-6 text-md-right">
                                    <span>#34445998</span>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="invoice-address">
                                    <h3>Invoiced to</h3>
                                    <h5>William T. Smith</h5>
                                    <p>
                                        9172 West Bay Meadows Street
                                        <br>
                                        Pickerington
                                        <br>
                                        OH 43147
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 text-md-right">
                                <ul class="invoice-date">
                                    <li>Invoice Date : sat 18-07-2019</li>
                                    <li>Due Date : sat 18-07-2019</li>
                                </ul>
                            </div>
                        </div>
                        <div class="invoice-table table-responsive mt-5">
                            <table class="table table-bordered table-hover text-right">
                                <thead>
                                <tr class="text-capitalize">
                                    <th class="text-center">id</th>
                                    <th class="text-left">description</th>
                                    <th>qty</th>
                                    <th>Unit Cost</th>
                                    <th>total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-left">Crazy Toys</td>
                                    <td>1</td>
                                    <td>$20</td>
                                    <td>$40</td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="text-left">Beautiful flowers</td>
                                    <td>2</td>
                                    <td>$50</td>
                                    <td>$100</td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="4">total balance :</td>
                                    <td>$140</td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="invoice-buttons text-right">
                        <a href="#" class="btn btn-primary d-block-mob">print invoice</a>
                        <a href="#" class="btn btn-primary mt-mob-4 d-block-mob">send invoice</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
