@extends('layouts.front')
@section('content')

<div class="banner-sec about-banner pricing-banner w-100 float-left bg-light-black">
        <div class="wrapper2"> 
        <!-- plans -->
            
        </div>
        <div class="social-box">
            <ul class="mb-0 list-unstyled">
                <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                <li><a href="#"><i class="fas fa-image"></i></a></li>
                <li><a href="#"><i class="fas fa-comment-alt"></i></a></li>
            </ul>
        </div>



        <section class="breadcrumb-area ">
            <div class="text-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 v-center">
                            <div class="bread-inner">
                                <div class="bread-title">
                                    <h2>Our Pricing Packages</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="block-a1 pad-tb" style="background-image: url('/assets/images/ab.png'); background-repeat:no-repeat; background-size:cover; ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="common-heading ptag"> <span class="text-white">PACKAGES</span>
                            <h2 class="text-white">Reasonably Priced Deals</h2>
                            <p class="mb0 text-white">Check out the power-packed & pocket-friendly deals of Zenesa Digital catering to businesses of all sizes, types & backgrounds. </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="port-tab port_tab_mrg">
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#pricetab2" role="tab" aria-controls="nav-profile" aria-selected="false">Logo</a>
                          <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#pricetab4" role="tab" aria-controls="nav-contact" aria-selected="false">Branding</a>
                          <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#pricetab1" role="tab" aria-controls="nav-home" aria-selected="true">Logo + Branding</a>
                          <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#pricetab3" role="tab" aria-controls="nav-contact" aria-selected="false">Web Design</a>
                          <!-- <a class="nav-item nav-link active" id="nav-contact-tab" data-toggle="tab" href="#pricetab5" role="tab" aria-controls="nav-contact" aria-selected="false">Logo + Branding + Website</a> -->
                          <!--<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#pricetab5" role="tab" aria-controls="nav-contact" aria-selected="false">Digital Marketing</a>
                          <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#pricetab3" role="tab" aria-controls="nav-contact" aria-selected="false">Ecommerce</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="tab-content " id="nav-tabContent">
                        <div role="tabpanel" class="tab-pane fade active show" id="pricetab2">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-6">
                                <div class="pricing-table mt60"> 
            <div class="inner-table"> 
                <img src="assets/images/icons/plan-1.svg" alt="Personal" /> 
                <span class="title text-white">Basic Plan</span>
                <h2><sup>$</sup> 49</h2>
                <h4 class="text-white">2 LOGO CONCEPTS</h4>
                <div class="details text-white">
                    <ul>
                        <li class="multi-price-heading"><strong>Features</strong></li>
                        <li><i class="fas fa-check"></i> By 1 Experienced Designer</li>
                        <li><i class="fas fa-check"></i> 4 Free Revisions</li>
                        <li><i class="fas fa-check"></i> Dedicated Project Manager</li>
                        <li><i class="fas fa-check"></i> 24 - 48 Hours Delivery</li>
                        <li class="multi-price-heading"><strong>What you will Get?</strong></li>
                        <li><i class="fas fa-check"></i> 1 Finalized Logo</li>
                        <li><i class="fas fa-check"></i> 100% Ownership</li>
                        <li><i class="fas fa-check"></i> No Print-Ready PDF File</li>
                        <li><i class="fas fa-check"></i> No Vector EPS File</li>
                        <li><i class="fas fa-check"></i> No Editable Vector AI File</li>
                    </ul>
                    <a href="#" class="btn-main bg-btn lnk popup_open" onclick="orderNowValue(this)" data-price="49" name="for $49">
                        Get Started <i class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span>
                    </a>
                </div>

            </div>
          
        </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="pricing-table best-plan mt60 bg-gradient4">
                                        <div class="inner-table"> <img src="assets/images/icons/plan-2.svg" alt="Advance" /> <span class="title text-white" >Professional Plan </span>
                                            <h2><sup>$</sup> 99</h2>
                                            <h4 >4 LOGO CONCEPTS</h4>
                                            <div class="details ">
                                                <ul>
                                                  <li class="multi-price-heading"> <strong>Features</strong></li>
                                                  <li><i class="fas fa-check"></i> By 3 Experienced Designers</li>
                                                  <li><i class="fas fa-check"></i> 8 Free Revisions</li>
                                                  <li><i class="fas fa-check"></i> Dedicated Project Manager</li>
                                                  <li><i class="fas fa-check"></i> 24 - 48 Hours Delivery</li>
                                                  <li class="multi-price-heading"> <strong>What you will Get?</strong></li>
                                                  <li><i class="fas fa-check"></i> 1 Finalized Logo</li>
                                                  <li><i class="fas fa-check"></i> 100% Ownership</li>
                                                  <li><i class="fas fa-check"></i> Online JPEG & PNG Files</li>
                                                  <li><i class="fas fa-check"></i> Print Ready PDF File</li>
                                                  <li><i class="fas fa-check"></i> No Vector EPS File</li>
                                                  <li><i class="fas fa-check"></i> No Editable Vector AI File</li>
                                                </ul>
                                                <a href=" # " class="btn-main bg-btn3 lnk popup_open" onclick="order_now_value(this)" name="for $99">Get Started <i class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="pricing-table mt60">
                                        <div class="inner-table"> <img src="assets/images/icons/plan-3.svg" alt="Ultimate" /> <span class="title text-white">Premium Plan</span>
                                            <h2><sup>$</sup>149</h2>
                                            <h4 class="text-white">6 LOGO CONCEPTS</h4>
                                            <div class="details text-white">
                                                <ul>
                                                  <li class="multi-price-heading"> <strong>Features</strong></li>
                                                  <li><i class="fas fa-check"></i> By 5 Experienced Designers</li>
                                                  <li><i class="fas fa-check"></i> Unlimited Revisions</li>
                                                  <li><i class="fas fa-check"></i> Dedicated Project Manager</li>
                                                  <li><i class="fas fa-check"></i> 24 - 48 Hours Delivery</li>
                                                  <li class="multi-price-heading"> <strong>What you will Get?</strong></li>
                                                  <li><i class="fas fa-check"></i> 1 Finalized Logo</li>
                                                  <li><i class="fas fa-check"></i> 100% Ownership</li>
                                                  <li><i class="fas fa-check"></i> Online JPEG & PNG Files</li>
                                                  <li><i class="fas fa-check"></i> Print Ready PDF File</li>
                                                  <li><i class="fas fa-check"></i> Vector EPS File</li>
                                                  <li><i class="fas fa-check"></i> No Editable Vector AI File</li>
                                                </ul>
                                                <a href="# " class="btn-main bg-btn lnk popup_open" onclick="order_now_value(this)" name="for $149">Get Started <i class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                                <!-- <div class="col-md-2"> </div> -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="pricing-table mt60">
                                        <div class="inner-table"> <img src="assets/images/icons/plan-4.png" alt="Ultimate" /> <span class="title text-white">Deluxe Plan</span>
                                            <h2><sup>$</sup> 199</h2>
                                            <h4 class="text-white">Unlimited LOGO CONCEPTS</h4>
                                            <div class="details text-white">
                                                <ul>
                                                  <li class="multi-price-heading"> <strong>Features</strong></li>
                                                  <li><i class="fas fa-check"></i> By 8 Experienced Designers</li>
                                                  <li><i class="fas fa-check"></i> Unlimited Revisions</li>
                                                  <li><i class="fas fa-check"></i> Dedicated Project Manager</li>
                                                  <li><i class="fas fa-check"></i> 24 - 48 Hours Delivery</li>
                                                  <li class="multi-price-heading"> <strong>What you will Get?</strong></li>
                                                  <li><i class="fas fa-check"></i> 1 Finalized Logo</li>
                                                  <li><i class="fas fa-check"></i> 100% Ownership</li>
                                                  <li><i class="fas fa-check"></i> Online JPEG & PNG Files</li>
                                                  <li><i class="fas fa-check"></i> Print Ready PDF File</li>
                                                  <li><i class="fas fa-check"></i> Vector EPS File</li>
                                                  <li><i class="fas fa-check"></i> Editable Vector AI File</li>
                                                </ul>
                                                <a href="# " class="btn-main bg-btn lnk popup_open" onclick="order_now_value(this)" name="for $199">Get Started <i class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="pricetab4">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 col-md-6">
                                    <div class="pricing-table mt60">
                                        <div class="inner-table"> <img src="assets/images/icons/plan-1.svg" alt="Personal" /> <span class="title text-white">Startup Plan</span>
                                            <h2><sup>$</sup> 99</h2>
                                            <h4 class="text-white">BRANDING KIT</h4>
                                            <div class="details text-white">
                                                <ul>
                                                  <li><i class="fas fa-check"></i> Business Card Design</li>
                                                  <li><i class="fas fa-check"></i> Letter head Design</li>
                                                  <li><i class="fas fa-check"></i> Envelope Design</li>
                                                  <li><i class="fas fa-check"></i> MS Word Letterhead</li>
                                                  <li><i class="fas fa-check"></i> Email Signature Design</li>
                                                  <li><i class="fas fa-check"></i> Invoice Design</li>
                                                  <li><i class="fas fa-check"></i> Facebook Banner Design</li>
                                                  <li><i class="fas fa-check"></i> Youtube Banner Design</li>
                                                  <li><i class="fas fa-check"></i> Twitter Banner Design</li>
                                                  <li><i class="fas fa-check"></i> Linkedin Banner Design </li>
                                                  <li><i class="fas fa-check"></i> Logo Watermark</li>
                                                </ul>
                                                <a href="# " class="btn-main bg-btn lnk popup_open" onclick="order_now_value(this)" name="for $99">Get Started <i class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="pricing-table best-plan mt60 bg-gradient4">
                                        <div class="inner-table"> <img src="assets/images/icons/plan-2.svg" alt="Advance" /> <span class="title ">Professional Plan </span>
                                            <h2><sup>$</sup> 139</h2>
                                            <h4 >BRANDING KIT</h4>
                                            <div class="details ">
                                                <ul>
                                                  <li><i class="fas fa-check"></i> Business Card Design</li>
                                                  <li><i class="fas fa-check"></i> Letter head Design</li>
                                                  <li><i class="fas fa-check"></i> Envelope Design</li>
                                                  <li><i class="fas fa-check"></i> MS Word Letterhead</li>
                                                  <li><i class="fas fa-check"></i> Email Signature Design</li>
                                                  <li><i class="fas fa-check"></i> Invoice Design</li>
                                                  <li><i class="fas fa-check"></i> Facebook Banner Design</li>
                                                  <li><i class="fas fa-check"></i> Youtube Banner Design</li>
                                                  <li><i class="fas fa-check"></i> Twitter Banner Design</li>
                                                  <li><i class="fas fa-check"></i> Linkedin Banner Design </li>
                                                  <li><i class="fas fa-check"></i> Logo Watermark</li>
                                                  <li><i class="fas fa-check"></i> Favicon Design</li>
                                                  <li><i class="fas fa-check"></i> Polo/T-Shirt Design</li>
                                                  <li><i class="fas fa-check"></i> Cap/Hat Design</li>
                                                </ul>
                                                <a href="# " class="btn-main bg-btn3 lnk popup_open" onclick="order_now_value(this)" name="for $139">Get Started <i class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="pricing-table mt60">
                                        <div class="inner-table"> <img src="assets/images/icons/plan-3.svg" alt="Ultimate" /> <span class="title text-white">Corporate Plan</span>
                                            <h2 ><sup>$</sup> 249</h2>
                                            <h4 class="text-white">BRANDING KIT</h4>
                                            <div class="details text-white">
                                                <ul>
                                                  <li><i class="fas fa-check"></i> Business Card Design</li>
                                                  <li><i class="fas fa-check"></i> Letter head Design</li>
                                                  <li><i class="fas fa-check"></i> Envelope Design</li>
                                                  <li><i class="fas fa-check"></i> MS Word Letterhead</li>
                                                  <li><i class="fas fa-check"></i> Email Signature Design</li>
                                                  <li><i class="fas fa-check"></i> Invoice Design</li>
                                                  <li><i class="fas fa-check"></i> Facebook Banner Design</li>
                                                  <li><i class="fas fa-check"></i> Youtube Banner Design</li>
                                                  <li><i class="fas fa-check"></i> Twitter Banner Design</li>
                                                  <li><i class="fas fa-check"></i> Linkedin Banner Design </li>
                                                  <li><i class="fas fa-check"></i> Logo Watermark</li>
                                                  <li><i class="fas fa-check"></i> Favicon Design</li>
                                                  <li><i class="fas fa-check"></i> Polo/T-Shirt Design</li>
                                                  <li><i class="fas fa-check"></i> Cap/Hat Design</li>
                                                  <li><i class="fas fa-check"></i> Bag Design</li>
                                                  <li><i class="fas fa-check"></i> Signage Design</li>
                                                  <li><i class="fas fa-check"></i> Flyer Design</li>
                                                </ul>
                                                <a href="# " class="btn-main bg-btn lnk popup_open" onclick="order_now_value(this)" name="for $249">Get Started <i class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-md-2"> </div> -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="pricing-table mt60">
                                        <div class="inner-table"> <img src="assets/images/icons/plan-4.png" alt="Ultimate" /> <span class="title text-white">Ultimate Plan</span>
                                            <h2 ><sup>$</sup> 299</h2>
                                            <h4 class="text-white">BRANDING KIT</h4>
                                            <div class="details text-white">
                                                <ul>
                                                  <li><i class="fas fa-check"></i> Business Card Design</li>
                                                  <li><i class="fas fa-check"></i> Letter head Design</li>
                                                  <li><i class="fas fa-check"></i> Envelope Design</li>
                                                  <li><i class="fas fa-check"></i> MS Word Letterhead</li>
                                                  <li><i class="fas fa-check"></i> Email Signature Design</li>
                                                  <li><i class="fas fa-check"></i> Invoice Design</li>
                                                  <li><i class="fas fa-check"></i> Facebook Banner Design</li>
                                                  <li><i class="fas fa-check"></i> Youtube Banner Design</li>
                                                  <li><i class="fas fa-check"></i> Twitter Banner Design</li>
                                                  <li><i class="fas fa-check"></i> Linkedin Banner Design</li>
                                                  <li><i class="fas fa-check"></i> Logo Watermark</li>
                                                  <li><i class="fas fa-check"></i> Favicon Design</li>
                                                  <li><i class="fas fa-check"></i> Polo/T-Shirt Design</li>
                                                  <li><i class="fas fa-check"></i> Cap/Hat Design</li>
                                                  <li><i class="fas fa-check"></i> Bag Design</li>
                                                  <li><i class="fas fa-check"></i> Signage Design</li>
                                                  <li><i class="fas fa-check"></i> Flyer Design</li>
                                                  <li><i class="fas fa-check"></i> Car Wrap/Vinyl Design</li>
                                                  <li><i class="fas fa-check"></i> PPT Design</li>
                                                  <li><i class="fas fa-check"></i> Magnet Design</li>
                                                  <li><i class="fas fa-check"></i> Door Sign Design</li>
                                                  <li><i class="fas fa-check"></i> Menu Design</li>
                                                  <li><i class="fas fa-check"></i> Mug/Cup Design</li>
                                                </ul>
                                                <a href="# " class="btn-main bg-btn lnk popup_open" onclick="order_now_value(this)" name="for $199">Get Started <i class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade " id="pricetab1">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-6">
                                    <div class="pricing-table mt60">
                                        <div class="inner-table text-white"> <img src="assets/images/icons/plan-1.svg" alt="Personal" /> <span class="title text-white">Basic Plan </span>
                                            <h2><sup>$</sup> 89</h2>
                                            <div class="details text-white">
                                                <nav>
                                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#anav-home" role="tab" aria-controls="anav-home" aria-selected="true">Combo</a>
                                                  <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#anav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Logo</a>
                                                  <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#anav-about" role="tab" aria-controls="nav-about" aria-selected="false">Branding</a>
                                                </div>
                                              </nav>
                                              <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="anav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                  <ul>
                                                    <li><b>Basic Logo</b></li>
                                                    <li><i class="fas fa-check"></i> 2 Logo Concepts</li>
                                                    <li><i class="fas fa-check"></i> 3 Revisions</li>
                                                    <li><i class="fas fa-check"></i> No High Res. files</li>
                                                    <li><i class="fas fa-check"></i> 48 hours Delivery</li>
                                                    <li><i class="fas fa-check"></i> 100% Ownership</li>
                                                    <li><i class="fas fa-check"></i> JPG + PNG</li>
                                                    <li><b>Startup Branding</b></li>
                                                    <li><i class="fas fa-check"></i> Business Card Design</li>
                                                    <li><i class="fas fa-check"></i> Letterhead Design</li>
                                                    <li><i class="fas fa-check"></i> Envelope Design</li>
                                                    <li><i class="fas fa-check"></i> 100% Ownership</li>
                                                   </ul>
                                                </div>
                                                <div class="tab-pane fade" id="anav-contact" role="tabpanel" aria-labelledby="anav-contact-tab">
                                                  <ul>
                                                    <li><b>Basic Logo</b></li>
                                                    <li><i class="fas fa-check"></i> 2 Logo Concepts</li>
                                                    <li><i class="fas fa-check"></i> 3 Revisions</li>
                                                    <li><i class="fas fa-check"></i> No High Res. files</li>
                                                    <li><i class="fas fa-check"></i> 48 hours Delivery</li>
                                                    <li><i class="fas fa-check"></i> 100% Ownership</li>
                                                    <li><i class="fas fa-check"></i> JPG + PNG</li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane fade" id="anav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                                  <ul>
                                                    <li><b>Startup Branding</b></li>
                                                    <li><i class="fas fa-check"></i> Business Card Design</li>
                                                    <li><i class="fas fa-check"></i> Letterhead Design</li>
                                                    <li><i class="fas fa-check"></i> Envelope Design</li>
                                                    <li><i class="fas fa-check"></i> 100% Ownership</li>
                                                    </ul>
                                                    <a href="# " class="btn-main bg-btn lnk popup_open" onclick="order_now_value(this)" name="for $149">Get Started <i class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="pricing-table best-plan mt60 bg-gradient4 web-before-seller">
                                        <div class="inner-table"> <img src="assets/images/icons/plan-2.svg" alt="Advance" /> <span class="title text-white">Professional Plan</span>
                                            <h2><sup>$</sup> 219</h2>
                                            <div class="details ">
                                              <nav>
                                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Combo</a>
                                                  <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Logo</a>
                                                  <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Branding</a>
                                                </div>
                                              </nav>
                                                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                                  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                    <ul>
                                                    <li><b>Professional Logo</b></li>
                                                    <li><i class="fas fa-check"></i> 4 Logo Concepts</li>
                                                    <li><i class="fas fa-check"></i> 6 Revisions</li>
                                                    <li><i class="fas fa-check"></i> Custom Logo</li>
                                                    <li><i class="fas fa-check"></i> Vector PDF File</li>
                                                    <li><i class="fas fa-check"></i> 48 hours Delivery</li>
                                                    <li><i class="fas fa-check"></i> JPG + PDF + PNG</li>
                                                    <li><i class="fas fa-check"></i> 100% Ownership</li>
                                                    <li><b>Corporate Branding</b></li>
                                                    <li><i class="fas fa-check"></i> Business Card Design</li>
                                                    <li><i class="fas fa-check"></i> Letterhead Design</li>
                                                    <li><i class="fas fa-check"></i> Envelope Design</li>
                                                    <li><i class="fas fa-check"></i> Email Signature</li>
                                                    <li><i class="fas fa-check"></i> 2 Social Covers</li>
                                                    <li><i class="fas fa-check"></i> T-Shirt Design</li>
                                                    <li><i class="fas fa-check"></i> T-Shirt Design</li>
                                                   </ul>
                                                  </div>
                                                  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                    <ul>
                                                    <li><b>Professional Logo</b></li>
                                                    <li><i class="fas fa-check"></i> 4 Logo Concepts</li>
                                                    <li><i class="fas fa-check"></i> 6 Revisions</li>
                                                    <li><i class="fas fa-check"></i> Custom Logo</li>
                                                    <li><i class="fas fa-check"></i> Vector PDF File</li>
                                                    <li><i class="fas fa-check"></i> 48 hours Delivery</li>
                                                    <li><i class="fas fa-check"></i> JPG + PDF + PNG</li>
                                                    <li><i class="fas fa-check"></i> 100% Ownership</li>
                                                    </ul>
                                                  </div>
                                                  <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                                    <ul>
                                                    <li><b>Corporate Branding</b></li>
                                                    <li><i class="fas fa-check"></i> Business Card Design</li>
                                                    <li><i class="fas fa-check"></i> Letterhead Design</li>
                                                    <li><i class="fas fa-check"></i> Envelope Design</li>
                                                    <li><i class="fas fa-check"></i> Email Signature</li>
                                                    <li><i class="fas fa-check"></i> 2 Social Covers</li>
                                                    <li><i class="fas fa-check"></i> T-Shirt Design</li>
                                                    <li><i class="fas fa-check"></i> Web Banner Design</li>
                                                    </ul>
                                                    <a href="# " class="btn-main bg-btn3 lnk popup_open" onclick="order_now_value(this)" name="for $594">Get Started <i class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="pricing-table mt60">
                                        <div class="inner-table"> <img src="assets/images/icons/plan-3.svg" alt="Ultimate" /> <span class="title text-white">Corporate Plan</span>
                                            <h2><sup>$</sup> 299</h2>
                                            <div class="details text-white">
                                              <nav>
                                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#bnav-home" role="tab" aria-controls="nav-home" aria-selected="true">Combo</a>
                                                  <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#bnav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Logo</a>
                                                  <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#bnav-about" role="tab" aria-controls="nav-about" aria-selected="false">Branding</a>
                                                </div>
                                              </nav>
                                              <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="bnav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                  <ul>
                                                    <li><b>Premium Logo</b></li>
                                                    <li><i class="fas fa-check"></i> 6 Logo Concepts</li>
                                                    <li><i class="fas fa-check"></i> Unlimited Revision</li>
                                                    <li><i class="fas fa-check"></i> Custom Logo</li>
                                                    <li><i class="fas fa-check"></i> Vector EPS , PDF file</li>
                                                    <li><i class="fas fa-check"></i> 24-48 H Delivery</li>
                                                    <li><i class="fas fa-check"></i> JPG + PDF + PNG + EPS</li>
                                                    <li><i class="fas fa-check"></i> 100% Ownership</li>
                                                    <li><b>Ultimate Branding</b></li>
                                                    <li><i class="fas fa-check"></i> Business Card Design</li>
                                                    <li><i class="fas fa-check"></i> Letterhead Design</li>
                                                    <li><i class="fas fa-check"></i> Envelope Design</li>
                                                    <li><i class="fas fa-check"></i> Email Signature</li>
                                                    <li><i class="fas fa-check"></i> 4 Social Coverss</li>
                                                    <li><i class="fas fa-check"></i> T-Shirt Design</li>
                                                    <li><i class="fas fa-check"></i> Web Banner Design</li>
                                                    <li><i class="fas fa-check"></i> Signage Design</li>
                                                    <li><i class="fas fa-check"></i> Car Stickers Design</li>
                                                   </ul>
                                                </div>
                                                <div class="tab-pane fade" id="bnav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                  <ul>
                                                    <li><b>Premium Logo</b></li>
                                                    <li><i class="fas fa-check"></i> 6 Logo Concepts</li>
                                                    <li><i class="fas fa-check"></i> Unlimited Revision</li>
                                                    <li><i class="fas fa-check"></i> Custom Logo</li>
                                                    <li><i class="fas fa-check"></i> Vector EPS , PDF file</li>
                                                    <li><i class="fas fa-check"></i> 24-48 H Delivery</li>
                                                    <li><i class="fas fa-check"></i> JPG + PDF + PNG + EPS</li>
                                                    <li><i class="fas fa-check"></i> 100% Ownership</li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane fade" id="bnav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                                  <ul>
                                                    <li><b>Ultimate Branding</b></li>
                                                    <li><i class="fas fa-check"></i> Business Card Design</li>
                                                    <li><i class="fas fa-check"></i> Letterhead Design</li>
                                                    <li><i class="fas fa-check"></i> Envelope Design</li>
                                                    <li><i class="fas fa-check"></i> Email Signature</li>
                                                    <li><i class="fas fa-check"></i> 4 Social Covers</li>
                                                    <li><i class="fas fa-check"></i> T-Shirt Design</li>
                                                    <li><i class="fas fa-check"></i> Web Banner Design</li>
                                                    <li><i class="fas fa-check"></i> Signage Design</li>
                                                    <li><i class="fas fa-check"></i> Car Stickers Design</li>
                                                    </ul>
                                                    <a href=" # " class="btn-main bg-btn lnk popup_open" onclick="order_now_value(this)" name="for $994">Get Started <i class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                                <div class=" col-lg-4 col-md-6 ">
                                    <div class="pricing-table best-plan mt60 bg-gradient4">
                                        <div class="inner-table"> <img src="assets/images/icons/plan-4.png" alt="Advance" /> <span class="title text-white">Ultimate Plan</span>
                                            <h2><sup>$</sup> 599</h2>
                                            <div class="details text-white">
                                              <nav>
                                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#cnav-home" role="tab" aria-controls="nav-home" aria-selected="true">Combo</a>
                                                  <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#cnav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Logo</a>
                                                  <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#cnav-about" role="tab" aria-controls="nav-about" aria-selected="false">Branding</a>
                                                </div>
                                              </nav>
                                              <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="cnav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                  <ul>
                                                    <li><b>Deluxe Logo</b></li>
                                                    <li><i class="fas fa-check"></i> Unlimited Logo Concepts</li>
                                                    <li><i class="fas fa-check"></i> Unlimited Revision</li>
                                                    <li><i class="fas fa-check"></i>  Custom Logo</li>
                                                    <li><i class="fas fa-check"></i> Editable Vector Ai</li>
                                                    <li><i class="fas fa-check"></i> 24-48 H Delivery </li>
                                                    <li><i class="fas fa-check"></i> Vector EPS, PDF</li>
                                                    <li><i class="fas fa-check"></i> JPG + PDF + PNG + EPS + AI</li>
                                                    <li><i class="fas fa-check"></i> 100% Ownership</li>
                                                    <li><i class="fas fa-check"></i> Business Card Design</li>
                                                    <li><b>Ultimate Branding</b></li>
                                                    <li><i class="fas fa-check"></i> Business Card Design</li>
                                                    <li><i class="fas fa-check"></i> Letterhead Design</li>
                                                    <li><i class="fas fa-check"></i> Envelope Design</li>
                                                    <li><i class="fas fa-check"></i> Email Signature</li>
                                                    <li><i class="fas fa-check"></i> 4 Social Covers</li>
                                                    <li><i class="fas fa-check"></i> T-Shirt Design</li>
                                                    <li><i class="fas fa-check"></i> Web Banner Design</li>
                                                    <li><i class="fas fa-check"></i> Signage Design</li>
                                                    <li><i class="fas fa-check"></i> Car Stickers Design</li>
                                                </ul>
                                                </div>
                                                <div class="tab-pane fade" id="cnav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                  <ul>
                                                    <li><b>Deluxe Logo</b></li>
                                                    <li><i class="fas fa-check"></i> Unlimited Logo Concepts</li>
                                                    <li><i class="fas fa-check"></i> Unlimited Revision</li>
                                                    <li><i class="fas fa-check"></i>  Custom Logo</li>
                                                    <li><i class="fas fa-check"></i> Editable Vector Ai</li>
                                                    <li><i class="fas fa-check"></i> 24-48 H Delivery </li>
                                                    <li><i class="fas fa-check"></i> Vector EPS, PDF</li>
                                                    <li><i class="fas fa-check"></i> JPG + PDF + PNG + EPS + AI</li>
                                                    <li><i class="fas fa-check"></i> 100% Ownership</li>
                                                    <li><i class="fas fa-check"></i> Business Card Design</li>
                                                </ul>
                                                </div>
                                                <div class="tab-pane fade" id="cnav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                                  <ul>
                                                    <li><b>Ultimate Branding</b></li>
                                                    <li><i class="fas fa-check"></i> Business Card Design</li>
                                                    <li><i class="fas fa-check"></i> Letterhead Design</li>
                                                    <li><i class="fas fa-check"></i> Envelope Design</li>
                                                    <li><i class="fas fa-check"></i> Email Signature</li>
                                                    <li><i class="fas fa-check"></i> 4 Social Covers</li>
                                                    <li><i class="fas fa-check"></i> T-Shirt Design</li>
                                                    <li><i class="fas fa-check"></i> Web Banner Design</li>
                                                    <li><i class="fas fa-check"></i> Signage Design</li>
                                                    <li><i class="fas fa-check"></i> Car Stickers Design</li>
                                                  </ul>
                                                  <a href=" # " class="btn-main bg-btn3 lnk popup_open" onclick="order_now_value(this)" name="for $1524">Get Started <i class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div role="tabpanel" class="tab-pane fade" id="pricetab3">
                            <div class="row justify-content-center">
                                <div class="port-tab port_tab_mrg">
                                    <!-- <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist"> <a class="nav-item nav-link active" id="nav-home-tab1" data-toggle="tab" href="#portftab11" role="tab" aria-controls="nav-home" aria-selected="true">SEO</a> <a class="nav-item nav-link" id="nav-profile-tab2" data-toggle="tab" href="#portftab12" role="tab" aria-controls="nav-profile" aria-selected="false">SMM</a></div> -->
                                </div>
                                <div class="col-sm-12 dm-tab">
                                    <div class="tab-content " id="nav-tabContent2">
                                        <div role="tabpanel" class="tab-pane fade show active" id="portftab11">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-4 col-lg-offset-2">
                                                    <div class="pricing-table  mt60 ">
                                                        <div class="inner-table"> <img src="assets/images/icons/plan-1.svg" alt="Personal" /> <span class="title text-white">HTML</span>
                                                            <h2><sup>$</sup> 499</h2>
                                                            <h6 class="text-white">5 PAGE STATIC WEBSITE</h6>
                                                            <div class="details text-white">
                                                                <ul>
                                                                    <li> Jquery Slider Banner</li>
                                                                    <li>W3C Certified HTML</li>
                                                                    <li>UI Design</li>
                                                                    <li>3 Banner Design</li>
                                                                    <li>Favicon</li>
                                                                    <li>SEO Friendly Design</li>
                                                                </ul>
                                                                <a href="#" class="btn-main bg-btn3 lnk popup_open" onclick="order_now_value(this)" name="for $599 ">Get Started <i class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="pricing-table mt60 bg-gradient4 best-plan">
                                                        <div class="inner-table"> <img src="assets/images/icons/plan-2.svg" alt="Advance" /> <span class="title ">CMS</span>
                                                            <h2><sup>$</sup> 999</h2>
                                                            <h6 >5 PAGES DYNAMIC WEBSITE</h6>
                                                            <div class="details">
                                                                <ul>
                                                                    <li>Web Development</li>
                                                                    <li>W3C Certified HTML</li>
                                                                    <li>Web Design & UI</li>
                                                                    <li>10 Stock Images</li>
                                                                    <li>5 Banner Designs</li>
                                                                    <li>Advance UI Effects</li>
                                                                    <li>SEO Friendly Design</li>
                                                                    <li>SEO Friendly Sitemap</li>
                                                                    <li>On Page Optimization</li>
                                                                    <li>Social Media Inte</li>
                                                                    <li>4 Social Platforms</li>
                                                                </ul>
                                                                <a href="#" class="btn-main bg-btn lnk popup_open" onclick="order_now_value(this)" name="for $699 ">Get Started <i class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="pricing-table mt60">
                                                        <div class="inner-table"> <img src="assets/images/icons/plan-2.svg" alt="Advance" /> <span class="title text-white">E-Commerce</span>
                                                            <h2><sup>$</sup> 1999</h2>
                                                            <h6 class="text-white">Unlimited PAGES</h6>
                                                            <div class="details text-white">
                                                                <ul>
                                                                    <li>Web Development</li>
                                                                    <li>W3C Certified HTML</li>
                                                                    <li>Admin Panel Support</li>
                                                                    <li>Mobile Responsive Layout</li>
                                                                    <li>Customers Login Area</li>
                                                                    <li>Cart Integration</li>
                                                                    <li>Pay. Module Integration</li>
                                                                    <li>Inventory Mangement</li>
                                                                    <li>Unltd. Products & Cate</li>
                                                                    <li>Inclusion of anchors Tags</li>
                                                                    <li>Product Reviews</li>
                                                                    <li>Web Design & UI</li>
                                                                    <li>15 Stock Images</li>
                                                                    <li>8 Banner Designs</li>
                                                                    <li>Favicon</li>
                                                                    <li>Advance UI Effects</li>
                                                                    <li>Basic Search Engine Submission</li>
                                                                    <li>SEO Friendly Design</li>
                                                                    <li>SEO Friendly Sitemap</li>
                                                                    <li>Analytics Integration</li>
                                                                    <li>On Page Optimization</li>
                                                                    <li>Social Media Integration</li>
                                                                    <li>4 Social Platforms</li>
                                                                </ul>
                                                                <a href="# " class="btn-main bg-btn lnk popup_open" onclick="order_now_value(this)" name="for $699 ">Get Started <i class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="pricing-table bg-gradient4 mt60">
                                                        <div class="inner-table"> <img src="assets/images/icons/plan-2.svg" alt="Advance" /> <span class="title text-white">Portal</span>
                                                            <h2><sup>$</sup> 3999</h2>
                                                            <h6 >Any PAGES</h6>
                                                            <div class="details ">
                                                                <ul>
                                                                    <li>Web Development</li>
                                                                    <li>Any One:</li>
                                                                    <li>Job Portal</li>
                                                                    <li>Professional Network</li>
                                                                    <li>Social Network</li>
                                                                    <li>Media Portal</li>
                                                                    <li>Real Estate Portal</li>
                                                                    <li>Medical Portal</li>
                                                                    <li>News Portal</li>
                                                                    <li>Enterprise Portal</li>
                                                                    <li>Client/User Dashboard</li>
                                                                    <li>Custom Coding</li>
                                                                    <li>Module-wise Architecture</li>
                                                                    <li>Extensive Admin Panel</li>
                                                                    <li>Complete Deployment</li>
                                                                </ul>
                                                                <a href="# " class="btn-main bg-btn lnk popup_open" onclick="order_now_value(this)" name="for $699 ">Get Started <i class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade " id="portftab12">
                                            <div class="row justify-content-center">
                                                <!-- <div class="col-lg-4 col-md-6"> <div class="pricing-table mt60"> <div class="inner-table"> <img src="images/icons/plan-3.svg" alt="Ultimate"/> <span class="title">Startup SMM Package</span> <h2><sup>$</sup> 250</h2> <div class="details"> <ul> <li> 3 Social Media Channels (Facebook / Twitter / Instagram) </li><li> Social media account setup </li><li> 1 Post Design </li><li> 1 Cover Banner</li></ul> </div></div><a href="" class="btn-main bg-btn lnk popup_open" onclick="order_now_value(this)" name="for $250">Get Started <i class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a> </div></div>-->
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="pricing-table  mt60 ">
                                                        <div class="inner-table"> <img src="assets/images/icons/plan-1.svg" alt="Advance" /> <span class="title text-white">STARTUP</span>
                                                            <h2><sup>$</sup> 349<sub>.99</sub></h2>
                                                            <div class="details text-white">
                                                                <ul>
                                                                    <li> 3 postings per week (per network) Facebook + Twitter + Instagram + Google+ </li>
                                                                    <li> Content Creation </li>
                                                                    <li> Business Page Optimization </li>
                                                                    <li> Social Media Strategy (Overview) </li>
                                                                    <li>Facebook Likes Campaign </li>
                                                                    <li> Monthly Progress report </li>
                                                                    <li> Copy Writing</li>
                                                                </ul>
                                                            </div>
                                                        </div><a href="# " class="btn-main bg-btn3 lnk popup_open" onclick="order_now_value(this)" name="for $600 ">Get Started <i class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="pricing-table mt60 bg-gradient4 best-plan">
                                                        <div class="inner-table"> <img src="assets/images/icons/plan-2.svg" alt="Ultimate" /> <span class="title text-white">SCALING</span>
                                                            <h2><sup>$</sup> 699<sub>.99</sub></h2>
                                                            <div class="details text-white">
                                                                <ul>
                                                                    <li> Copywriting & Visual designs </li>
                                                                    <li> Business Page Optimization </li>
                                                                    <li> Ad Campaign Management </li>
                                                                    <li> Spam monitoring </li>
                                                                    <li> Monthly Progress report </li>
                                                                    <li> 5 postings per week Facebook + Twitter + Instagram + Google+ </li>
                                                                    <li> Reputation Management </li>
                                                                    <li> Social Account Setup </li>
                                                                    <li> Content Creation </li>
                                                                    <li> Social Media Listening </li>
                                                                    <li> Query and comments reply</li>
                                                                </ul>
                                                                <a href="# " class="btn-main bg-btn lnk popup_open" onclick="order_now_value(this)" name="for $1200 ">Get Started <i class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 ">
                                                    <div class="pricing-table mt60">
                                                        <div class="inner-table"> <img src="assets/images/icons/plan-3.svg" alt="Ultimate" /> <span class="title text-white">VENTURE</span>
                                                            <h2><sup>$</sup> 1,199<sub>.99</sub></h2>
                                                            <div class="details text-white">
                                                                <ul>
                                                                    <li> Copywriting & Visual designs </li>
                                                                    <li> Business Page Optimization </li>
                                                                    <li> Ad Campaign Management </li>
                                                                    <li> Spam monitoring </li>
                                                                    <li> 6 postings per week Facebook + Twitter + Instagram + Google+ </li>
                                                                    <li> Reputation Management </li>
                                                                    <li> Social Account Setup </li>
                                                                    <li> Content Creation </li>
                                                                    <li> Social Media Hearing </li>
                                                                    <li> Query and comments reply</li>
                                                                </ul>
                                                                <a href="# " class="btn-main bg-btn lnk popup_open" onclick="order_now_value(this)" name="for $2000 ">Get Started <i class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection