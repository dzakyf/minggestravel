@extends('layout/main')

@section('content')

 <!--================ Banner Area =================-->
 <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Kontak kami </h2>
                    <div class="page_link">
                        <a href="{{url('/')}}">Home</a>
                        <a href="{{('/kontak')}}">Kontak    </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Banner Area =================-->

    <!--================Contact Area =================-->
    <section class="contact_area p_120">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>Yogyakarta, Indonesia</h6>
                            <p>Ngadinegaran MJ III/62 Yogyakarta 55143</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6>
                                <a href="#">Telp.(0274) 378187,<br> Fax. (0274) 381582</a>
                            </h6>
                            <p>Mon to Fri 9am to 6 pm</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6>
                                <a href="#">labkes@gmail.com</a>
                            </h6>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->


@endsection