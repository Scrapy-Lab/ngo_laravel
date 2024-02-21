@extends('layouts.app')
@section('content')
    <div class="ourWorkBanner text-center">
        <h1>Our Work</h1>
    </div>

    <div class="ourworkMain">

        {{-- Campaigns --}}
        <div class="campaigns">
            <h2>Our Campaigns</h2>
            <p>
                Our vision is nothing less than realizing the full potential of the Internet – universal access to research
                and education
            </p>

            <div class="campaignsInner">
                <div class="row justify-content-between">

                    {{-- COMPAIGN BOX --}}
                    <div class="col-md-4">
                        <div class="campaignBox">
                            <figure>
                            <img src="{{ url('/images/youngistaan-education-1.jpg') }}" alt=""></figure>
                            <div class="campaignboxcontent">
                                <a href="#">Education - Your Door To The Future.</a>
                                <p>Going to school is happy for any poor child so education is always a priority issue. Power outages in communities across.</p>
                                <button>Donate Now</button>
                            </div>
                        </div>
                    </div>

                    {{-- COMPAIGN BOX --}}
                    <div class="col-md-4">
                        <div class="campaignBox">
                            <figure>
                            <img src="{{ url('/images/youngistaan-food_n.jpg') }}" alt=""></figure>
                            <div class="campaignboxcontent">
                                <a href="#">Hunger Free India</a>
                                <p>This distribution drive was instrumental in providing food to thousands of underprivileged people across India. With Love was happy to have played a little part in this big mission.</p>
                                <button>Donate Now</button>
                            </div>
                        </div>
                    </div>

                    {{-- COMPAIGN BOX --}}
                    <div class="col-md-4">
                        <div class="campaignBox">
                            <figure>
                            <img src="{{ url('/images/medical.jpg') }}" alt=""></figure>
                            <div class="campaignboxcontent">
                                <a href="#">Medical Project - We Care Always...</a>
                                <p>While the health statistics of rural India continue to be poor, the health status and access to health for the poor in urban slum dwellers has surfaced to be equally deplorable and have less than 4% of government primary healthcare facilities.</p>
                                <button>Donate Now</button>
                            </div>
                        </div>
                    </div>

                    {{-- COMPAIGN BOX --}}
                    <div class="col-md-4">
                        <div class="campaignBox">
                            <figure>
                            <img src="{{ url('/images/vastardaan.jpg') }}" alt=""></figure>
                            <div class="campaignboxcontent">
                                <a href="#">Project - VastraDaan</a>
                                <p>Our Youngistaan Foundation are Helping poor needy people for donate clothes, for deferent slum areas. He has recently flagged off a pan India Vastra Daan or clothes donation drive.</p>
                                <button>Donate Now</button>
                            </div>
                        </div>
                    </div>

                    {{-- COMPAIGN BOX --}}
                    <div class="col-md-4">
                        <div class="campaignBox">
                            <figure>
                            <img src="{{ url('/images/new-youngitaan-water.jpg') }}" alt=""></figure>
                            <div class="campaignboxcontent">
                                <a href="#">Save Water Save Life</a>
                                <p>Being a socially responsible and environmentally conscious brand youngistaan launched Save Water Campaign. Let us together make the world a better place to live for the generations to come.</p>
                                <button>Donate Now</button>
                            </div>
                        </div>
                    </div>

                    {{-- COMPAIGN BOX --}}
                    <div class="col-md-4">
                        <div class="campaignBox">
                            <figure>
                            <img src="{{ url('/images/savetree.jpg') }}" alt=""></figure>
                            <div class="campaignboxcontent">
                                <a href="#">Save Environment & Trees</a>
                                <p>The greatest gift we can contribute to our mother earth is by planting trees and nourishing the earth with goodness of plants.</p>
                                <button>Donate Now</button>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        {{-- Our Partners --}}
        <div class="partnersMain row align-items-center">
            <div class="col-md-6">
                <h3>Our partners</h3>
                <h4>Everyone here is passionate about their work, incredibly smart, and genuinely kind.</h4>
                <p>Our partnerships with Government bodies, the Police and other organizations in the NGO ecosystem allow us to join hands with those who share our commitment and dedication to improving the lives of people in need through on-ground programs. With all of our outreach partners, Youngistaan Foundation ensures that our work is aligned with the 17 Youngistaan with Public Police Foundation of the United Nations. </p>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ url('/images/otobikescare.png') }}" alt="">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ url('/images/hitech.jpg') }}" alt="">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ url('/images/sm.jpeg') }}" alt="">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ url('/images/ossm.jpg') }}" alt="">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ url('/images/bom.jpg') }}" alt="">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ url('/images/eastman.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
