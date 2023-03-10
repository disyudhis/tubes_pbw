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
                    <a href="{{ url('/view_order') }}" class="nav-item nav-link"><i
                            class="fa fa-solid fa-plus me-2"></i>Orders</a>
                    <a href="{{ url('/view_status') }}" class="nav-item nav-link"><i
                            class="fas fa-bell me-2"></i>Status</a>
                    <a href="{{ url('/view_history') }}" class="nav-item nav-link active"><i
                            class="fas fa-history me-2"></i>History</a>
                    {{-- <a href="#" class="nav-item nav-link"><i class="fas fa-wrench me-2"></i>Settings</a> --}}
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
                <h1 class="m-3 fs-3 font-bold">History</h1>
                @foreach ($status as $status)
                    <div class="card w-full mb-3">
                        <div class="card-body">
                            <h5 class="card-title fs-3 font-bold">{{ $status->username }}</h5>
                            <h5 class="card-text fs-5 text-success">{{ $status->status }}</h5>
                            <div class="row mt-2">
                                <div class="col text-start">Alamat : </div>
                                <div class="col text-end">{{ $status->alamat }}</div>
                            </div>
                            <li class="dropdown-divider"></li>
                            <div class="row mt-2">
                                <div class="col text-start">Harga : </div>
                                <div class="col text-end font-bold">Rp. {{ $status->totalBayar }}</div>
                            </div>
                            <li class="dropdown-divider"></li>
                            <div class="row mt-2">
                                <div class="col text-start">Tanggal : </div>
                                <div class="col text-end">{{ $status->updated_at }}</div>
                            </div>
                            <li class="dropdown-divider"></li>
                            <div class="row mt-2">
                                <div class="col text-start">Pembayaran via :</div>
                                <div class="col text-end">{{ $status->payment_id }}</div>
                            </div>
                            </ul>
                        </div>
                    </div>
                @endforeach
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
