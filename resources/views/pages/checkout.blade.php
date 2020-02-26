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
                            <p>{{ $item->travelpackage->title }}</p>
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
                                        @forelse ($item->detail as $val)                                            
                                            <tr>
                                                <td>
                                                    <img src="https://ui-avatars.com/api/?name={{ $val->user_name }}" alt="" height="60"/>
                                                </td>
                                                <td class="align-middle">{{ $val->user_name }}</td>
                                                <td class="align-middle">{{ $val->nationality }}</td>
                                                <td class="align-middle">{{ $val->is_visa ? '30 Days' : 'N/A' }}</td>
                                                <td class="align-middle">{{ \Carbon\Carbon::createFromDate($val->doe_passport) > \Carbon\Carbon::now() ? 'Active' : 'Inactive' }}</td>
                                                <td class="align-middle">
                                                    <a href="{{ route('checkout-remove', $val->id) }}">
                                                    <img src="{{asset('frontend/images/ic_remove.png')}}" alt="" />
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">Kosong</td>
                                            </tr>                                        
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="member mt-3">
                                <h2>Add Member</h2>
                                <form class="form-inline" method="POST" action="{{ route('checkout-create', $item->id) }}">
                                    @csrf

                                    <div class="input-group mb-2 mr-sm-2">
                                    <label class="sr-only" for="username">Name</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2" id="inputUsername" name="user_name" placeholder="Username"/>
                                    </div>

                                    <div class="input-group mb-2 mr-sm-2">
                                        <label class="sr-only" for="nationality">Nationality</label>
                                        <input type="text" class="form-control mb-2 mr-sm-2" id="inputNationality" name="nationality" placeholder="Nationality"/>
                                    </div>

                                    <div class="input-group mb-2 mr-sm-2">
                                        <label class="sr-only" for="inputVisa">Visa</label>
                                        <select name="is_visa" class="custom-select mb-2 mr-sm-2" id="">
                                            <option value="" selected>Visa</option>
                                            <option value="1">30 Days</option>
                                            <option value="0">N/A</option>
                                        </select>                                        
                                    </div>

                                    <div class="input-group mb-2 mr-sm-2">
                                        <label class="sr-only" for="doePassport">Doe Passport</label>
                                        <input type="text" class="form-control datepicker" id="doePassport" name="doe_passport" placeholder="Doe Passport"/>
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
                                <td width="50%" class="text-right" style="color: black;">{{ $item->detail->count() }}</td>
                            </tr>
                            <tr>
                                <th width="50%" style="color: black;">Additional Visa</th>
                                <td width="50%" class="text-right" style="color: black;">$ {{ $item->additional_visa }},00</td>
                            </tr>
                            <tr>
                                <th width="50%" style="color: black;">Trip Price</th>
                                <td width="50%" class="text-right" style="color: black;">$ {{ $item->travelpackage->price }},00 / person</td>
                            </tr>
                            <tr>
                                <th width="50%" style="color: black;">Sub Total</th>
                                <td width="50%" class="text-right" style="color: black;">$ {{ $item->transaction_total }},00</td>
                            </tr>
                            <tr>
                                <th width="50%" style="color: black;">Total (+Unique)</th>
                                <td width="50%" class="text-right text-total">
                                    <span class="text-blue" style="color: black;">$ {{ $item->transaction_total }},</span>
                                    <span class="text-orange" style="color: black;">{{ mt_rand(0,99) }}</span>
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
                        <a href="{{ route('checkout-success',$item->id) }}" class="btn btn-block btn-join-now mt-3 py-2">I Have Made Payment</a>
                        </div>
                        <div class="text-center mt-3">
                        <a href="{{ route('detail', $item->travelpackage->slug) }}" class="text-muted">Cancel Booking</a>
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
                    rightIcon: '<img src="{{ asset('frontend/images/ic_doe.png') }}" alt="" />'
                }
            });
        });
    </script>
@endpush