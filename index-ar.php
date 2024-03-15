<?php include("header-ar.php"); ?>

<!-- Start of Slider section
	============================================= -->
<div id="beez">
  <rs-module-wrap id="rev_slider_27_1_wrapper" data-alias="slider-7" data-source="gallery"
    style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
    <rs-module id="rev_slider_27_1" style="width:100%;" data-version="6.5.8">
      <rs-slides>
        <rs-slide style="position: absolute;" data-key="rs-70" data-title="Slide" data-thumb="assets/slider-1.jpg"
          data-fstransition="fade" data-in="o:0;" data-out="a:false;"> <img src="assets/slider-1.jpg" alt="Image"
            title="slider-1" width="1614" height="908" class="rev-slidebg tp-rs-img" data-parallax="3"
            data-panzoom="d:10000;ss:100;se:120%;" data-no-retina>
          <rs-layer id="slider-27-slide-70-layer-0" data-type="image" data-rsp_ch="on"
            data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
            data-dim="w:['100%','100%','100%','100%'];h:['100%','100%','100%','100%'];" data-basealign="slide"
            data-frame_999="o:0;st:w;" style="z-index:8;"><img src="assets/slider-shape1.png" alt="" class="tp-rs-img"
              width="1903" height="901" data-c="cover-proportional" data-no-retina> </rs-layer>
     
        </rs-slide>
    
        <rs-slide style="position: absolute;" data-key="rs-73" data-title="Slide" data-fstransition="fade"
          data-thumb="assets/slider-1-2.jpg" data-in="o:0;" data-out="a:false;"> <img src="assets/slider-1-2.jpg"
            alt="Image" title="slider-1" width="1614" height="908" class="rev-slidebg tp-rs-img" data-parallax="3"
            data-panzoom="d:10000;ss:100;se:120%;" data-no-retina>
          <rs-layer id="slider-27-slide-73-layer-0" data-type="image" data-rsp_ch="on"
            data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
            data-dim="w:['100%','100%','100%','100%'];h:['100%','100%','100%','100%'];" data-basealign="slide"
            data-frame_999="o:0;st:w;" style="z-index:8;"><img src="assets/slider-shape1.png" alt="" class="tp-rs-img"
              width="1903" height="901" data-c="cover-proportional" data-no-retina> </rs-layer>
         
        </rs-slide>
      </rs-slides>
    </rs-module>
  </rs-module-wrap>
</div>
<!-- End of Slider section
	============================================= -->
<!-- Start of featured section
	============================================= -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">حاسبة رسوم التوصيل</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                <div id="sidebar565"></div>
                <pre style="flex-grow: 1" id="response"></pre>
                
                <p>Number of Cartons: 5</p>
                <p>Weight : 45KG</p>
             
                </div>
      <div class="modal-footer">
        
        <p>Estimated Price: 299 SAR</p>
      </div>
    </div>
  </div>
</div>
<section id="ft-featured" class="ft-featured-section">
  <div class="container">
    <div class="ft-featured-content position-relative">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-6 wow fadeInUp mb-2" data-wow-delay="200ms" data-wow-duration="1500ms">
          <div class="ft-featured-innerbox position-relative">
            <div class="ft-featured-icon"> <i class="flaticon-pricing"></i> </div>
            <div class="ft-featured-text headline pera-content">
              <h3><a href="#">حاسبة رسوم التوصيل</a></h3>
              <div id="floating-panel" class="row">
              
                  <div class="col-md-6">
                    <label for="origin-input">من</label>
                    <input type="text" name="origin-input" id="origin-input" class=" drowp_select form-control">
                  </div>
              
                  <div class="col-md-6">
                    <label for="destination-input">إلى</label>
                    <input type="text" name="destination-input" id="destination-input" class=" drowp_select form-control">
                  </div>
                  <div id="mode-selector" class="controls" style="display: none;">
            <input type="radio" name="type" id="changemode-walking" checked="checked" />
            <label for="changemode-walking">المشي</label>

            <input type="radio" name="type" id="changemode-transit" />
            <label for="changemode-transit">عبور</label>

            <input type="radio" name="type" id="changemode-driving" />
            <label for="changemode-driving">القيادة</label>
        </div>
                  
                
              </div>
             
                <div id="map"></div>
                     
              <div class="booking-form-input-wrapper d-flex flex-wrap mt-2  row">
                <div class="col-md-6 mb-2">
                  <label class="booking-form-input position-relative "> <span class="booking-form-icon"><i
                        class="far fa-weight-hanging"></i></span>
                    <input type="text" placeholder="Weight">
                  </label>
                </div>
                <div class="col-md-6 mb-2">
                  <label class="booking-form-input position-relative "> <span class="booking-form-icon"><i
                        class="fas fa-dolly-flatbed-alt"></i></span>
                    <input type="text" placeholder="Number Of Cartons">
                  </label>
                </div>
              </div>
              <div class="ft-btn-2 ft-btn-22 text-center ">
                <button id="calculate" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> <i class="icon-first flaticon-right-arrow"></i> <span>احسب</span> </button>
               <!-- Modal -->


       
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-2 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
          <div class="ft-featured-innerbox position-relative">
            <div class="ft-featured-icon"> <i class="flaticon-deadline"></i> </div>
            <div class="ft-featured-text headline pera-content">
              <h3><a href="#">تتبع الوقت الحقيقي</a></h3>
              <form action="#">
                <div class="booking-form-input-wrapper d-flex flex-wrap pt-4 pb-4">
                  <label class="booking-form-input position-relative"> <span class="booking-form-icon"><i
                        class="flaticon-face-detection"></i></span>
                    <input type="text" placeholder="أرقام التتبع">
                  </label>
                  <div class="ft-btn-2 mt-3 pb-3">
                    <a href="#"> <i class="icon-first flaticon-right-arrow"></i> <span>تتبع الطلب الآن</span> </a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End of featured section
	============================================= -->
<!-- Start of About section
	============================================= -->
<section id="about-us" class="ft-about-section-3">
  <div class="container">
    <div class="ft-about-content-3">
      <div class="row v-m">
        <div class="col-lg-6 v-m-c wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
          <div class="ft-about-img-wrapper-3 position-relative">
            <div class="ft-about-img-3"> <img src="assets/img/about/ab2.png" alt=""> </div>
          </div>
        </div>
        <div class="col-lg-6 v-m-c">
          <div class="ft-about-text-3">
            <div class="ft-section-title-3 headline wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
              <h2>من نحن؟</h2>
            </div>
            <div class="ft-about-sub-text wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">شركة لوجستية سعودية تأسست عام 2014؛ لخلق حلول لوجستية مبتكرة لسد الفجوات في القطاع اللوجستي المحلي والعالمي، إن إدراكنا المبكر للفجوات جعلنا من أولى الشركات المحلية الرائدة في النقل المبرد مما ساعد مختلف القطاعات بالمملكة على النمو السريع والتوسع كقطاع التغذية والصحة والتجارة الإلكترونية.<br><br>
نظرا للخدمات اللوجستية الرائدة التي نقدمها ولأننا فهمنا دور الطرف الثالث أصبحنا خبراء في توفير حلول التوزيع والنقل بأنظمة متقدمة وسريعة تمكن شركائنا من التركيز على توسيع أعمالهم بالإضافة إلى توفير الوقت والتكلفة حيث خدمت بيز مئات المتاجر والعديد من المنشآت الحكومية والخاصة.


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End of About section
	============================================= -->
<!-- Start of About section
	============================================= -->
<section id="our-services" class="ft-thx-about-section">
  <div class="container">
    <div class="pr-cor-about-content">
      <div class="row">
        <div class="col-lg-6">
          <div class="pr-cor-about-text-wrap">
            <h3 class="mb-4">خدماتنا:</h3>
              <span class="pr-cor-title-tag ">تمتاز خدماتنا بتنوعها بالإضافة إلى تجددها الدائم لتلائم جميع احتياجات العملاء، نحن نسعى لتقديم كافة الخدمات بسرعة واحترافية وكفاءة عالية حيث نضمن لعملائنا تجربة لوجستية فريدة من نوعها.</span>
            <!--<div class="pr-cor-section-title headline pera-content wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="300ms">
								
								<h2>Hello! We are Logistics Company</h2>
								<p>Beez Logistics was established by a group of ambitious Saudi individuals in Riyadh, to provide solutions to complex gaps in the industry of Logistics. We consider ourselves experts in Lean Logistics because we understand the role of 3PL in providing a cost-efficient infrastructure to our partners. we are Innovative Logistics because we apply state of the art technology to our day to day operations. Our quality perspective in Logistics excels by customers’ satisfaction and experience.</p>
							</div>-->
            <div class="pr-cor-about-feature-area mt-3">
              <div class="row">
                <div class="col-md-12 col-lg-12">
                  <div class="pr-cor-about-feature-list align-items-center wow fadeInUp p-3" data-wow-delay="100ms"
                    data-wow-duration="1500ms">
                    <div class="pr-cor-about-ft-icon d-flex align-items-center justify-content-center"> <i
                        class="flaticon-package"></i> </div>
                    <div class="pr-cor-about-ft-text headline pera-content">
                      <h3>التخزين:- </h3>
                     <p>توفر بيز حلول التخزين المتنوعة لمختلف المنتجات مما جعلها الخيار الأول للعديد من الشركات والمؤسسات والمتاجر؛ وذلك لتعدد خياراتها وشمول التغطية الجغرافية بامتلاكها لـ 10 مستودعات بعدة مدن، واستخدامها لأنظمة متقدمة تتيح مراقبة المخزون والتحكم بدرجات الحرارة بحسب احتياج كل منتج.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-lg-12">
                  <div class="pr-cor-about-feature-list  align-items-center wow fadeInUp p-3" data-wow-delay="200ms"
                    data-wow-duration="1500ms">
                    <div class="pr-cor-about-ft-icon d-flex align-items-center justify-content-center"> <i
                        class="flaticon-delivery-truck"></i> </div>
                    <div class="pr-cor-about-ft-text headline pera-content">
                      <h3>أسطولنا: -</h3>
                     <p>تملك بيز أسطول مركبات مبردة وجافة على حد سواء، يمكنها باستمرار من مواجهة التحديات الكبيرة في سلسلة التوريد والخدمات اللوجستية التي تفرضها التحولات في الهيكل الاقتصادي والبنية التحتية للمدن فضلا عن أنظمة النقل في المملكة العربية السعودية.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-lg-12">
                  <div class="pr-cor-about-feature-list  align-items-center wow fadeInUp p-3" data-wow-delay="300ms"
                    data-wow-duration="1500ms">
                    <div class="pr-cor-about-ft-icon d-flex align-items-center justify-content-center"> <i
                        class="flaticon-shield-2"></i> </div>
                    <div class="pr-cor-about-ft-text headline pera-content">
                      <h3>إدارة سلاسل الإمداد:-</h3>
                     <p>حلول بيز للتوريد والتوزيع متقدمة ومواكبة لأحدث التطورات اللوجستية والتجارية لقطاعي الجملة والتجزئة مما يزيح العبء اللوجستي عن الشركات ويتيح لها بالتركيز على عملائها وزيادة مبيعاتها.</p>
                    </div>
                  </div>
                </div>
             
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="pr-cor-about-img-wrap position-relative mt-5 pt-3">
            <div class="pr-cor-about-img-area wow fadeInRight" data-wow-delay="700ms" data-wow-duration="400ms"> <img
                src="assets/img/about/ab1.jpg" alt=""> </div>
            <div class="pr-cor-about-img-shape position-absolute"> <img src="assets/img/shape/ab-sh1.png" alt=""> </div>
            <div class="pr-cor-about-img-area2 position-absolute wow fadeInUp" data-wow-delay="1200ms"
              data-wow-duration="500ms"> <img src="assets/img/about/ab2.jpg" alt=""> </div>
            <!--<div class="year-box">
              <div class="box-inner"> <strong>We believe</strong> ”the sky is the limit” </div>
            </div>-->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End of About section
	============================================= -->

<!-- Clients Section -->
<section class="ft1-feature-section" id="why-beez" style="background-image:url(assets/img/background/2.jpg)">
  <div class="auto-container">
    <!-- Sec Title -->
    <div class="sec-title light centered">
   <!--   <div class="title">Our Features</div>-->
      <h2>ما يميزنا!</h2>
      <!--<div class="text">Quis ipsum suspendisse ultrices gravida. Risus commodo <br> maecenas accumsan lacus vel facilisis.</div>-->
    </div>
    <div class="row clearfix">

      <!-- Feature Block Two -->
      <div class="ft1-feature-block-two col-lg-3 col-md-6 col-sm-12">
        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
          <div class="icon flaticon-pricing"></div>
          <h6>تسعير عادل</h6>
          <div class="text" id="box-1">نهتم بتطوير سلسلة التوريد لتقديم خدمات ذات قيمة عالية بأسعار تنافسية.
          </div>
        </div>
      </div>

      <!-- Feature Block Two -->
      <div class="ft1-feature-block-two col-lg-3 col-md-6 col-sm-12">
        <div class="inner-box wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
          <div class="icon flaticon-wallet"></div>
          <h6>تجهيز الطلبات</h6>
          <div class="text" id="box-2">اهتماما بتنوع احتياج ورغبات العملاء، نقدم خدمات تجهيز وتغليف الطلبات بالإضافة إلى إدارة المخزون بحلول ذات أنظمة متقدمة.</div>
        </div>
      </div>

      <!-- Feature Block Two -->
      <div class="ft1-feature-block-two col-lg-3 col-md-6 col-sm-12">
        <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
          <div class="icon flaticon-delivery"></div>
          <h6>التسليم في الوقت المحدد</h6>
          <div class="text" id="box-3">نحن نلتزم بتسليم الطلبات بأوقات التوصيل المتفق عليها بنسبة تتجاوز 95%.</div>
        </div>
      </div>

      <!-- Feature Block Two -->
      <div class="ft1-feature-block-two col-lg-3 col-md-6 col-sm-12">
        <div class="inner-box wow fadeInLeft" data-wow-delay="450ms" data-wow-duration="1500ms">
          <div class="icon flaticon-package"></div>
          <h6>سرعة الشحن</h6>
          <div class="text" id="box-4">شحن سريع يتجاوز التوقعات والتحديات.</div>
        </div>
      </div>
      <!-- Feature Block Two -->
      <div class="ft1-feature-block-two col-lg-3 col-md-6 col-sm-12">
        <div class="inner-box wow fadeInLeft" data-wow-delay="450ms" data-wow-duration="1500ms">
          <div class="icon flaticon-train"></div>
          <h6>التتبع المباشر </h6>
          <div class="text" id="box-5">نتيح لك خدمة تتبع الطرود بشكل لحظي من خلال موقعنا الإلكتروني.</div>
        </div>
      </div>
      <!-- Feature Block Two -->
      <div class="ft1-feature-block-two col-lg-3 col-md-6 col-sm-12">
        <div class="inner-box wow fadeInLeft" data-wow-delay="450ms" data-wow-duration="1500ms">
          <div class="icon flaticon-checkmark"></div>
          <h6>التخزين  </h6>
          <div class="text" id="box-6">توفر بيز حلول مبتكرة في التخزين وإدارة المخزون بمستودعات مجهزة بأفضل التقنيات والموارد تمكنها من تخزين مختلف المنتجات مثل المواد الغذائية والصحية والتجميلية بدرجات حرارة تناسب كل منتج سواء كان يحتاج الى التخزين المجمد او المبرد او بدرجة حرارة الغرفة، تحرص بيز على تهيئة الظروف الملائمة لكل منتج بدءًا من تخزينه إلى تجهيزه وتوصيله للعميل في الوقت المناسب والحالة المناسبة.</div>
        </div>
      </div>
      <!-- Feature Block Two -->
      <div class="ft1-feature-block-two col-lg-3 col-md-6 col-sm-12">
        <div class="inner-box wow fadeInLeft" data-wow-delay="450ms" data-wow-duration="1500ms">
          <div class="icon flaticon-delivery-1"></div>
          <h6>التوصيل بين المدن</h6>
          <div class="text" id="box-7">تملك بيز شبكة نقل متينة من المركبات الجافة والمبردة تربط بين أكثر من 46 مدينة و 4060 قرية، مزودة بأنظمة مراقبة لمتابعة حالة المنتجات، إن الحلول المبتكرة والفعالة التي تنشئها بيز تتيح لك التسليم والتوريد لفروعك وعملائك  من مدينتك إلى مختلف المدن الأخرى  بكل سهولة وسرعة.</div>
        </div>
      </div>
      <!-- Feature Block Two -->
      <div class="ft1-feature-block-two col-lg-3 col-md-6 col-sm-12">
        <div class="inner-box wow fadeInLeft" data-wow-delay="450ms" data-wow-duration="1500ms">
          <div class="icon flaticon-community"></div>
          <h6>خدمات لوجستية مخصصة</h6>
          <div class="text" id="box-8">تتخصص بيز في سلسلة التوريد والأنشطة اللوجستية إلى جانب تقديم خدمات ذات قيمة مضافة لعملائها على مستوى المملكة، حيث تتم دراسة العميل ومعرفة احتياجاته اللوجستية لتخصيص أنسب المركبات والقوى العاملة والخدمات التقنية للمساعدة في تنمية علامته التجارية.</div>
        </div>
      </div>
      <!-- Feature Block Two -->
      <div class="ft1-feature-block-two col-lg-3 col-md-6 col-sm-12">
        <div class="inner-box wow fadeInLeft" data-wow-delay="450ms" data-wow-duration="1500ms">
          <div class="icon flaticon-delivery-truck"></div>
          <h6>تسليم الميل الأخير</h6>
          <div class="text" id="box-9">برعت بيز بتسليم البضائع السريع والآمن للميل الأخير بابتكارها استراتيجيات وأنظمة مكنت الشركات من مواجهة التحديات والصعوبات في خدمات الميل الأخير الناتجة عن ارتفاع الطلب على التجارة الإلكترونية.</div>
        </div>
      </div>
      <!-- Feature Block Two -->
      <div class="ft1-feature-block-two col-lg-3 col-md-6 col-sm-12">
        <div class="inner-box wow fadeInLeft" data-wow-delay="450ms" data-wow-duration="1500ms">
          <div class="icon flaticon-digital-marketing"></div>
          <h6>التوريد والتوزيع</h6>
          <div class="text" id="box-10">أنظمتنا المتقدمة وحلولنا المبتكرة تمكن من توريد وتوزيع منتجاتك لكل مناطق المملكة بأقصى معايير الاحترافية</div>
        </div>
      </div>
      <!-- Feature Block Two -->
      <div class="ft1-feature-block-two col-lg-3 col-md-6 col-sm-12">
        <div class="inner-box wow fadeInLeft" data-wow-delay="450ms" data-wow-duration="1500ms">
          <div class="icon flaticon-global-shipping"></div>
          <h6>حلول سلسلة التوريد</h6>
          <div class="text" id="box-11">نحن نقدم حلول شاملة لخدمات سلسلة التوريد مما يجعل التوريد  بتعقيداته عملية مرنة وسهلة وذلك يمنح عملائنا القدرة على التنبؤ بالمطالب المستقبلية لأعمالهم، وتلبيتها في أقصر وقت ممكن بأقل التكاليف مما يحقق ربح أعلى ويجعل التجربة أكثر كفاءة وفعالية</div>
        </div>
      </div>
      <!-- Feature Block Two -->
      <div class="ft1-feature-block-two col-lg-3 col-md-6 col-sm-12">
        <div class="inner-box wow fadeInLeft" data-wow-delay="450ms" data-wow-duration="1500ms">
          <div class="icon flaticon-webpage"></div>
          <h6>بوابة الويب</h6>
          <div class="text" id="box-12">أنظمة بيز لخدمات النقل والتخزين والتوزيع تتوافق مع بوابات الويب، وتمكنك من مواجهة تحولات أسواق التجزئة وزيادة المبيعات.</div>
        </div>
        </div>
      <!-- Feature Block Two -->
      <div class="ft1-feature-block-two col-lg-3 col-md-6 col-sm-12">
        <div class="inner-box wow fadeInLeft" data-wow-delay="450ms" data-wow-duration="1500ms">
          <div class="icon flaticon-email"></div>
          <h6>الربط الإلكتروني</h6>
          <div class="text" id="box-13">تم تصميم أنظمة مرنة وحديثة وقابلة للتطوير لتسريع عمليات نقل البيانات بين بيز وعملائها، كما يوفر قسم تقنية المعلومات في بيز جميع الخدمات التي تلبي احتياجات وتطلعات العميل.</div>
        </div>    </div>
      <!-- Feature Block Two -->
      <div class="ft1-feature-block-two col-lg-3 col-md-6 col-sm-12">
        <div class="inner-box wow fadeInLeft" data-wow-delay="450ms" data-wow-duration="1500ms">
          <div class="icon flaticon-data-network"></div>
          <h6>تحليل البيانات ولوحة المعلومات</h6>
          <div class="text" id="box-14">تقوم أنظمتنا برصد تقارير مفصلة لحظية عن جميع العمليات اللوجستية المقدمة من بيز ويتم تزويد العملاء بلوحة تحكم شاملة تعرض البيانات التي تم تحليلها، وتسمح هذه التقارير للعملاء بمراقبة منتجاتهم ومعرفة سير العمليات وقياس مستوى رضا العملاء.</div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Clients Section -->


<!-- Start of Sponsor section
	============================================= -->
<section id="clients" class="ft-thx-sponsor-section">
  <div class="container">
    <div class="ft-section-title headline pera-content text-center">
      <h2>شركائنا </h2>
    </div>
    <div class="row">
      <div class="col-lg-2 col-md-3  col-xs-6 mb-3">
        <div class="inner-box wow fadeInLeft" data-wow-delay="400ms" delay="400ms" data-wow-duration="1500ms"> <img
            src="assets/img/sponsor/sp7.png" alt=""> </div>
      </div>
      <div class="col-lg-2 col-md-3  col-xs-6 mb-3">
        <div class="inner-box wow fadeInLeft" data-wow-delay="400ms" delay="400ms" data-wow-duration="1500ms"> <img
            src="assets/img/sponsor/sp1.png" alt=""> </div>
      </div>
      <div class="col-lg-2 col-md-3 col-xs-6 mb-3">
        <div class="inner-box wow fadeInLeft" delay="300ms" data-wow-delay="300ms" data-wow-duration="1500ms"> <img
            src="assets/img/sponsor/sp2.png" alt=""> </div>
      </div>
      <div class="col-lg-2 col-md-3 col-xs-6 mb-3">
        <div class="inner-box wow fadeInLeft" delay="200ms" data-wow-delay="100ms" data-wow-duration="1500ms"> <img
            src="assets/img/sponsor/sp3.png" alt=""> </div>
      </div>
      <div class="col-lg-2 col-md-3 col-xs-6 mb-3">
        <div class="inner-box wow fadeInRight" delay="200ms" data-wow-delay="100ms" data-wow-duration="1500ms"> <img
            src="assets/img/sponsor/sp4.png" alt=""> </div>
      </div>
      <div class="col-lg-2 col-md-3 col-xs-6 mb-3">
        <div class="inner-box wow fadeInRight" delay="400ms" data-wow-delay="300ms" data-wow-duration="1500ms"> <img
            src="assets/img/sponsor/sp5.png" alt=""> </div>
      </div>
      <div class="col-lg-2 col-md-3 col-xs-6 mb-3">
        <div class="inner-box wow fadeInRight" delay="500ms" data-wow-delay="500ms" data-wow-duration="1500ms"> <img
            src="assets/img/sponsor/sp6.png" alt=""> </div>
      </div>
    </div>
  </div>
</section>
<!-- End of Sponsor section
	============================================= -->
<!-- Start of Contact section
	============================================= -->
<section id="contact" class="ft-contact-section position-relative" data-background="assets/img/bg/cs-bg.jpg">
  <div class="container">
    <div class="ft-contact-content">
      <div class="ft-section-title headline pera-content">
        <!--	<span class="sub-title text-white">Project Estimateing</span>-->
        <h2 class="text-white">تواصل معنا 	</h2>
      </div>
      <div class="ft-contact-form-wrapper">
        <form action="#">
          <div class="row">
            <div class="col-md-12">
              <input type="text" placeholder="الاسم الكامل">
            </div>
            <div class="col-md-6">
              <input type="text" placeholder="البريد الإلكتروني">
            </div>
            <div class="col-md-6">
              <input type="text" placeholder="رقم الهاتف">
            </div>
            <div class="col-md-12">
              <textarea name="#" placeholder="رسالتك"></textarea>
            </div>
            <div class="col-md-12">
              <button class="ft-sb-button">تقدم الآن</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Location Section -->
  <section class="ft1-location-section">
    <div class="auto-container">
      <div class="inner-container">
        <div class="row clearfix">
          <!-- Column -->
          <div class="column col-lg-4 col-md-4 col-sm-12">
            <h6>عنوان المكتب</h6>
            <ul class="post-info">
              <li><span class="icon flaticon-dog-house"></span><a href="https://goo.gl/maps/VGwUUVP3qNfWo82N7"
                  target="_blank">
طريق الملك فهد الفرعي ، الرياض 12341 ، المملكة العربية السعودية</a></li>
            </ul>
          </div>
          <!-- Column -->
          <div class="column col-lg-4 col-md-4 col-sm-12">
            <h6>رقم هاتف</h6>
            <ul class="post-info">
              <li><span class="icon flaticon-telephone"></span>8001240172<br> 920017133
              </li>
            </ul>
          </div>
          <!-- Column -->
          <div class="column col-lg-4 col-md-4 col-sm-12">
            <h6>البريد الإلكتروني</h6>
            <ul class="post-info">
              <li><span class="icon flaticon-email"></span>info@beezlogistics.com<br> support@beezlogistics.com
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Location Section -->
</section>
<!-- End of Contact section
	============================================= -->

  <script>
        // This example requires the Places library. Include the libraries=places
        // parameter when you first load the API. For example:
        // <script

        // src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&libraries=places">
        function initMap() {
            const map = new google.maps.Map(document.getElementById("map"), {

                center: {
                    lat: 23.714322533493128,
                    lng: 46.23070774046321
                },
                zoom: 8,
            });

            new AutocompleteDirectionsHandler(map);
        }

        class AutocompleteDirectionsHandler {
            map;
            originPlaceId;
            destinationPlaceId;
            travelMode;
            directionsService;
            directionsRenderer;
            constructor(map) {
                    this.map = map;
                    this.originPlaceId = {
                            lat: 24.718782189838336,
                            lng: 46.66842377457022
                        },
                        this.destinationPlaceId = "";
                    this.travelMode = google.maps.TravelMode.DRIVING;
                    this.directionsService = new google.maps.DirectionsService();
                    this.directionsRenderer = new google.maps.DirectionsRenderer();
                    this.directionsRenderer.setMap(map);

                    const originInput = document.getElementById("origin-input");
                    const destinationInput = document.getElementById("destination-input");

                    // Specify just the place data fields that you need.
                    const originAutocomplete = new google.maps.places.Autocomplete(
                        originInput, {
                            fields: ["place_id"]
                        }
                    );
                    // Specify just the place data fields that you need.
                    const destinationAutocomplete = new google.maps.places.Autocomplete(
                        destinationInput, {
                            fields: ["place_id"]
                        }
                    );


                    this.setupClickListener(
                        "changemode-driving",
                        google.maps.TravelMode.DRIVING
                    );
                    this.setupPlaceChangedListener(originAutocomplete, "ORIG");
                    this.setupPlaceChangedListener(destinationAutocomplete, "DEST");
                    this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(originInput);
                    this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(
                        destinationInput
                    );
                    this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(modeSelector);
                }
                // Sets a listener on a radio button to change the filter type on Places
                // Autocomplete.
            setupClickListener(id, mode) {
                const radioButton = document.getElementById(id);

                radioButton.addEventListener("click", () => {
                    this.travelMode = mode;
                    this.route();
                });
            }
            setupPlaceChangedListener(autocomplete, mode) {
                autocomplete.bindTo("bounds", this.map);
                autocomplete.addListener("place_changed", () => {
                    const place = autocomplete.getPlace();

                    if (!place.place_id) {
                        window.alert("Please select an option from the dropdown list.");
                        return;
                    }

                    if (mode === "ORIG") {
                        this.originPlaceId = place.place_id;
                    } else {
                        this.destinationPlaceId = place.place_id;
                    }

                    this.route();
                });
            }
            route() {
                if (!this.originPlaceId || !this.destinationPlaceId) {
                    return;
                }

                const me = this;

                this.directionsService.route({
                        origin: {
                            lat: 24.718782189838336,
                            lng: 46.66842377457022
                        },
                        destination: {
                            placeId: this.destinationPlaceId
                        },
                        travelMode: this.travelMode,
                    },
                    (response, status) => {
                        if (status === "OK") {
                            me.directionsRenderer.setDirections(response);

                            //*********************************************************************************************************************************************************

                            const directionsRenderer = new google.maps.DirectionsRenderer();
                            const directionsService = new google.maps.DirectionsService();
                            const geocoder = new google.maps.Geocoder();
                            const service = new google.maps.DistanceMatrixService();

                            // build request
                            const origin1 = document.getElementById("origin-input").value;
                            //const origin1 ="Riyadh Saudi Arabia";
                            const destinationA = document.getElementById("destination-input").value;
                            //const destinationA ="Al Wisham, Riyadh Saudi Arabia";


                            const request = {
                                origins: [origin1],
                                destinations: [destinationA],
                                travelMode: google.maps.TravelMode.DRIVING,
                                unitSystem: google.maps.UnitSystem.METRIC,
                                avoidHighways: false,
                                avoidTolls: false,
                            };

                            // get distance matrix response
                            service.getDistanceMatrix(request).then((response) => {
                                // put response
                                document.getElementById("response").innerText = JSON.stringify(response, null, 2);
                                console.log(JSON.stringify(response, null, 2))
                                // show on map
                                const originList = response.originAddresses;
                                const destinationList = response.destinationAddresses;

                            });


                            //*********************************************************************************************************************************************************


                        } else {
                            window.alert("Directions request failed due to " + status);
                        }
                    }

                );

            }

        }
    </script>
<?php include("footer-ar.php"); ?>
<script>
  $(document).ready(function () {
    $(".ft-header-section.header-style-one .ft-main-navigation li a").on('click', function (event) {

      if (this.hash !== "") {

        event.preventDefault();

        var hash = this.hash;

        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 700, function () {
          window.location.hash = hash;
        });
      }
    });
  });
</script>
 <script>
document.getElementById("box-1").addEventListener("click", function() {
    this.classList.toggle("is-active");
});
document.getElementById("box-2").addEventListener("click", function() {
    this.classList.toggle("is-active");
});
document.getElementById("box-3").addEventListener("click", function() {
    this.classList.toggle("is-active");
});
document.getElementById("box-4").addEventListener("click", function() {
    this.classList.toggle("is-active");
});
document.getElementById("box-5").addEventListener("click", function() {
    this.classList.toggle("is-active");
});
document.getElementById("box-6").addEventListener("click", function() {
    this.classList.toggle("is-active");
});
document.getElementById("box-7").addEventListener("click", function() {
    this.classList.toggle("is-active");
});
document.getElementById("box-8").addEventListener("click", function() {
    this.classList.toggle("is-active");
});
document.getElementById("box-9").addEventListener("click", function() {
    this.classList.toggle("is-active");
});
document.getElementById("box-10").addEventListener("click", function() {
    this.classList.toggle("is-active");
});
document.getElementById("box-11").addEventListener("click", function() {
    this.classList.toggle("is-active");
});
document.getElementById("box-12").addEventListener("click", function() {
    this.classList.toggle("is-active");
});
document.getElementById("box-13").addEventListener("click", function() {
    this.classList.toggle("is-active");
});
document.getElementById("box-14").addEventListener("click", function() {
    this.classList.toggle("is-active");
});
document.getElementById("box-15").addEventListener("click", function() {
    this.classList.toggle("is-active");
});
</script>