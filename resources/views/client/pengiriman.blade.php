<!DOCTYPE html>
<html lang="en">

<head>
    @include('client.style')
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        @include('client.spinner')
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <a href="home.html"><img src="home/assets/img/logo/mesin.png" alt=""></a>
                    {{-- <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Clinz Laundry</h3> --}}
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                </div>
                <div class="navbar-nav w-100 mt-14">
                    <a href="{{ url('/view_dashboard') }}" class="nav-item nav-link"><i
                            class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="{{ url('/view_order') }}" class="nav-item nav-link active"><i
                            class="fa fa-solid fa-plus me-2"></i>Orders</a>
                    <a href="{{ url('/view_status') }}" class="nav-item nav-link"><i
                            class="fas fa-bell me-2"></i>Status</a>
                    <a href="{{ url('/view_history') }}" class="nav-item nav-link"><i
                            class="fas fa-history me-2"></i>History</a>
                    <a href="{{ url('/view_settings') }}" class="nav-item nav-link"><i
                            class="fas fa-wrench me-2"></i>Settings</a>
                </div>
            </nav>
        </div>

        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            @include('client.navbar')
            <!-- Navbar End -->

            {{-- Content Dashboard --}}
            <div class="main-content">
                <div class="col-sm-12 col-xl-12">
                    <div class="rounded h-100 p-4">
                        {{-- <h1 class="fs-3 font-bold mb-4">Masukan Pesanan</h1> --}}
                        {{-- <a href="{{ url('/view_order') }}" type="reset" class="btn btn-secondary col-sm-2">Back</a> --}}

                        <form method="POST" action="{{ route('detailUpdate', $order->id) }}">
                            @csrf

                            <h1 class="fs-5 my-4 font-bold">Pengiriman</h1>
                            <div class="row mb-3">
                                <label for="daerah" class="col-sm-2 col-form-label">Daerah</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="daerah" aria-label="Default select example">
                                        <option selected>Pilih daerah</option>
                                        <option value="1">Cipagalo</option>
                                        <option value="2">Bojongsoang</option>
                                        <option value="3">Buah Batu</option>
                                        <option value="4">Bojongloa</option>
                                        <option value="3">Ciwastra</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" placeholder="Tuliskan alamat mu" name="alamat" id="alamat" style="height: 150px;"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="totalBayar" class="col-sm-2 col-form-label">Total Bayar</label>
                                <div class="col-sm-10">
                                    <h1>Sekian
                                    </h1>
                                    {{-- <div class="input-group">
                                        <span class="input-group-text">Rp</span>
                                        <input type="text" name="totalBayar" class="form-control">
                                        <span class="input-group-text">.00</span>
                                    </div> --}}
                                </div>
                            </div>
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Metode Pembayaran</legend>
                                <div class="col-sm-10">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="payments" id="bayar1"
                                            value="1">
                                        <label class="form-check-label" for="bayar1">
                                            OVO
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="payments" id="bayar2"
                                            value="2">
                                        <label class="form-check-label" for="bayar2">
                                            ShopeePay
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="payments" id="bayar3"
                                            value="3">
                                        <label class="form-check-label" for="bayar3">
                                            DANA
                                        </label>
                                    </div>
                                </div>
                            </fieldset>

                            <button type="submit" class="btn btn-primary col-sm-2">Pesan</button>

                        </form>
                    </div>
                </div>
            </div>


            <!-- Footer Start -->
            @include('client.footer')
            <!-- Footer End -->
        </div>
        <!-- Content End -->




        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    @include('client.script')
</body>

</html>