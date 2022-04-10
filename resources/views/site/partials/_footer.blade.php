
<!-- BEGIN: Footer-->
<?php
    $footer=App\Models\Footer::all()->last();
    $contact=\App\Models\Contact_Us::all()->last();
?>
<footer class="footer_sec container-fluid">
    <div class="row qcicons_mrow back_grdrk">
        <div class="col-md-12 ftr_links_mcol p-4">
            <div class="row">

                <div class="col-md-8 txt_crm font12 m-auto">
                    
                    <?php echo $footer->description;?>

                </div>

                <div class="col-md-4">
                    <div class="row namads_row justify-content-center">
                        <div class="col-md-8 ftlogo_imgcol">
                            <img class="ftlogo_img" src="{{'/images/footer/'.$footer->image}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row ftr_linksrow back_crm">

        <div class="col-md-12 ftr_links_mcol">
            <div class="row">
                <div class="col-md-8">
                    <div class="row  ft_mincol  pt-4">
                        <div class="col-md-12 ft_linkscol pr-5">
                            <div class="row ft_linksrow">
                                <div class="col-md-4 ft_ulcol pr-0">
                                    <ul class="inrpages_footer_li_ul list-unstyled pr-0 bold">
                                        <li class="pb-2 txt_dgray font13 text-justify">
                                            <span><i class="fas fa-fw font15 fa-map-marker-alt"></i></span>
                                            <span class="pr-2">دفتر مرکزی :</span>
                                            @if($contact)
                                            {{$contact->address}}
                                            @endif
                                        </li>
                                        <li class="pb-2 txt_dgray ">
                                            <i class="fa fa-phone fa-fw font15"></i>
                                            @if($contact)
                                            {{$contact->phone}}
                                            @endif
                                        </li>

                                        <li class="pb-2 txt_dgray lato">
                                            <i class="fa fa-fw fa-envelope font15  "></i>
                                            @if($contact)
                                            {{$contact->email}}
                                            @endif
                                         </li>
                                        <li class="pt-2 txt_dgray normal">


                                            <div class="row ftsc_row ">
                                                <div class="col-md-1 ftsc_col">
                                                    <a  @if($contact) href="{{$contact->telegram}}" @endif class="sc_linkitem txt_dgray">
                                                        <i class="fab fa-fw fa-telegram font20"></i>
                                                    </a>
                                                </div>
                                                <div class="col-md-1 ftsc_col">
                                                    <a  @if($contact) href="{{$contact->instagram}}" @endif class="sc_linkitem txt_dgray">
                                                        <i class="fab fa-fw fa-instagram font20"></i>
                                                    </a>
                                                </div>
                                                <div class="col-md-1 ftsc_col ">
                                                    <a  @if($contact) href="{{$contact->facebook}}" @endif class="sc_linkitem txt_dgray">
                                                        <i class="fab fa-fw fa-facebook font20"></i></a>
                                                </div>
                                                <div class="col-md-1 ftsc_col">
                                                    <a  @if($contact) href="{{$contact->linkedin}}" @endif class="sc_linkitem txt_dgray">
                                                        <i class="fab fa-fw fa-linkedin font20"></i></a>
                                                </div>
                                            </div>

                                        </li>

                                    </ul>
                                </div>
                                <div class="col-md-4 ft_ulcol pr-0">
                                    <ul class="inrpages_footer_li_ul list-unstyled bold">
                                        <li class="pb-2"><a class="txt_dgray" href="about_us.html" >درباره ی ما</a></li>
                                        <li class="pb-2"><a class="txt_dgray" href="contact_us.html" >تماس با ما</a></li>
                                        <li class="pb-2"><a class="txt_dgray" href="faq_page.html" >سوالات متداول</a></li>
                                        <li class="pb-2"><a class="txt_dgray" href="faq_page.html">راهنمای خرید</a></li>
                                        <li class="pb-2"><a class="txt_dgray" href="faq_page.html">قوانین و مقررات</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4 ft_ulcol pr-0">
                                    <ul class="inrpages_footer_li_ul list-unstyled bold">
                                        <li class="pb-2"><a class="txt_dgray" href="faq_page.html" >نحوه ثبت سفارش</a></li>
                                        <li class="pb-2"><a class="txt_dgray" href="faq_page.html" >رویه ارسال سفارش</a></li>
                                        <li class="pb-2"><a class="txt_dgray" href="user_profile.html">پیگیری سفارش</a></li>
                                        <li class="pb-2"><a class="txt_dgray" href="faq_page.html">شرایط استفاده</a></li>
                                        <li class="pb-2"><a class="txt_dgray" href="faq_page.html">رویه بازگرداندن کالا</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row namads_row  pt-4">
                        <div class="samandehi_col col-md-4 offset-md-2">
                            <img class="e_imgst" src="img/samandehi.png">
                        </div>
                        <div class="e_namad_col col-md-6">

                            <img class="e_imgst" src="img/namad1.png">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row back_org">
        <div class="col-12 col-md-12 txt_crm p-2">
            <div class="row ft_cprow justify-content-center text-center">
                <div class="col-md-6 ft_cpcol font13 ">
                    تمامی حقوق برای سایت کانون رشد خلاق مکعب محفوظ می باشد. Powered by <a title="" class="txt_grdrk " href="http://fanacmp.ir/">FANA</a>
                </div>

            </div>
        </div>
    </div>
</footer>
