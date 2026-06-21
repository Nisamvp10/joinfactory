<?= view('frontend/inc/header') ?>

	<div class="page-header bg-section dark-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-3" data-cursor="-opaque">
                       
                            Contact us
                         </h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">
                                 
                                    Contact us</li>
                     

							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>





    <!-- Page Contact Us Start -->
    <div class="page-contact-us__ contact-section main-section ">
        <div class="container">
            <div class="inner-section align-items-center p-lg-5 p-md-4 p-3 bg-white">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <div class="section-title">
                            <h3 class="text-anime-style-3" data-cursor="-opaque">Get in Touch – We're Here to Help!</h3>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Dr. Ram Sudhan Subramaniyan is a highly respected expert in joint replacement, sports injuries, and musculoskeletal care. Specializing in knee, hip, and shoulder replacement improve their quality of life.
                            </p>
                        </div>
                        <div class="contact-form">
                             <form id="contactForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp">
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone No." required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="email" name ="email" class="form-control" id="email" placeholder="Email Address" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-12 mb-4">
                                    <textarea name="message" class="form-control" id="message" rows="4" placeholder="Write Message..."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="contact-form-btn">
                                        <button type="submit" class="btn-default"><span>submit now</span></button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                                <div class="contact-info-content pt-5">
                                <div class="follow-us">
                                    <h3 class="text-anime-style-3" data-cursor="-opaque">
                                        Follow Us
                                    </h3>
                                    <ul class="d-flex gap-3">
                                        <li>
                                            <a href="#">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-brands fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-brands fa-x-twitter"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            </div>
                        </form>
                        </div>
                        
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="contact-image">
                            <div class="profile-image">
                                <img src="<?= base_url('public/assets/template/images/contact-us.png')?>" alt="">
                            </div>
                            <div class="quick-contact">
                                <div class="row">
                                    <div class="quick-box d-flex align-items-center gap-4 mt-4">
                                        <div class="contactIcon">
                                            <img src="<?=base_url('public/assets/template/images/icon-phone.svg')?>" >
                                        </div>
                                        <div>
                                            <span>Contact Number</span>
                                            <a href="tel:+918129394980">(+91) 812 939 4980</a>
                                        </div>
                                    </div>

                                   
                                    <div class="quick-box d-flex align-items-center gap-4 mt-2">
                                        <div class="contactIcon">
                                            <img src="<?=base_url('public/assets/template/images/icon-mail.svg')?>" >
                                        </div>
                                        <div>
                                            <span>Mail Us</span>
                                            <a href="mailto:drsudhanofficial.com">drsudhanofficial.com</a>
                                        </div>
                                    </div>
                                    
                                    <div class="quick-box d-flex align-items-center gap-4 mt-2">
                                        <div class="contactIcon">
                                            <img src="<?=base_url('public/assets/template/images/icon-location.svg')?>" >
                                        </div>
                                        <div>
                                            <span>Location</span>
                                            9/38, Pulinchode, PO, Potta - Moonupeedika Rd, near pulinchode bus stop, <br>Pullur, Irinjalakuda, Kerala 680683
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
    <!-- Page Contact Us End -->



    <section class="main-section">
        <div class="container">
            <div class="inner-section">
                <div class="map-section p-lg-5 p-md-4 p-3">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="map-content">
                                  <div class="section-title">
                                    <h2 class="text-anime-style-3 ps-5 mb-2" data-cursor="-opaque">  
                                        Accessible Care across locations 
                                    </h2>
                                    <h3 class="wow fadeInUp"> Our Location & Accessibility  </h3>
                                    
                                    <p class="wow fadeInUp" data-wow-delay="0.2s">Dr.Ram Sudhan Subramaniyan expert orthopaedic care easily accessible to patients from various regions. Whether you're nearby, from another state, or traveling internationally, personalized support and advanced treatment options are available to ensure your journey to recovery is smooth, comfortable, and effective.</p>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="map-content">
                                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jvectormap-next/jquery-jvectormap.css">

                                <div id="world-map" style="width:100%;height:25em;  position:relative;"></div>
                                 <!-- <div id="world-map"></div> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Page Contact Us End -->
<?= view('frontend/inc/footerLink') ?>

    
</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jvectormap-next/jquery-jvectormap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jvectormap-content/world-mill.js"></script>

<div id="world-map" style="width:100%;height:700px;"></div>

<script>
$(function () {

    var markers = [

        {
            latLng: [10.345092167082514, 76.24562584417761],
            name: 'Dr Ram Sudhan Subramaniyan',
            description: 'Sports Injury & Joint Preservation Clinic',
            phone: '+91 812 939 4980',
            logo: '<?= base_url("public/assets/template/images/favicon.png") ?>',
            mapUrl: 'https://maps.google.com/?q=10.345092167082514,76.24562584417761'
        },

        {
            latLng: [10.398373571111666, 76.11489988650658],
            name: 'Ma Care Hospital',
            description: 'Diagnostic Center',
            phone: '+91 703 474 1741',
            logo: '<?= base_url("public/assets/template/images/favicon.png") ?>',
            mapUrl: 'https://maps.google.com/?q=10.398373571111666,76.11489988650658'
        },

        {
            latLng: [10.528554740285465, 76.22640614382127],
            name: 'Atreya Hospital',
            description: 'Best Multi Speciality Hospital in Thrissur',
            phone: '+91 812 939 4980',
            logo: '<?= base_url("public/assets/template/images/favicon.png") ?>',
            mapUrl: 'https://maps.google.com/?q=10.528554740285465,76.22640614382127'
        }
    ];

    var districtLabels = [

        {latLng:[12.4996,74.9869], name:'Kasaragod'},
        {latLng:[11.8745,75.3704], name:'Kannur'},
        {latLng:[11.6854,76.1320], name:'Wayanad'},
        {latLng:[11.2588,75.7804], name:'Kozhikode'},
        {latLng:[11.0510,76.0711], name:'Malappuram'},
        {latLng:[10.7867,76.6548], name:'Palakkad'},
        {latLng:[10.5276,76.2144], name:'Thrissur'},
        {latLng:[9.9816,76.2999], name:'Ernakulam'},
        {latLng:[9.5916,76.5222], name:'Idukki'},
        {latLng:[9.6858,76.5222], name:'Kottayam'},
        {latLng:[9.4981,76.3388], name:'Alappuzha'},
        {latLng:[9.2648,76.7870], name:'Pathanamthitta'},
        {latLng:[8.8932,76.6141], name:'Kollam'},
        {latLng:[8.5241,76.9366], name:'Thiruvananthapuram'}

    ];

    $('#world-map').vectorMap({

        map: 'world_mill',

        backgroundColor: 'transparent',

        zoomOnScroll: false,
        zoomMax: 100,
        zoomMin: 1,

        markers: markers,

        regionStyle: {
            initial: {
                fill: '#e0e0e0',
                stroke: '#ffffff',
                "stroke-width": 0.5
            }
        },

        markerStyle: {
            initial: {
                fill: '#d41a36',
                stroke: '#ffffff',
                "stroke-width": 2,
                r: 8
            }
        },

        onMarkerTipShow: function(event, label, index) {

            var marker = markers[index];

            label.html(
                '<div class="map-tooltip">'+
                    '<div><img src="'+marker.logo+'"></div>'+
                    '<div>'+
                        '<h5>'+marker.name+'</h5>'+
                        '<p>'+marker.description+'</p>'+
                        '<p><strong>'+marker.phone+'</strong></p>'+
                    '</div>'+
                '</div>'
            );
        },

        onMarkerClick: function(event, index) {
            window.open(markers[index].mapUrl, '_blank');
        }
    });

     var mapObject = $('#world-map').vectorMap('get', 'mapObject');

    function showDistrictLabels() {

        $('.district-label').remove();

        districtLabels.forEach(function(item) {

            var point = mapObject.latLngToPoint(
                item.latLng[0],
                item.latLng[1]
            );

            $('#world-map').append(
                '<div class="district-label" style="' +
                'position:absolute;' +
                'left:' + point.x + 'px;' +
                'top:' + (point.y - 20) + 'px;' +
                'transform:translate(-50%,-100%);' +
                'background:#fff;' +
                'padding:2px 5px;' +
                'border-radius:3px;' +
                'font-size:12px;' +
                'font-weight:bold;' +
                'white-space:nowrap;' +
                'pointer-events:none;' +
                'z-index:9999;">' +
                item.name +
                '</div>'
            );
        });
    }

    function hideDistrictLabels() {
        $('.district-label').remove();
    }

    // Initial state
    hideDistrictLabels();

    // Auto zoom after 5 seconds
    setTimeout(function () {

        mapObject.setFocus({
            lat: 10.8505,
            lng: 76.2711,
            scale: 60,
            animate: true
        });

        setTimeout(function () {
            showDistrictLabels();
        }, 1500);

    }, 5000);

    // Monitor zoom level
    setInterval(function(){

        var scale = mapObject.scale || 1;

        if(scale >= 40){

            if($('.district-label').length === 0){
                showDistrictLabels();
            }

        }else{

            hideDistrictLabels();

        }

    },500);

});
</script>
</html>