@extends('layouts.checkout')

@section('title','Halaman Checkout')

@section('content')
    <main>
        <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0 pl-3 pl-lg-0">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page" style="color:black;">
                                Paket Travel
                                </li>
                                <li class="breadcrumb-item" aria-current="page" style="color:black;">
                                Details
                                </li>
                                <li class="breadcrumb-item active" aria-current="page" style="color:black;">
                                Checkout
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details mb-3">
                            <h1>Who is Going?</h1>
                            <p>
                                Trip to Ubud, Bali, Indonesia
                            </p>
                            <div class="attendee">
                                <table class="table table-responsive-sm text-center">
                                    <thead>
                                        <tr>
                                        <td scope="col">Picture</td>
                                        <td scope="col">Name</td>
                                        <td scope="col">Nationality</td>
                                        <td scope="col">Visa</td>
                                        <td scope="col">Passport</td>
                                        <td scope="col"></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img
                                                src="{{asset('frontend/images/avatar-2.png')}}"
                                                alt=""
                                                height="60"
                                                />
                                            </td>
                                            <td class="align-middle">Rian</td>
                                            <td class="align-middle">CN</td>
                                            <td class="align-middle">N/A</td>
                                            <td class="align-middle">Active</td>
                                            <td class="align-middle">
                                                <a href="#">
                                                <img src="{{asset('frontend/images/ic_remove.png')}}" alt="" />
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img
                                                src="{{asset('frontend/images/avatar-3.png')}}"
                                                alt=""
                                                height="60"
                                                />
                                            </td>
                                            <td class="align-middle">Ali</td>
                                            <td class="align-middle">SG</td>
                                            <td class="align-middle">30 Days</td>
                                            <td class="align-middle">Active</td>
                                            <td class="align-middle">
                                                <a href="#">
                                                <img src="{{asset('frontend/images/ic_remove.png')}}" alt="" />
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="member mt-3">
                                <h2>Add Member</h2>
                                <form class="form-inline">
                                    <label class="sr-only" for="inputUsername">Name</label>
                                    <input
                                        type="text"
                                        class="form-control mb-2 mr-sm-2"
                                        id="inputUsername"
                                        placeholder="Username"/>

                                    <label
                                        class="sr-only"
                                        class="mr-2"
                                        for="inlineFormCustomSelectPref"
                                        >Preference</label>
                                    <select
                                        class="custom-select mb-2 mr-sm-2"
                                        id="inlineFormCustomSelectPref">
                                        <option selected value="">VISA</option>
                                        <option value="2">30 Days</option>
                                        <option value="3">N/A</option>
                                    </select>

                                    <label class="sr-only" for="doePassport"
                                        >DOE Passport</label
                                    >
                                    <div class="input-group mb-2 mr-sm-2">
                                        <input
                                        type="text"
                                        class="form-control datepicker"
                                        id="doePassport"
                                        placeholder="DOE Passport"
                                        />
                                    </div>

                                    <button type="submit" class="btn btn-success mb-2 px-4">
                                        Add Now
                                    </button>
                                </form>
                                <h3 class="mt-2 mb-0">Note</h3>
                                <p class="disclaimer mb-0">
                                You are only able to invite member that has registered in
                                Nomads.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                        <h2 style="color: black;">Checkout Information</h2>
                        <table class="trip-informations">
                            <tr>
                            <th width="50%" style="color: black;">Members</th>
                            <td width="50%" class="text-right" style="color: black;">2 person</td>
                            </tr>
                            <tr>
                            <th width="50%" style="color: black;">Additional Visa</th>
                            <td width="50%" class="text-right" style="color: black;">$ 190,00</td>
                            </tr>
                            <tr>
                            <th width="50%" style="color: black;">Trip Price</th>
                            <td width="50%" class="text-right" style="color: black;">$ 80,00 / person</td>
                            </tr>
                            <tr>
                            <th width="50%" style="color: black;">Sub Total</th>
                            <td width="50%" class="text-right" style="color: black;">$ 280,00</td>
                            </tr>
                            <tr>
                            <th width="50%" style="color: black;">Total (+Unique)</th>
                            <td width="50%" class="text-right text-total">
                                <span class="text-blue" style="color: black;">$ 279,</span
                                ><span class="text-orange" style="color: black;">33</span>
                            </td>
                            </tr>
                        </table>

                        <hr />
                        <h2 style="color: black;">Payment Instructions</h2>
                        <p class="payment-instructions" style="color: black;">
                            Please complete your payment before to continue the wonderful
                            trip
                        </p>
                        <div class="bank">
                            <div class="bank-item pb-3">
                            <img
                                src="frontend/images/ic_bank.png"
                                alt=""
                                class="bank-image"
                            />
                            <div class="description">
                                <h3 style="color: black;">Importir Group</h3>
                                <p style="color: black;">
                                0881 8829 8800
                                <br />
                                Bank Central Asia
                                </p>
                            </div>
                            <div class="clearfix"></div>
                            </div>
                            <div class="bank-item">
                            <img
                                src="frontend/images/ic_bank.png"
                                alt=""
                                class="bank-image"
                            />
                            <div class="description">
                                <h3 style="color: black;">Importir Group</h3>
                                <p style="color: black;">
                                0899 8501 7888
                                <br />
                                Bank HSBC
                                </p>
                            </div>
                            <div class="clearfix"></div>
                            </div>
                        </div>
                        </div>
                        <div class="join-container">
                        <a
                            href="success.html"
                            class="btn btn-block btn-join-now mt-3 py-2"
                            >I Have Made Payment</a
                        >
                        </div>
                        <div class="text-center mt-3">
                        <a href="#" class="text-muted">Cancel Booking</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ asset('frontend/libraries/gijgo/css/gijgo.min.css') }}"/>
@endpush

@push('addon-script')
    <script src="{{ asset('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd',
                uiLibrary: 'bootstrap4',
                icons: {
                    rightIcon: '<img src="frontend/images/ic_doe.png" alt="" />'
                }
            });
        });
    </script>
@endpush