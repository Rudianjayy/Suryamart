<footer class="ltn__footer-area  ">
    <div class="footer-top-area  section-bg-1 plr--5">
        <div class="container py-5 px-lg-5">

            <div class="row g-5">

                @foreach ( $tentang as $t )
                <div class="col-md-6 col-lg-5">
                    <div class="footer-widget footer-about-widget">
                        <div class="footer-logo">
                            <div class="site-logo">
                                <img src="{{ asset('fotosuryamart/' . $t->foto_about) }}"
                                    alt="Logo">
                            </div>
                        </div>
                        <p>{{$t->penjelasan}}</p>

                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <h4 class="footer-title">Kontak</h4>
                    <div class="footer-address">
                        <ul>
                            <li>
                                <div class="footer-address-icon">
                                    <i class="icon-placeholder"></i>
                                </div>
                                <div class="footer-address-info">
                                    <p>{{ $t->alamat }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="footer-address-icon">
                                    <i class="icon-call"></i>
                                </div>
                                <div class="footer-address-info">
                                    <p><a href="tel:{{ $t->notelpon }}">{{ $t->notelpon }}</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="footer-address-icon">
                                    <i class="icon-mail"></i>
                                </div>
                                <div class="footer-address-info">
                                    <p><a href="mailto:{{ $t->email }}">{{ $t->email }}</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="ltn__social-media mt-20">
                        <ul>
                            <li><a href="{{ $t->link_fb }}" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ $t->link_ig }}" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="{{ $t->link_wa }}" title="WhatsApp"><i class="fab fa-whatsapp"></i></a></li>
                            <li><a href="{{ $t->link_map }}" title="Maps"><i class="fas fa-map-marker-alt"></i></i></a></li>
                        </ul>
                    </div>
                </div>
                @endforeach
                <div class="col-md-6 col-lg-3 ">
                    <div class="footer-widget footer-menu-widget clearfix">
                        <h4 class="footer-title">Lainnya</h4>
                        <div class="footer-menu">
                            @php
                                $kontak = \App\Models\Kontak::all();
                            @endphp
                            <ul>
                                @foreach ( $kontak as $kontak )
                                <li><a href="{{ $kontak->link }}">{{ $kontak->judul }}</a></li>    
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ltn__copyright-area ltn__copyright-2 section-bg-2  ltn__border-top-2--- plr--5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="ltn__copyright-design clearfix">
                        <p>All Rights Reserved @ Company <span class="current-year"></span></p>
                    </div>
                </div>
                <div class="col-md-6 col-12 align-self-center">
                    <div class="ltn__copyright-menu text-right">
                        <ul>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Claim</a></li>
                            <li><a href="#">Privacy & Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
