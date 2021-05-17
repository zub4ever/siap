@extends('layouts.app')


{{-- Page Title --}}
@section('page-title')
    Basic Table
@endsection

@section('main-content')
    <div class="row">
        <!-- basic table start -->
        <div class="col-lg-6 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Basic Table</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead class="text-uppercase">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">date</th>
                                    <th scope="col">price</th>
                                    <th scope="col">action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$120</td>
                                    <td>
                                        <button class="btn btn-danger"><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>jone</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$150</td>
                                    <td>
                                        <button class="btn btn-danger"><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$120</td>
                                    <td>
                                        <button class="btn btn-danger"><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>jone</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$150</td>
                                    <td>
                                        <button class="btn btn-danger"><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- basic table end -->
        <!-- Striped table start -->
        <div class="col-lg-6 stretched_card mt-mob-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Striped Rows</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-striped text-center">
                                <thead class="text-uppercase">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">date</th>
                                    <th scope="col">price</th>
                                    <th scope="col">action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$120</td>
                                    <td>
                                        <button class="btn btn-danger"><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>jone</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$150</td>
                                    <td>
                                        <button class="btn btn-danger"><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$120</td>
                                    <td>
                                        <button class="btn btn-danger"><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>jone</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$150</td>
                                    <td>
                                        <button class="btn btn-danger"><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Striped table end -->
    </div>
    <div class="row">
        <!-- Bordered Table start -->
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Bordered Table</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-bordered text-center">
                                <thead class="text-uppercase">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">date</th>
                                    <th scope="col">price</th>
                                    <th scope="col">action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$120</td>
                                    <td><i class="ti-trash text-danger"></i></td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>jone</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$150</td>
                                    <td><i class="ti-trash text-danger"></i></td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$120</td>
                                    <td><i class="ti-trash text-danger"></i></td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>jone</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$150</td>
                                    <td><i class="ti-trash text-danger"></i></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bordered Table end -->
        <!-- Hoverable Rows Table start -->
        <div class="col-lg-6 mt-4 stretched_card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Hoverable Rows</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-hover text-center">
                                <thead class="text-uppercase">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">date</th>
                                    <th scope="col">price</th>
                                    <th scope="col">action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$120</td>
                                    <td>
                                        <i class="ti-pencil mr-1 btn btn-success"></i>
                                        <i class="ti-trash btn btn-danger"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>jone</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$150</td>
                                    <td>
                                        <i class="ti-pencil mr-1 btn btn-success"></i>
                                        <i class="ti-trash btn btn-danger"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$120</td>
                                    <td>
                                        <i class="ti-pencil mr-1 btn btn-success"></i>
                                        <i class="ti-trash btn btn-danger"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>jone</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$150</td>
                                    <td>
                                        <i class="ti-pencil mr-1 btn btn-success"></i>
                                        <i class="ti-trash btn btn-danger"></i>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hoverable Rows Table end -->
    </div>
    <div class="row">
        <!-- table light start -->
        <div class="col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Thead light</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead class="text-uppercase bg-light">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">date</th>
                                    <th scope="col">price</th>
                                    <th scope="col">action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$120</td>
                                    <td>
                                        <button class="btn btn-danger"><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>jone</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$150</td>
                                    <td>
                                        <button class="btn btn-danger"><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$120</td>
                                    <td>
                                        <button class="btn btn-danger"><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>jone</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$150</td>
                                    <td>
                                        <button class="btn btn-danger"><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- table light end -->
        <!-- table dark start -->
        <div class="col-lg-6 stretched_card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Thead dark</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead class="text-uppercase bg-dark">
                                <tr class="text-white">
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">date</th>
                                    <th scope="col">price</th>
                                    <th scope="col">action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$120</td>
                                    <td>
                                        <button class="btn btn-danger"><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>jone</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$150</td>
                                    <td>
                                        <button class="btn btn-danger"><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$120</td>
                                    <td>
                                        <button class="btn btn-danger"><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>jone</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$150</td>
                                    <td>
                                        <button class="btn btn-danger"><i class="ti-trash"></i></button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- table dark end -->
    </div>
    <div class="row">
        <!-- Contextual Classes start -->
        <div class="col-lg-6 mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Contextual Classes</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table text-dark text-center">
                                <thead class="text-uppercase">
                                <tr class="table-active">
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">date</th>
                                    <th scope="col">price</th>
                                    <th scope="col">action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="table-primary">
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$120</td>
                                    <td><i class="ti-trash"></i></td>
                                </tr>
                                <tr class="table-secondary">
                                    <th scope="row">1</th>
                                    <td>jone</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$150</td>
                                    <td><i class="ti-trash"></i></td>
                                </tr>
                                <tr class="table-success">
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$120</td>
                                    <td><i class="ti-trash"></i></td>
                                </tr>
                                <tr class="table-danger">
                                    <th scope="row">1</th>
                                    <td>jone</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$150</td>
                                    <td><i class="ti-trash"></i></td>
                                </tr>
                                <tr class="table-warning">
                                    <th scope="row">1</th>
                                    <td>jone</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$150</td>
                                    <td><i class="ti-trash"></i></td>
                                </tr>
                                <tr class="table-info">
                                    <th scope="row">1</th>
                                    <td>jone</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$150</td>
                                    <td><i class="ti-trash"></i></td>
                                </tr>
                                <tr class="table-light">
                                    <th scope="row">1</th>
                                    <td>jone</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$150</td>
                                    <td><i class="ti-trash"></i></td>
                                </tr>
                                <tr class="table-dark">
                                    <th scope="row">1</th>
                                    <td>jone</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$150</td>
                                    <td><i class="ti-trash"></i></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contextual Classes end -->
        <!-- Contextual Classes start -->
        <div class="col-lg-6 mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Contextual Classes</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table text-dark text-center">
                                <thead class="text-uppercase">
                                <tr class="table-active">
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">date</th>
                                    <th scope="col">price</th>
                                    <th scope="col">action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="bg-primary">
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$120</td>
                                    <td><i class="ti-trash"></i></td>
                                </tr>
                                <tr class="bg-secondary">
                                    <th scope="row">1</th>
                                    <td>jone</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$150</td>
                                    <td><i class="ti-trash"></i></td>
                                </tr>
                                <tr class="bg-success">
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$120</td>
                                    <td><i class="ti-trash"></i></td>
                                </tr>
                                <tr class="bg-danger">
                                    <th scope="row">1</th>
                                    <td>jone</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$150</td>
                                    <td><i class="ti-trash"></i></td>
                                </tr>
                                <tr class="bg-warning">
                                    <th scope="row">1</th>
                                    <td>jone</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$150</td>
                                    <td><i class="ti-trash"></i></td>
                                </tr>
                                <tr class="bg-info">
                                    <th scope="row">1</th>
                                    <td>jone</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$150</td>
                                    <td><i class="ti-trash"></i></td>
                                </tr>
                                <tr class="bg-light">
                                    <th scope="row">1</th>
                                    <td>jone</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$150</td>
                                    <td><i class="ti-trash"></i></td>
                                </tr>
                                <tr class="bg-dark text-white">
                                    <th scope="row">1</th>
                                    <td>jone</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>$150</td>
                                    <td><i class="ti-trash"></i></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contextual Classes end -->
    </div>
    <div class="row">
        <!-- Progress Table start -->
        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Progress Table</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-hover progress-table text-center">
                                <thead class="text-uppercase">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">task</th>
                                    <th scope="col">Deadline</th>
                                    <th scope="col">Progress</th>
                                    <th scope="col">status</th>
                                    <th scope="col">action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-info">in progress</span></td>
                                    <td>
                                        <ul class="d-flex justify-content-center">
                                            <li class="mr-3"><a href="#" class="text-primary"><i class="fa fa-edit"></i></a></li>
                                            <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Mark</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-warning">pending</span></td>
                                    <td>
                                        <ul class="d-flex justify-content-center">
                                            <li class="mr-3"><a href="#" class="text-primary"><i class="fa fa-edit"></i></a></li>
                                            <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Mark</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-success">complate</span></td>
                                    <td>
                                        <ul class="d-flex justify-content-center">
                                            <li class="mr-3"><a href="#" class="text-primary"><i class="fa fa-edit"></i></a></li>
                                            <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Mark</td>
                                    <td>09 / 07 / 2018</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-danger">stopped</span></td>
                                    <td>
                                        <ul class="d-flex justify-content-center">
                                            <li class="mr-3"><a href="#" class="text-primary"><i class="fa fa-edit"></i></a></li>
                                            <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                        </ul>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Progress Table end -->
    </div>
@endsection
