<?= view('frontend/inc/header') ?>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<div class="page-header bg-section dark-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-3" data-cursor="-opaque">Surgeon Profile

                         </h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Surgeon Profile</li>
                     

							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>



    <div class="page-team-single main-section p-0">
        <div class="container">
            <div class="inner-section bg-white p-3">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Team Single Box Start -->
				    <div class="page-team-single-box">
                        <!-- Team Member Info Box Start -->
                        <div class="team-member-info-box">
                            <!-- Team Member Image Start -->
                            <div class="team-member-image">
                                <figure class="image-anime reveal">
                                    <img src="<?=base_url('public/assets/template/images/dr1.webp') ?>" alt="">
                                </figure>
                            </div>
                            <!-- Team Member Image End -->

                            <!-- Team Member Content Start -->
                            <div class="team-member-content">
                                <!-- Member Content Header Start -->
                                <div class="section-title">
                                    <h3 class="wow fadeInUp">Dr. Ram Sudhan Subramaniyan </h3>
                                    <h2 class="text-anime-style-3" data-cursor="-opaque"> EXPERT ARTHROSCOPIST AND JOINT SURGEON</h2>
                                    <p class="wow fadeInUp" data-wow-delay="0.2s">Associate Prof. Dr. Ram Sudhan Subramaniyan is a specialist in Sports surgeries and joint reconstruction with a special interest in "joint preservation" of the Hip, shoulder, and knee. He is a pioneer in Hip arthroscopy and preservation in Kerala. He is a notable alumnus of Annamalai University and graduated with a medical degree from Rajah Muthiah Medical College and Hospital (now, Government Medical College, Cuddalore, state of Tamil Nadu), class of 2004. He pursued his postgraduation in orthopaedic surgery from Government Medical College, Kozhikode under Kerala University of Health Sciences (KUHS) and DNB Orthopaedics in Medical Trust Hospital, Ernakulam (State of Kerala) from the National Board.</p>
                                    <p class="wow fadeInUp" data-wow-delay="0.2s">Associate Prof. Dr. Ram Sudhan Subramaniyan is a specialist in Sports surgeries and joint reconstruction with a special interest in "joint preservation" of the Hip, shoulder, and knee. He is a pioneer in Hip arthroscopy and preservation in Kerala. He is a notable alumnus of Annamalai University and graduated with a medical degree from Rajah Muthiah Medical College and Hospital (now, Government Medical College, Cuddalore, state of Tamil Nadu), class of 2004. He pursued his postgraduation in orthopaedic surgery from Government Medical College, Kozhikode under Kerala University of Health Sciences (KUHS) and DNB Orthopaedics in Medical Trust Hospital, Ernakulam (State of Kerala) from the National Board.</p>

                                </div>
                                <!-- Member Content Header End -->
                            
                            </div>
                            <!-- Team Member Content End -->
                        </div>
                        <!-- Team Member Info Box End -->

                        <!-- Team Member About Start -->
                        <div class="team-member-about">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <p class="wow fadeInUp" data-wow-delay="0.2s">
                                    Over the course of his extensive academic and professional experience of more than a decade, he has treated several patients and given hope in their lives to regain their career and confidence which can be witnessed from the patient's endorsements. He is a passionate researcher in the sector, and his extensive expertise has earned him significant honors, including over 20 national and international publications and countless podium presentations across the globe. In addition, to handling several research projects as a research associate affiliated with the nation's prominent medical and biotechnology institutions including the National Institute of Technology (NIT), he currently serves as the research head of the Orthopaedic Research and Certification Academy (ORCA) as well.
                                </p>
                            </div>
                            <!-- Section Title End -->
                             
                         
                        </div> 
                        <!-- Team Member About End -->

                      
                    </div>
                    <!-- Page Team Single Box End -->

                    <div class="marquee-wrapper">
                        <div class="marquee-track">
                            <?php
                            if(!empty($expertise)) {
                                foreach($expertise as $expertise) {
                                ?>
                                    <div class="img"><img src="<?=validImg($expertise['image']) ?>" alt="image"></div>
                                <?php
                                }
                            }?>
                           <!-- ... add more duplicates if needed ... -->
                        </div>
                     </div>
                </div>
            </div>
            </div>
        </div>
    </div>

      <!-- open purpose and values -->
     	<div class="page-header bg-section dark-section" id="purpose-values">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-3" data-cursor="-opaque">Purpose and Values</h1>
						
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>

    <div class="page-team-single p-0 main-section">
        <div class="container">
            <div class="inner-section bg-light-gray">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Our Approach Content Start -->
                    <div class="our-approach-content">
                        <!-- Section Title Start -->
                    
                        <!-- Section Title End -->

                        <!-- Our Approach Body Start -->
                        <div class="our-approach-body wow fadeInUp" data-wow-delay="0.4s">
                            <!-- Mission Vision Item Start -->
                            <div class="mission-vison-item">
                                <div class="icon-box">
                                    <img src="<?=base_url('public/assets/template/images/icon-mission.svg')?>" alt="">
                                </div>
                                <div class="mission-vison-content">
                                    <h3>our mission</h3>
                                  <p><?=getappdata('mission') ?></p>
                                </div>
                            </div>
                            <!-- Mission Vision Item End -->

                            <!-- Mission Vision Item Start -->
                            <div class="mission-vison-item">
                                <div class="icon-box">
                                    <img src="<?=base_url('public/assets/template/images/icon-vision.svg')?>" alt="">
                                </div>
                                <div class="mission-vison-content">
                                    <h3>our vision</h3>
                                    <p><?=getappdata('vision') ?></p>
                                </div>
                            </div>

                            <div class="mission-vison-item">
                                <div class="icon-box">
                                    <img src="<?=base_url('public/assets/template/images/icon-mission.svg')?>" alt="">
                                </div>
                                <div class="mission-vison-content">
                                    <h3>Goals</h3>
                                    <p>Accessibility, Availability and Affordability of neoteric healthcare system and science which is inclusive to all across nations.</p>
                                </div>
                            </div>
                            <!-- Mission Vision Item End -->

                            <!-- Mission Vision Item Start -->
                            <div class="mission-vison-item">
                                <div class="icon-box">
                                    <img src="<?=base_url('public/assets/template/images/icon-vision.svg')?>" alt="">
                                </div>
                                <div class="mission-vison-content">
                                    <h3>Values</h3>
                                   <p><?=getappdata('values') ?></p>
                                </div>
                            </div>
                            <!-- Mission Vision Item End -->
                        </div>
                        <!-- Our Approach Body End -->
                    </div>
                    <!-- Our Approach Content End -->
                </div>
               
            </div>
            </div>
        </div>
    </div>



    <!-- close Purpose and values  -->

    <!-- open journey -->
    <div class="page-header bg-section dark-section" id="journey-of-excellence">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-3" data-cursor="-opaque"> <?= 'The Journey of Excellence' ?> </h1>
						
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>

  

     
    <!-- Page Contact Us Start -->
    <div class="page-gallery__ main-section">
        <div class="container">


<div class="timeline-wrapper inner-section  bg-white">

    <!-- ROW 1 -->
    <div class="timeline-row">

        <div class="left-card" data-aos="zoom-in">
            <div class="card kasr-icon">
                <div class="position-relative overflow-hidden rounded-25 ">
                    <div class="year d-none">2024</div>

                        <img src="<?= base_url('public/assets/template/images/cairo.webp') ?>">
                        <div class="card-content">
                            <div class="section-title">
                                    <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">ADVANCED ARTHROSCOPY OF THE HIP AND KNEE-CAIRO UNIVERSITY (KASR AL AINY MEDICAL SCHOOL)</h3> 
                            </div>
                            <p>
                            Completed advanced arthroscopy training at Cairo University (Kasr Al Ainy) focusing on minimally invasive procedures of the hip, knee, and shoulder. The program emphasized precision techniques, faster recovery protocols, and sports injury management
                            </p>
                        </div>
                </div>
            </div>
        </div>

        <div class="center left-con">
            <!-- <div class="icon">
               <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M419.84 409.6H92.16c-16.937 0-30.72 13.783-30.72 30.72s13.783 30.72 30.72 30.72h327.68c16.937 0 30.72-13.783 30.72-30.72s-13.783-30.72-30.72-30.72zM471.04 102.4c-22.589 0-40.96 18.371-40.96 40.96 0 15.176 8.397 28.303 20.705 35.389-23.695 56.115-60.662 90.542-95.212 87.429-38.42-3.133-69.755-48.558-87.04-124.559 22.159-5.612 38.666-25.58 38.666-49.459 0-28.242-22.958-51.2-51.2-51.2-28.242 0-51.2 22.958-51.2 51.2 0 23.88 16.507 43.848 38.666 49.459-17.285 76.001-48.62 121.426-87.04 124.559-34.406 3.113-71.537-31.314-95.211-87.429 12.308-7.086 20.705-20.214 20.705-35.389 0-22.589-18.371-40.96-40.96-40.96C18.371 102.4 0 120.771 0 143.36c0 21.013 15.974 38.175 36.372 40.509L75.817 389.12h360.366l39.444-205.251C496.026 181.535 512 164.373 512 143.36c0-22.589-18.371-40.96-40.96-40.96z" fill="#d41a36" opacity="1" data-original="#000000" class=""></path></g></svg>
            </div> -->
            <div class="icon">
                2024
            </div>
        </div>
           <div class="center right-con">
            <div class="icon p-2">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 256 256" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="m111.388 117.268-3.749 21.852 19.625-10.317h1.467l19.625 10.317-3.749-21.852.454-1.394 15.877-15.478-21.942-3.188-1.186-.861-9.812-19.882-9.813 19.882-1.186.861-21.942 3.188 15.878 15.478zM47.258 78.136a92.875 92.875 0 0 0-4.992 13.584 15.843 15.843 0 0 1 .147 8.318 7.847 7.847 0 0 1-.663 1.952.8.8 0 0 1-.184.248.79.79 0 0 1-.26.177 6.363 6.363 0 0 1-1.445.465 90.656 90.656 0 0 0-1.034 13.565c0 .616.013 1.231.026 1.847a16.37 16.37 0 0 1 3.076 9.8 8.248 8.248 0 0 1-.192 2.175.814.814 0 0 1-.1.246.857.857 0 0 1-.255.286 6.352 6.352 0 0 1-1.223.762 89.219 89.219 0 0 0 4.273 15.7 17.532 17.532 0 0 1 4.766 9.85c.057.388.093.7.12.991a88.817 88.817 0 0 0 6.569 10.5 16.435 16.435 0 0 1 7.533 9 84.526 84.526 0 0 0 7.572 7q1.77 1.444 3.616 2.785a14.082 14.082 0 0 1 3.552.411 16.735 16.735 0 0 1 9.9 7.636 84.548 84.548 0 0 0 16.232 5.85 39.692 39.692 0 0 1 11.644-5.215c-2.687-.422-5.386-.9-8.07-1.491q-2.113-.468-4.2-1.061a17.891 17.891 0 0 1-4 1.412l-.381.011-.463-.072-.362-.127a17.969 17.969 0 0 1-5.6-5.173 78.416 78.416 0 0 1-17.125-10.588c-.6.069-1.118.1-1.484.1l-.377-.064-.42-.153-.33-.194a17.124 17.124 0 0 1-4.439-6.2 81.586 81.586 0 0 1-22.51-56.03A83.736 83.736 0 0 1 48.138 98.5a12.7 12.7 0 0 1 2.881-10.1 85.535 85.535 0 0 1 5.35-12.087 13.019 13.019 0 0 1-.849-5.577c-.072-.046-.134-.1-.21-.145a3.652 3.652 0 0 0-1.766-.455 3.689 3.689 0 0 0-2.664 1.141 16.074 16.074 0 0 1-.388 3.953 7.128 7.128 0 0 1-.592 1.833.788.788 0 0 1-.14.2.806.806 0 0 1-.285.209 7.522 7.522 0 0 1-1.861.588c-.114.029-.238.052-.356.076zM150.8 205.81l-.178.042c-3.866.857-7.646 1.473-11.339 2.017 6.608 2.337 11.128 6.266 12.718 14.218a3.71 3.71 0 0 0 4.327 2.882 3.675 3.675 0 0 0 2.881-4.323c-1.372-6.875-4.357-11.546-8.409-14.836z" fill="#d41a36" opacity="1" data-original="#000000" class=""></path><path d="M167.932 195.431a16.735 16.735 0 0 1 9.9-7.636 14.092 14.092 0 0 1 3.551-.411q1.843-1.345 3.616-2.785a84.525 84.525 0 0 0 7.573-7 16.434 16.434 0 0 1 7.533-9 88.8 88.8 0 0 0 6.57-10.5c.027-.28.062-.588.117-.965a17.53 17.53 0 0 1 4.769-9.874 89.228 89.228 0 0 0 4.273-15.7 6.34 6.34 0 0 1-1.224-.763.841.841 0 0 1-.233-.251.862.862 0 0 1-.134-.333 8.712 8.712 0 0 1-.179-2.142 16.367 16.367 0 0 1 3.076-9.78c.013-.615.026-1.231.026-1.847a90.651 90.651 0 0 0-1.034-13.565 6.364 6.364 0 0 1-1.445-.465.8.8 0 0 1-.261-.177.812.812 0 0 1-.184-.248 7.847 7.847 0 0 1-.663-1.952 15.841 15.841 0 0 1 .147-8.318 92.9 92.9 0 0 0-4.992-13.584c-.118-.024-.246-.047-.355-.071a7.522 7.522 0 0 1-1.861-.588.806.806 0 0 1-.285-.209.788.788 0 0 1-.14-.2 7.128 7.128 0 0 1-.592-1.833 16.083 16.083 0 0 1-.389-3.939 3.64 3.64 0 0 0-1.635-1.01 3.651 3.651 0 0 0-2.8.312c-.075.041-.138.1-.21.144a13.018 13.018 0 0 1-.849 5.577 85.585 85.585 0 0 1 5.35 12.086 12.7 12.7 0 0 1 2.881 10.1 83.73 83.73 0 0 1 1.962 17.94 81.587 81.587 0 0 1-22.509 56.028 17.12 17.12 0 0 1-4.44 6.2l-.33.194-.42.153-.377.064a17.36 17.36 0 0 1-1.484-.1 78.42 78.42 0 0 1-17.132 10.587 17.979 17.979 0 0 1-5.6 5.173l-.363.127-.463.072-.38-.011a17.888 17.888 0 0 1-4-1.412q-2.086.59-4.2 1.061c-4.86 1.078-9.775 1.771-14.527 2.441-17 2.4-33.021 4.652-36.816 23.629a3.675 3.675 0 1 0 7.207 1.442c2.774-13.868 14.441-15.511 30.589-17.786 4.912-.692 9.983-1.407 15.138-2.549a84.332 84.332 0 0 0 18.228-6.326zM55 59.334l-.077-.043.022.016-.009.013zM54.687 59.1c1.379-.392 6.8-2.253 8.426-7.45 1.577-5.033-2.121-13.726-3.6-16.879-2.766 2.407-9.027 8.435-9.619 14.153-.561 5.419 3.682 9.276 4.793 10.176zM37.73 74.229c3.993 3.265 9.132 1.927 10.445 1.505.423-1.314 1.761-6.451-1.505-10.446-3.119-3.814-11.776-5.413-15.086-5.9.473 3.474 1.984 11.439 6.146 14.841zM48.544 75.594a.8.8 0 0 0-.078.04l.026-.01.007.015zM59.921 65.289A10.131 10.131 0 0 0 58.4 75.75a10.134 10.134 0 0 0 10.461-1.521c3.8-3.109 5.579-11.864 6.144-15.295-3.388.63-11.978 2.556-15.084 6.355zM28.73 98.8c4.229 3.6 9.918 2.256 11.306 1.849.465-1.372 2.042-7-1.385-11.373-3.322-4.237-12.766-6.145-16.242-6.717.419 3.69 1.857 12.441 6.321 16.241zM40.4 100.518a1.105 1.105 0 0 0-.077.039l.026-.009.006.014zM62.3 99.485c4.219-3.307 6.327-12.86 6.99-16.465-3.584.583-13.04 2.468-16.513 6.544a10.981 10.981 0 0 0-1.866 11.323A10.977 10.977 0 0 0 62.3 99.485zM27.366 130.356c5.434 2.724 11.093-.226 12.392-.992.138-1.5.395-7.878-4.389-11.63-4.613-3.618-15.143-3.15-18.842-2.859 1.356 3.699 5.126 12.615 10.839 15.481zM40.045 129.209l.038-.06c-.026.021-.05.041-.072.062l.023-.015zM51.051 126.851a11.887 11.887 0 0 0 11.642-4.407c3.608-4.6 3.322-15.3 3.087-19.152-3.521 1.491-13.091 5.93-15.709 11.149a11.885 11.885 0 0 0 .98 12.41zM47.252 158.854c-.078-1.567-.77-8.494-6.543-11.784-5.55-3.165-16.853-.937-20.65-.058 1.99 3.672 7.456 12.713 14.063 14.887 6.316 2.079 11.916-2.054 13.13-3.045zM47.508 158.659l.03-.067a.844.844 0 0 0-.064.074l.021-.019zM58.762 154.443a12.883 12.883 0 0 0 11.782-6.561c3.151-5.527 1.1-17.05.252-21.021-3.439 2.088-13.093 8.391-15.082 14.433a12.861 12.861 0 0 0 3.032 13.141zM54.541 170.257c-6.268-3.018-18.4.291-22.312 1.494 2.365 3.742 8.958 13.187 16.291 15.051 7.034 1.784 12.78-3.163 13.962-4.285-.182-1.617-1.399-9.106-7.941-12.26zM62.719 182.309l.027-.073a.9.9 0 0 0-.062.082l.02-.022zM74.359 176.963l.046.016a13.907 13.907 0 0 0 12.238-7.956c3.007-6.24-.135-18.631-1.313-22.732-3.458 2.433-13.524 10-15.231 16.711a13.912 13.912 0 0 0 4.26 13.961zM88.493 200.64l.016.009.012-.076a1.247 1.247 0 0 0-.044.091zM77.629 189.828c-7.113-1.86-19.027 4.078-22.752 6.081 3.156 3.343 11.906 11.819 19.882 12.26 7.69.408 12.6-5.909 13.56-7.273-.498-1.596-3.249-9.126-10.69-11.068zM99.345 192.823l.07.011a14.634 14.634 0 0 0 11.033-10.7c1.85-7.089-3.965-19.307-5.979-23.225-3.023 3.151-11.957 13.048-12.361 20.355a14.64 14.64 0 0 0 7.237 13.559zM201.691 59.19a.677.677 0 0 0-.089-.009l.027.005v.017zM201.308 59.1c1.112-.905 5.354-4.76 4.793-10.175-.592-5.72-6.853-11.748-9.619-14.154-1.479 3.153-5.177 11.846-3.6 16.879 1.626 5.2 7.047 7.061 8.426 7.45zM218.265 74.229c4.162-3.4 5.673-11.367 6.146-14.837-3.31.484-11.967 2.083-15.086 5.9-3.266 3.995-1.929 9.132-1.505 10.446 1.313.419 6.452 1.756 10.445-1.509zM207.957 76.095l-.037-.071.01.027-.012.005z" fill="#d41a36" opacity="1" data-original="#000000" class=""></path><path d="M187.133 74.229a10.132 10.132 0 0 0 10.461 1.521 10.13 10.13 0 0 0-1.52-10.461c-3.109-3.8-11.7-5.727-15.083-6.354.565 3.432 2.344 12.189 6.142 15.294zM216.1 101.011c-.013-.027-.028-.052-.042-.077l.01.026-.015.007zM217.344 89.276c-3.427 4.371-1.85 10-1.385 11.373 1.388.408 7.076 1.755 11.306-1.849 4.461-3.8 5.9-12.55 6.321-16.241-3.477.574-12.924 2.484-16.242 6.717zM186.708 83.019c.663 3.605 2.775 13.162 6.989 16.466a10.972 10.972 0 0 0 11.39 1.4 10.981 10.981 0 0 0-1.866-11.323c-3.477-4.078-12.929-5.962-16.513-6.543zM216.238 129.366c1.3.765 6.96 3.718 12.391.991 5.713-2.866 9.483-11.782 10.839-15.48-3.7-.29-14.228-.759-18.842 2.859-4.782 3.75-4.526 10.127-4.388 11.63zM216.294 129.747a1.079 1.079 0 0 0-.024-.086v.027h-.016zM204.944 126.851a11.886 11.886 0 0 0 .98-12.41c-2.618-5.219-12.188-9.658-15.709-11.149-.233 3.852-.517 14.557 3.087 19.152a11.885 11.885 0 0 0 11.642 4.407zM215.287 147.07c-5.776 3.292-6.465 10.218-6.543 11.784 1.213.992 6.815 5.126 13.13 3.044 6.607-2.174 12.073-11.215 14.063-14.887-3.8-.879-15.101-3.111-20.65.059zM208.746 159.242c0-.035-.007-.068-.012-.1v.029h-.019zM185.2 126.861c-.843 3.971-2.9 15.494.252 21.021a12.865 12.865 0 0 0 11.782 6.561l.016-.007a12.861 12.861 0 0 0 3.032-13.141c-1.99-6.044-11.645-12.347-15.082-14.434zM193.466 182.827l.026.072c0-.035 0-.069-.006-.1v.03zM201.455 170.257c-6.542 3.153-7.757 10.64-7.941 12.259 1.182 1.122 6.928 6.071 13.962 4.286 7.333-1.864 13.926-11.309 16.291-15.05-3.917-1.204-16.05-4.513-22.312-1.495zM181.59 176.98l.046-.016A13.91 13.91 0 0 0 185.9 163c-1.708-6.718-11.774-14.279-15.231-16.711-1.178 4.1-4.32 16.492-1.312 22.732a13.906 13.906 0 0 0 12.233 7.959zM178.366 189.828c-7.44 1.942-10.191 9.474-10.69 11.067.962 1.365 5.878 7.674 13.56 7.273 7.974-.441 16.726-8.916 19.882-12.26-3.726-2.001-15.643-7.932-22.752-6.08zM167.57 201.188l.012.078a.96.96 0 0 0 .014-.1l-.007.029zM145.547 182.136a14.635 14.635 0 0 0 11.033 10.7l.071-.011a14.643 14.643 0 0 0 7.236-13.557c-.4-7.313-9.337-17.206-12.36-20.355-2.014 3.917-7.827 16.14-5.98 23.223z" fill="#d41a36" opacity="1" data-original="#000000" class=""></path></g></svg> -->
                 2024
            </div>
        </div>

        <div class="right-card" data-aos="zoom-in">
            <div class="card board-cert-icon">
                 <div class="position-relative overflow-hidden rounded-25 ">
                    <div class="year d-none">2024</div>

                    <img src="<?= base_url('public/assets/template/images/sims.webp') ?>">

                    <div class="card-content">
                        <div class="section-title">
                                <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">BOARD CERTIFIED - ANTHROSCOPY AND SPORTS INJURIES FELLOWSHIP (TN)</h3> 
                        </div>
                        <p>
                        Specialized fellowship in sports medicine under TNOA, focusing on ligament reconstruction, sports injury rehabilitation, and athlete-focused surgical care
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- ROW 2 -->
    <div class="timeline-row">

        <div class="left-card  " data-aos="zoom-in">
            <div class="card glasgon">
                 <div class="position-relative overflow-hidden rounded-25 ">
                <div class="year d-none">2023</div>

                <img src="<?= base_url('public/assets/template/images/royal_college.png') ?>">

                <div class="card-content">
                    <h3>MRCPS (GLASGOW)</h3>
                    <p>
                        Membership of the Royal College of Physicians and
                        Surgeons (Glasgow), reflecting international standards in
                        orthopaedic training and clinical excellence

                    </p>
                </div>
                </div>

            </div>
        </div>

        <div class="center left-con" >
            <div class="icon">
               2023
            </div>
        </div>
           <div class="center right-con icon-2022">
            <div class="icon">
                2022
            </div>
        </div>
        <div class="right-card" data-aos="zoom-in">
            <div class="card fellow">
                 <div class="position-relative overflow-hidden rounded-25 ">

                <div class="year d-none">2022</div>

                 <img src="<?= base_url('public/assets/template/images/fellow_academy.webp') ?>">

                <div class="card-content">
                    <h3>FELLOW OF THE ACADEMY OF ARTHROPLASTY AND SPORTS MEDICINE (F.A.A.S) </h3>
                    <p>
                        Focused training in foot and ankle surgery, covering deformity correction and trauma management and advanced reconstruction techniques
                    </p>
                </div>
                </div>
            </div>
        </div>

    </div>

    
    <!-- ROW 2 -->
    <div class="timeline-row">

        <div class="left-card" data-aos="zoom-in">
            <div class="card ilizarov">
                 <div class="position-relative overflow-hidden rounded-25 ">
                <div class="year d-none">2018</div>

                <img src="<?= base_url('public/assets/template/images/ilizarov.png') ?>">

                <div class="card-content">
                    <h3>ILIZAROV FELLOWSHIP</h3>
                    <p>
                       Completed fellowship in Ilizarov techniques, specializing in limb lengthening, deformity correction, and complex fracture management using circular external fixation systems
                    </p>
                </div>
                </div>
            </div>
        </div>

        <div class="center left-con">
            <div class="icon">
                2018
                
            </div>
        </div>
           <div class="center right-con ">
            <div class="icon">2017</div>
        </div>
        <div class="right-card" data-aos="zoom-in">
            <div class="card card-2017">
                <div class="position-relative overflow-hidden rounded-25 ">
                <div class="year d-none">2017</div>

                <img src="<?= base_url('public/assets/template/images/medical-trust_hospital.webp') ?>">

                <div class="card-content">
                    <h3 class="text-uppercase">DNB Orthopaedics</h3>
                    <p>
                       Completed Diplomate of the National Board in Orthopaedics at Medical Trust Hospital, Kochi, with extensive experience in trauma care, joint reconstruction, and surgical orthopaedics.
                    </p>
                </div>
                </div>

            </div>
        </div>

    </div>

    <!-- ROW 2 -->
    <div class="timeline-row mb-0">

        <div class="left-card" data-aos="zoom-in">
            <div class="card card-2014">
                <div class="position-relative overflow-hidden rounded-25 ">
               <div class="year d-none">2014</div>

                 <img src="<?= base_url('public/assets/template/images/medical_college_kozhicode.webp') ?>">

                <div class="card-content"> 
                    <h3 class="text-uppercase">Diploma in Orthopaedics</h3>
                    <p>
                        Built strong foundational knowledge in orthopaedics, including musculoskeletal disorders, fracture management, and early surgical exposure.
                    </p>
                </div>
                </div>

            </div>
        </div>

        <div class="center left-con">
            <div class="icon">
                2014
               
            </div>
        </div>
           <div class="center right-con ">
            <div class="icon">
                2009
               
            </div>
        </div>
        <div class="right-card" data-aos="zoom-in">
            <div class="card card-2009">
                <div class="position-relative overflow-hidden rounded-25 ">
                <div class="year d-none">2009</div>

                 <img src="<?= base_url('public/assets/template/images/rmmc.webp') ?>">

                <div class="card-content"> 
                    <h3 class="text-uppercase">MBBS</h3> 
                    <p>
                       Undergraduate medical training at Govt Medical College (RMMCH/ Annamali University)with comprehensive exposure to clinical medicine, surgery, and patient care fundamentals,
                    </p>
                </div>
                </div>
            </div>
        </div>

    </div>



</div>

<!-- close Joirney -->
<!-- open infographics -->
 <link rel="stylesheet" href="<?= base_url('public/assets/template/') ?>css/infographics.css">
<link rel="stylesheet" href="<?= base_url('public/assets/template/') ?>css/magnific-popup.css">
   <div class="page-header bg-section dark-section mt-3" id="infographics">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-3" data-cursor="-opaque"> <?= 'Infographics' ?> </h1>
						
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>


	<div class="page-header bg-section dark-section d-none">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-3" data-cursor="-opaque">
                         Gallery

                         </h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Gallery</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>



<main class="sheet mt-3 mb-3">
    <section class="top-grid" aria-label="Profile overview">
      <div class="identity">
        <div class="portrait-ring">
          <img src="<?=base_url('public/assets/template/images/profile_img.webp');?>" alt="Ram Sudhan Subramaniyan">
        </div>
        <div>
          <h1>RAM SUDHAN <span class="surname">SUBRAMANIYAN</span></h1>
          <div class="role-pill">Clinician&nbsp;&nbsp;|&nbsp;&nbsp;Sports Surgeon&nbsp;&nbsp;|&nbsp;&nbsp;Researcher</div>
          <ul class="contact-list">
            <li><i data-lucide="phone" class="fa fa-phone"></i>812-939-4980</li>
            <li><i data-lucide="globe-2" class="fa fa-globe"></i>www.jointfactory.org</li>
            <li><i data-lucide="globe-2" class="fa fa-globe"></i>www.cepienta.com</li>
            <li><i data-lucide="mail" class="fa fa-envelope"></i>sudhansubramaniam@gmail.com</li>
          </ul>
        </div>
      </div>

      <article class="panel">
        <div class="panel-title"><span class="round-icon"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 682.667 682.667" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><defs><clipPath id="a" clipPathUnits="userSpaceOnUse"><path d="M0 512h512V0H0Z" fill="#ffffff" opacity="1" data-original="#000000"></path></clipPath></defs><g clip-path="url(#a)" transform="matrix(1.33333 0 0 -1.33333 0 682.667)"><path d="M0 0v402.195H-157.317" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(467.887 10)" fill="none" stroke="#ffffff" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" opacity="1"></path><path d="m0 0-123.927.01c-4.427 0-8.802.295-13.11 1.409a45.04 45.04 0 0 0-17.796 9.219 45.21 45.21 0 0 0-13.525 19.858 45.108 45.108 0 0 0-2.355 14.401v-447.092" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(214.836 412.195)" fill="none" stroke="#ffffff" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" opacity="1"></path><path d="M0 0h-157.308c-9.671 43.73-42.592 43.73-42.592 43.73h-95.733s32.921 0 42.592-43.73h-125.815c-19.061 0-36.396 12.461-42.542 30.496a44.722 44.722 0 0 0-2.355 13.254c-.011.383-.011.775-.011 1.158 0 12.389 5.033 23.621 13.155 31.743 8.122 8.132 19.354 13.154 31.753 13.154H0s-19.576-17.069-19.576-44.897C-19.576 17.069 0 0 0 0Z" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(467.877 412.195)" fill="none" stroke="#ffffff" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" opacity="1"></path><path d="M0 0v-194.984l-46.418 52.254-49.315-52.254V0c0 70.441-45.24 70.441-45.24 70.441h95.733S0 70.441 0 0z" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(313.219 385.484)" fill="none" stroke="#ffffff" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" opacity="1"></path><path d="M0 0h214.219" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(112.852 455.925)" fill="none" stroke="#ffffff" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" opacity="1"></path><path d="M0 0v0" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(373.876 455.925)" fill="none" stroke="#ffffff" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" opacity="1"></path><path d="M0 0h184.66" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(172.246 119.539)" fill="none" stroke="#ffffff" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" opacity="1"></path><path d="M0 0h184.66" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(172.246 61.842)" fill="none" stroke="#ffffff" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" opacity="1"></path></g></g></svg></span>Alma Mater</div>
        <ul class="bullets">
          <li>Govt Medical College, Kozhikode</li>
          <li>RMMCH, Annamalai University</li>
        </ul>
      </article>

      <article class="panel">
        <div class="panel-title">
          <span class="round-icon outline"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;width:48px; height:36px" xml:space="preserve" class=""><g><path d="M243.1 109.7c-50.5-11.4-97.7 36.9-85.2 87.1 12.9 56.4 86.3 75.6 124.6 31.6 36.6-40.4 14.6-108.3-39.4-118.7zm31.1 111.5c-32.1 37.3-95 20.9-105.7-26.8-10.7-42.4 29.7-83.8 72.3-73.9 45.7 8.5 64.5 66.7 33.4 100.7zm78.5-68h-14.5c-2.7-10.9-7-21.3-12.9-31l10.3-10.3c3.8-3.6 3.8-10.2 0-13.8l-24.8-24.8c-3.5-3.8-10.3-3.8-13.8 0l-10.3 10.3c-9.6-5.8-20-10.1-31-12.9V56.1c0-5.4-4.4-9.7-9.8-9.7h-35.2c-5.3 0-9.7 4.4-9.7 9.7v14.6c-10.9 2.8-21.4 7.1-31 12.9l-10.2-10.2c-3.5-4-10.2-3.9-13.9-.1L121.1 98c-3.9 3.6-3.9 10.2-.1 13.8l10.3 10.3c-5.7 9.5-10.2 20.2-12.9 31h-14.6c-5.4 0-9.7 4.4-9.7 9.7V198c0 5.3 4.4 9.7 9.7 9.7h14.6c2.7 10.9 7 21.3 12.9 31L121.1 249c-3.9 3.6-3.9 10.2-.1 13.8l24.8 24.9c3.6 3.8 10.3 3.8 13.7 0l10.3-10.3c9.7 5.8 20.1 10.2 31 12.9v14.5c0 5.4 4.4 9.8 9.8 9.8h35.1c5.4 0 9.8-4.4 9.8-9.7v-14.6c10.9-2.7 21.3-7 31-12.9l10.3 10.3c3.6 3.9 10.2 3.8 13.9.1l24.8-24.8c3.9-3.6 3.9-10.2.1-13.8l-10.3-10.3c5.9-9.8 10.2-20.2 12.9-31h14.6c5.4 0 9.7-4.4 9.7-9.7V163c0-5.4-4.4-9.8-9.8-9.8zm-1.2 43.6h-17.7c-2.6 0-4.8 1.8-5.4 4.4-2.6 12.5-7.5 24.4-14.7 35.4-1.4 2.2-1.1 5 .7 6.9L327 256l-23.1 23.1-12.6-12.6c-1.8-1.8-4.7-2.1-6.9-.7-10.8 7.1-22.7 12-35.3 14.7-2.5.5-4.4 2.8-4.4 5.4v17.7H212V286c0-2.6-1.8-4.8-4.4-5.4-12.6-2.6-24.5-7.5-35.4-14.7-2.2-1.4-5-1.1-6.9.7l-12.5 12.5-23.1-23.1 12.5-12.6c1.8-1.8 2.1-4.7.7-6.9-7.1-10.9-12.1-22.8-14.7-35.4-.5-2.5-2.8-4.4-5.4-4.4h-17.7V164h17.7c7.2-.5 5.6-9.6 8.1-14.8 2.8-8.8 6.8-17.2 11.9-24.9 1.4-2.2 1.1-5-.7-6.9L129.7 105l23.1-23.1 12.5 12.5c1.8 1.8 4.9 2.1 7 .7 9-6 18.8-10.4 29.3-13.3 4-1.2 10.4-1.2 10.4-6.8V57.3h32.7V75c0 2.6 1.8 4.8 4.4 5.4 12.7 2.6 24.6 7.6 35.3 14.7 2.2 1.4 5 1.1 6.9-.7l12.6-12.5L327 105l-12.5 12.6c-1.8 1.8-2.1 4.7-.7 6.9 7.1 10.9 12.1 22.8 14.7 35.3.5 2.5 2.8 4.4 5.4 4.4h17.7v32.6zm118.7 72c-12.8-14.6-23.4-32.5-31.8-53.1 12.2-11.8 25.7-29 15.3-45.3-8.1-16.6-6.4-24.4-15-44.4-17.4-46.7-42.4-89.1-97.1-104.4C298.6 8 184.4-27.9 97.6 47 44 93.3 15.6 168.6 28.5 230.1c12 56.8 50.2 67.2 63.1 122.8C103 397.7 89.3 453 58 504.5l229.9 6.5c4.2-18.6 12.3-35.8 24.4-49.6 4.4-3.9 9.4-13 16-11.6l64.8 19.5c36.7 7.4 56.2-27.8 46.4-64.4 11.2-4.9 21.2-17.3 15.8-30.8 11.6-7.7 11.4-21.1 5.6-30.8-2-3.5-4.3-7.4-5.6-11.7 3.6-2.1 8-3.2 12-5.5 9.6-5.4 17.4-15.6 18.9-24.7 2.3-13.6-8.2-23.7-16-32.6zm5.3 30.6c-.9 5.1-6.2 12.8-13.5 17-6.3 3.8-15.8 4.4-17.5 13-1.1 10.7 10 18.3 9.4 28.9-2.2 7.4-8.5 8.5-13.3 11.3 11.6 15.4 1.4 24.2-14.8 28.3 9.1 21.6 5.8 49.8-10.1 58.2-3.1 1.8-10 4.4-20 2.5l-64.3-19.3c-11.9-3.9-20.3 7.3-27.4 15-11.3 13.1-19.6 28.4-24.5 45.5l-30.2-.8 38.6-75.5 30.5-9.6c9.7 16.2 35.6 9.1 35.4-10-.6-24.9-37-25.4-38.3-.6l-33.1 10.4c-1.4.4-2.6 1.4-3.2 2.7l-42 82.2-41.1-1.2 54.5-94.1c26.6 2.3 28.9-37.2 2.1-38.1-17.6-.4-25.9 22.9-12.3 33.7L183.6 497l-34.9-1 27.3-47c26.9 3 29.8-37 2.7-38-17.3-.4-25.8 22.4-12.7 33.4l-29.8 51.4-23.7-.7 28.1-48.6c.5-.8.7-1.8.7-2.7v-53.5c20.8-6.4 16.5-37.2-5.5-37.4-22 .3-26.3 31.1-5.5 37.4v52.1l-30.4 52.4-23.6-.7c40.5-73.6 41.4-151.8-7.3-207.9C10.3 221.1 36.8 114 104.8 55.3c84.9-75.4 226.7-35.8 274.4-2.9C410.9 78 426 119.9 436.7 155c1.8 6.8 3.3 12.7 7.5 20.6.9 1.8 2.5 4.7 2.4 8.5-.6 8.2-10.1 18.2-16.6 24.6-2.7 2.4-3.6 6.2-2.2 9.6 8.9 22.4 20.4 41.9 34.3 57.8 6 6.9 14.8 15.6 13.4 23.3zm-149 104.4c.2-10.8 16.2-10.8 16.4 0-.2 10.8-16.3 10.8-16.4 0zm-82-19.4c.2-10.8 16.2-10.8 16.4 0-.2 10.8-16.1 10.6-16.4 0zm-74 45.7c.2-10.8 16.2-10.8 16.4 0-.2 10.8-16.3 10.8-16.4 0zm-34.6-49.9c-10.8-.2-10.8-16.2 0-16.4 10.8.2 10.8 16.2 0 16.4z" fill="#ffffff" opacity="1" data-original="#000000" class=""></path></g></svg></span>
          <span class="skill-title">Skill Level <small>(From Patient Feedback)</small></span>
        </div>
        <div class="skill-grid">
          <span>Key-hole surgeries</span><div class="dots"><span></span><span></span><span></span><span></span><span></span></div>
          <span>Joint Replacement</span><div class="dots"><span></span><span></span><span></span><span></span><span></span></div>
          <span>Trauma</span><div class="dots"><span></span><span></span><span></span><span></span><span></span></div>
          <span>Ilizarov</span><div class="dots"><span></span><span></span><span></span><span></span><span class="off half"></span></div>
          <span>Patient Satisfaction</span><div class="dots"><span></span><span></span><span></span><span></span><span></span></div>
        </div>
      </article>
    </section>

    <section class="middle-grid" aria-label="Highlights">
      <article class="mini-card">
        <div class="panel-title"><span class="round-icon ouline bg-none"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="512" height="512" style="width:50px; height:50px;">
  <rect x="7.5" y="2" width="3" height="2.5" rx="0.6" fill="#b80618" />
  <rect x="13.5" y="2" width="3" height="2.5" rx="0.6" fill="#b80618" />
  <circle cx="12" cy="14" r="6.5" stroke="#b80618" stroke-width="1.8" fill="none" />
  <polygon points="12,10.2 13.1,12.5 15.6,12.5 13.6,14 14.3,16.5 12,15 9.7,16.5 10.4,14 8.4,12.5 10.9,12.5" fill="#b80618" />
</svg>
</span>Core Specializations</div>
        <p class="mb-0" style="text-align:center; font-size: 15px;">Advanced Arthroscopy In</p>
        <div class="chips">
          <span class="chip">HIP</span>
          <span class="chip">KNEE</span>
          <span class="chip">SHOULDER</span>
        </div>
      </article>

      <article class="mini-card">
        <div class="panel-title"><span class="round-icon  bg-none"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 6.827 6.827" style="enable-background:new 0 0 512 512;width:50px;height:50px" xml:space="preserve" fill-rule="evenodd" class=""><g><path d="M3.517 5.57c-.265 0-.519-.066-.755-.198a1.891 1.891 0 0 1-.832-.996.065.065 0 0 1 .039-.085.065.065 0 0 1 .085.04c.152.406.427.735.772.927.216.12.45.182.691.182.324 0 .637-.113.903-.324.21-.166.384-.39.503-.646a.065.065 0 0 1 .088-.032.065.065 0 0 1 .031.088 1.923 1.923 0 0 1-.54.693c-.29.23-.632.351-.985.351zM5.158 3.355a.066.066 0 0 1-.066-.057 1.959 1.959 0 0 0-.475-1.035.066.066 0 0 1 .098-.088c.268.294.448.686.507 1.104a.066.066 0 0 1-.056.075l-.008.001z" fill="#b80618" opacity="1" data-original="#000000" class=""></path><path d="M3.505 5.231c-.518 0-.985-.326-1.218-.852a.066.066 0 1 1 .12-.054c.213.477.634.775 1.098.775.44 0 .849-.274 1.068-.714a.066.066 0 0 1 .089-.03.066.066 0 0 1 .03.09c-.243.484-.698.785-1.187.785zM4.758 3.345a.067.067 0 0 1-.064-.05 1.466 1.466 0 0 0-.375-.689.067.067 0 0 1 0-.093.067.067 0 0 1 .093 0c.197.2.339.46.41.752a.065.065 0 0 1-.049.079l-.015.001z" fill="#b80618" opacity="1" data-original="#000000" class=""></path><path d="M4.3 2.63a.434.434 0 1 1 .002-.868.434.434 0 0 1-.001.868zm0-.735a.301.301 0 1 0 0 .603.301.301 0 0 0 0-.603zM2.822 4.418H1.458a.263.263 0 0 1-.263-.263V4.07c0-.144.118-.262.263-.262h1.364c.144 0 .262.118.262.262v.085a.261.261 0 0 1-.262.263zM1.458 3.94a.129.129 0 0 0-.13.13v.085c0 .074.056.131.13.131h1.364a.13.13 0 0 0 .13-.13v-.085a.129.129 0 0 0-.13-.13z" fill="#b80618" opacity="1" data-original="#000000" class=""></path><path d="M2.902 3.162h-.005a.062.062 0 0 1-.045-.024l-.07-.083-.313-.365-.067-.077a.076.076 0 0 1-.016-.048.072.072 0 0 1 .022-.046l1.82-1.56a.068.068 0 0 1 .048-.015c.018.001.033.01.044.022l.45.527a.066.066 0 0 1-.007.093l-.35.301a.066.066 0 1 1-.086-.1l.3-.258-.028-.032-.337-.395-1.72 1.474.024.026.342.4.98-.84a.066.066 0 1 1 .086.1l-1.032.883a.053.053 0 0 1-.04.017z" fill="#b80618" opacity="1" data-original="#000000" class=""></path><path d="M2.62 3.26a.066.066 0 0 1-.05-.024l-.314-.364a.068.068 0 0 1-.015-.049.066.066 0 0 1 .022-.044l.213-.182a.066.066 0 1 1 .086.1l-.163.139.228.264.161-.14a.066.066 0 1 1 .086.1l-.21.181a.06.06 0 0 1-.044.018zM4.65 1.52a.066.066 0 0 1-.05-.023.066.066 0 0 1 .008-.093l.162-.14L4.542 1l-.16.138a.066.066 0 1 1-.087-.1l.211-.182a.068.068 0 0 1 .049-.015c.018.002.033.01.044.022l.314.366c.011.014.017.03.016.048a.066.066 0 0 1-.023.045l-.212.182a.065.065 0 0 1-.043.016zM5.056 5.986H2.102a.063.063 0 0 1-.06-.043.064.064 0 0 1 .017-.073l.692-.605a.067.067 0 0 1 .093.005c.023.028.02.07-.006.093l-.558.49h2.633l-.536-.612a.067.067 0 0 1 .006-.093.067.067 0 0 1 .093.006l.633.72a.07.07 0 0 1 .011.071.074.074 0 0 1-.064.04zM4.941 4.563a.691.691 0 1 1 .002-1.382.691.691 0 0 1-.002 1.382zm0-1.247a.558.558 0 1 0 0 1.117.558.558 0 0 0 0-1.117z" fill="#b80618" opacity="1" data-original="#000000" class=""></path><path d="M4.748 4.166a.081.081 0 0 1-.018-.003.062.062 0 0 1-.043-.041l-.108-.313a.064.064 0 0 1 .04-.083.064.064 0 0 1 .083.04l.08.225.504-.396a.066.066 0 0 1 .081.105l-.577.452a.066.066 0 0 1-.042.014zM2.831 2.63a.066.066 0 0 1-.05-.024.066.066 0 0 1 .007-.093l.756-.643a.066.066 0 1 1 .086.1l-.756.643a.065.065 0 0 1-.043.017z" fill="#b80618" opacity="1" data-original="#000000" class=""></path></g></svg></span>Research Excellence</div>
        <div class="stats">
          <div class="stat"><span>Publications</span><strong>34</strong></div>
          <div class="stat"><span>Podium<br>Presentations</span><strong>21</strong></div>
          <div class="stat"><span>Patents</span><strong>1</strong></div>
          <div class="stat"><span>Books</span><strong>3</strong></div>
        </div>
      </article>

      <article class="mini-card">
        <div class="panel-title"><span class="round-icon bg-none"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 50 50" style="enable-background:new 0 0 512 512;width:38px;height:46px" xml:space="preserve" class="hovered-paths"><g><path fill="#b80618" d="M42.042 21.23a24.798 24.798 0 0 0-4.542-.397c-.875 0-1.73 0-2.583.167a12.312 12.312 0 0 0-3.98-3.437 7.938 7.938 0 0 0 2.084-5.355 8.042 8.042 0 0 0-16.084 0 7.938 7.938 0 0 0 2.084 5.355 12.729 12.729 0 0 0-3.98 3.416c-.812-.146-1.666-.146-2.541-.146a24.792 24.792 0 0 0-4.542.438 2.084 2.084 0 0 0-1.708 2.083v17.188A2.084 2.084 0 0 0 7 42.146a2.083 2.083 0 0 0 1.708.458 20.319 20.319 0 0 1 3.792-.458 20.605 20.605 0 0 1 11.354 3.396l.271.104c.276.12.574.184.875.187.199-.002.396-.037.583-.104h.146l.271-.104a20.604 20.604 0 0 1 11.5-3.48c1.273.007 2.542.132 3.792.376A2.082 2.082 0 0 0 43 42.063a2.085 2.085 0 0 0 .75-1.605V23.271a2.083 2.083 0 0 0-1.708-2.042zM25 8.332a3.875 3.875 0 0 1 0 7.73 3.875 3.875 0 0 1 0-7.73zm-2.083 31.938A24.835 24.835 0 0 0 12.5 37.979c-.688 0-1.375 0-2.083.104V25a20.063 20.063 0 0 1 5.25.104h.229a20.835 20.835 0 0 1 7.02 2.667zM25 24.167a24.519 24.519 0 0 0-2.875-1.417H22c-.688-.27-1.375-.542-2.083-.75A8.333 8.333 0 0 1 25 20.188a8.334 8.334 0 0 1 5.083 1.77A25.902 25.902 0 0 0 25 24.167zm14.583 13.916c-4.277-.43-8.593.29-12.5 2.084v-12.5a20.334 20.334 0 0 1 7.021-2.542h.417A19.562 19.562 0 0 1 39.583 25z" opacity="1" data-original="#000000" class="hovered-path"></path></g></svg></span>Scholarly Leaderships</div>
        <ul class="leaders">
          <li class="leader-item"><span><strong>Editor-In-Chief</strong>Journal of Joints and Orthopaedics (JOJO)</span></li>
          <li class="leader-item"><span><strong>Administrative Editor</strong>
          <p class="m-0">Journal of Orthopaedics (JOO)</p>
          <p class="m-0">Journal of orthopaedic reports ( JOREP) </p>

          </span></li>
          <li class="leader-item"><span><strong>Research Head</strong>Orthopaedic Research and Certification Academy (ORCA)</span></li>
        </ul>
          
      </article>
    </section>
<!--         <div class="event top" style="left: 68%; transform: translateX(90px);"><span class="year">&nbsp;</span><span class="copy">Diplomat in<br>Orthopaedics<br>2014</span></div>
 -->
    <section class="journey" aria-label="Professional journey and milestones">
      <div class="journey-head d-none"><i data-lucide="flag"></i>Professional Journey &amp; Milestones</div>
      <div class="timeline-outer">
        <div class="timeline">
        
          <!--  -->
          <div class="none-event bottom" style="left: 3.8%;"><span class="year left-border">2026</span></div>
          <div class="event bottom" style="left: 5.4%;"><div class="time-mini-card"><span class="ach-year">2025</span><span class="ach-copy">Hip Arthroscopy<br>USA</span></div></div>
          <div class="event top ev-tnoa"><div class="time-mini-card"><span class="ach-year">2024</span><span class="ach-copy">TNOA<br>Sports fellowship</span></div></div>
          <div class="event bottom ev-cairo"><div class="time-mini-card"><span class="ach-year">2024</span><span class="ach-copy">Advanced Arthroscopy<br>Hip and Knee (CAIRO)</span></div></div>
          <div class="event top ev-mrcps" ><div class="time-mini-card"><span class="ach-copy">MRCPS <br>(Glasgow)</span><span class="ach-year">2023</span></div></div>
          <div class="event top ev-fass" style="left: 30.8%;"><div class="time-mini-card"><span class="ach-copy">FAAS</span><span class="ach-year">2022</span></div></div>
          <div class="none-event bottom" style="left: 30.8%;"><span class="year left-border">2022</span></div>
          <div class="none-event bottom" style="left: 38.8%;"><span class="year left-border">2019</span></div>
          <div class="event top" style="left: 42.4%;"><div class="time-mini-card"><span class="ach-copy">ILIZAROV<br>Fellowship</span><span class="ach-year">2018</span></div></div>
          <div class="event bottom" style="left: 49.4%;"><div class="time-mini-card"><span class="ach-year">2017</span><span class="ach-copy">DNB <br>Orthopaedics</span></div></div>
          <div class="none-event bottom" style="left: 52.8%;"><span class="year left-border">2016</span></div>
          <div class="event top" style="left: 59.4%;"><div class="time-mini-card"><span class="ach-copy">Diplomat in Orthopaedics</span><span class="ach-year">2014</span></div></div>
          <div class="none-event bottom" style="left: 65.8%;"><span class="year left-border">2013</span></div>
          <div class="none-event bottom" style="left: 76.8%;"><span class="year left-border">2010</span></div>
          <div class="event bottom" style="left: 80.4%;"><div class="time-mini-card"><span class="ach-year">2009</span><span class="ach-copy">MBBS</span></div></div>
          <div class="none-event bottom" style="left: 86.8%;"><span class="year left-border">2007</span></div>
          <div class="none-event top" style="left: 96%;"><span class="year left-border">2004</span></div>
        </div>
      </div>

      <div class="lower">
        <aside class="side-tabs">
          <div class="tab"><i data-lucide="graduation-cap"></i>Education</div>
          <div class="tab dark"><i data-lucide="briefcase-business"></i>Career</div>
        </aside>

        <div class="lower-content">
          <div class="education-row">
            <div class="edu-item">
              <p>Royal College of Physicians<br>&amp; Surgeons of Glasgow </p> <label></label> <span style="color:#b80618">2023</span></div>
            <div class="edu-item">
              <p>Yenepoya Medical College and<br>Hospital, Yenepoya University</p>  <label></label><span style="color:#b80618">2022 - 2023</span></div>
            <div class="edu-item">
              <p>Medical Trust Hospital<br>Ernakulam, Kochi</p>  <label></label><span style="color:#b80618">2015 - 2017</span></div>
            <div class="edu-item">
              <p>Govt Medical College,<br>Kozhikode</p>  <label></label><span style="color:#b80618">2012 - 2014</span></div>
            <div class="edu-item">
              <p>Government Cuddalore Medical College RMMCH</p> <label></label> <span style="color:#b80618">2004 - 2009</span></div>
          </div>

          <div class="career-row">
            <div class="career-card">
              <div class="career-box">Senior Consultant<br>Sports Surgery</div>
              <span>2025 - Present</span>
            </div>
            <div class="career-card">
             <div class="career-box">Associate Professor</div>
             <span>2024 - Present</span>
            </div>
            <div class="career-card">
              <div class="career-box">Assistant Professor</div>
              <span>2020 - 2024</span>
            </div>
            <div class="career-card">
              <div class="career-box">Senior Resident</div>
              <span>2017 - 2019</span>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<!-- close info graphics -->
<!-- open Publications -->
 <div class="page-header bg-section dark-section " id="publications">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-3" data-cursor="-opaque">
                         Publications

                         </h1>
						
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>

<main class="mainsection mt-3">
    <div class="container">
            <div class="inner-section bg-white">
                <div class="cust-sec">
                <!-- <header class="section-heading">
                    <div class="section-title">
                    <span class="section-icon" aria-hidden="true">P</span>
                        <div>
                            <p class="section-kicker">Research Excellence</p>
                            <h2 id="publications-title">Publications</h2>
                        </div>
                    </div>
                    <div class="publication-count">34 Publications</div>
                </header> -->
                      <div class="section-title py-3 pb-0">
                        <p class="section-kicker d-none">Research Excellence</p>
                            <h3 class="text-anime-style-3" data-cursor="-opaque">Publications</h3>
                            
                            
                        </div>
                <!-- publicatio list open -->
                 <article class="publications-list">

                    <!-- publication card open -->
                    <div class="publication-card" data-aos="fade-up"  data-aos-duration="1500"    data-aos-anchor-placement="center-bottom">
                         <div class="imb-block " data-aos="fade-up" data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                            <img src="<?=base_url('public/assets/template/images/publications/surgical-technology-international.png');?>" width="100%" alt="">
                        </div>
                        <div class="content-block">
                            <h1>CLINICAL AND FUNCTIONAL OUTCOMES OF TRANS-SEPTAL REMNANT-PRESERVING VERSUS CONVENTIONAL POSTERIOR CRUCIATE LIGAMENT RECONSTRUCTION IN COMPETITIVE ATHLETES</h1>
                            <p>Sharat Balemane,Hishanil Rasheed Nayanveetil Kakkarakandy,Abdul Rasheed, Anand Pillai,Fardeen Shariff,Linish Baalan, Ashique Rahman, Ram Sudhan Subramaniyan Surgical Technology Internarional. 2022 May ;46.</p>
                            <a class="doi" href="doi: 10.36922/sti.0402">doi: 10.36922/sti.0402</a>
                        </div>
                        
                    </div>
                    <!-- publication card open -->


                    <!-- publication card open 2-->
                    <div class="publication-card" data-aos="fade-up"  data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                         <div class="imb-block " data-aos="fade-up" data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                            <img src="<?=base_url('public/assets/template/images/publications/tibial.webp');?>" width="100%" alt="">
                        </div>
                        <div class="content-block">
                            <h1>Tibial defect management in primary total knee arthroplasty: an algorithmic approach and its preliminary outcome</h1>
                            <p>Sharat Balemane, Nahas R, Muhammed Fazil VV, Balaraman R, Arjun Umesh Kumar, Mohammed Inayathulla Khan, Rajkumar V, Ram Sudhan S</p>
                            <p>Chir Narzadow Ruchu Ortop Pol, 2026, March; 91(2)</p>
                            <a class="doi" href="doi: 10.31139/chnriop.2026.91.2.1">doi: 10.31139/chnriop.2026.91.2.1</a>
                        </div>
                    </div>
                    <!-- publication card open 2-->
                    <!-- publication card open 3-->
                    <div class="publication-card">
                         <div class="imb-block " data-aos="fade-up"  data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                            <img src="<?=base_url('public/assets/template/images/publications/jbjs.webp');?>" width="100%" alt="">
                        </div>
                        <div class="content-block">
                            <h1>CALCANEAL RHINOSPORIDIOSIS, A RARE MANIFESTATION OF OSTEOMYELITIS</h1>
                            <p>Abdul Gafoor, Moidu Shameer KP, Khayas Omer Kunheen, and Ram Sudhan Subramaniyan</p>
                            <p>JBJS Case Connect, 2026 May; 16(2)</p>
                            <a class="doi" href="doi.org/10.2106/JBJS.CC.26.00016">doi.org/10.2106/JBJS.CC.26.00016</a>
                        </div>
                    </div>
                    <!-- publication card open 3-->
                    <!-- publication card open 4-->
                    <div class="publication-card">
                        <div class="imb-block " data-aos="fade-up" data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                            <img src="<?=base_url('public/assets/template/images/publications/atlas-of-arthroscopy.webp');?>" width="100%" alt="">
                        </div>
                        <div class="content-block">
                            <h1>All-INSIDE MENISCUS REPAIR WITH HORIZONTAL MATTRESS STITCH - PEARLS TO AVOID KINKING</h1>
                            <p>Dr.Ram Sudhan, Dr.Himanshu Gupta, Dr.Suryansh Nema</p>
                            <p>Atlas of Arthroscopy, 2026 November.</p>
                            <a class="doi" href="javascript:void(0)">Springer Nature </a>
                        </div>
                    </div>
                    <!-- publication card open 4-->

                     <!-- publication card open 5-->
                    <div class="publication-card" data-aos="fade-up"  data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                         <div class="imb-block " data-aos="fade-up" data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                            <img src="<?=base_url('public/assets/template/images/publications/ournal-of-orthopedics.webp');?>" width="100%" alt="">
                        </div>
                        <div class="content-block">
                            <h1>ETHNIC AND SEX-SPECIFIC DIFFERENCES IN PROXIMAL FEMORAL GEOMETRY AND ITS IMPLICATIONS FOR PROSTHETIC DESIGN IN TOTAL HIP ARTHROPLASTY - A SYSTEMATIC ANALYSIS</h1>
                            <p>Ram Sudhan S, Yashwanth Krishna, Vinayak Prabhu, Nahas R, Mohamed Azhaarudeen A, Naveen P. Gopinath, Daku Jadav, Hishanil Rasheed N.K, Avinash TP, Sharat Balemane</p>
                            <p>Journal Of Orthopedics,2025 December;73(1):116-127</p>
                            <a class="doi" href="javascript:void(0)">doi.org/10.1016/j.jor.2025.12.005</a>
                        </div>
                    </div>
                    <!-- publication card open 5-->

                     <!-- publication card open 6-->
                    <div class="publication-card" data-aos="fade-up"  data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                         <div class="imb-block " data-aos="fade-up" data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                            <img src="<?=base_url('public/assets/template/images/publications/the_cpak.webp');?>" width="100%" alt="">
                        </div>
                        <div class="content-block">
                            <h1>THE CPAK PARADIGM IN TOTAL KNEE ARTHROPLASTY: A CRITICAL REVIEW OF ITS THEORETICAL RATIONALE AND CLINICAL APPLICABILITY</h1>
                            <p>Ram Sudhan S, Sharat Balemane, Muhammed Niyas Mancheri, & Naveen P. Gopinath</p>
                            <p>Journal of Orthopaedic Report, 2025 November</p>
                            <a class="doi" href="javascript:void(0)">doi.org/10.1016/j.jorep.2025.100824 </a>
                        </div>
                    </div>
                    <!-- publication card open 6-->

                    <!-- publication card open 7-->
                    <div class="publication-card" data-aos="fade-up"  data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                         <div class="imb-block " data-aos="fade-up" data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                            <img src="<?=base_url('public/assets/template/images/publications/ournal-of-orthopedics.webp');?>" width="100%" alt="">
                        </div>
                        <div class="content-block">
                            <h1>CPAK OVERSIMPLIFIES THE COMPLEX 3D ANATOMY OF THE BONY KNEE: ROLE OF 3D CT FOR IMPROVED ANALYSIS – A SCHEMATIC OVERVIEW</h1>
                            <p>Ram Sudhan S, Gopinathan P, Sharat Balemane, Sibin Surendran, & Raju Vaishya</p>
                            <p>Journal of Orthopaedics, 2025 September; 71(1):340-349.</p>
                            <a class="doi" href="javascript:void(0)">doi.org/10.1016/j.jor.2025.10.003 </a>
                        </div>
                    </div>
                    <!-- publication card open 7-->
                     <!-- publication card open 8-->
                    <div class="publication-card" data-aos="fade-up"  data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                         <div class="imb-block " data-aos="fade-up" data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                            <img src="<?=base_url('public/assets/template/images/publications/tibial.webp');?>" width="100%" alt="">
                        </div>
                        <div class="content-block">
                            <h1>IMPACT OF SELECTIVE NOTCHPLASTY ON FUNCTIONAL OUTCOMES FOLLOWING ACL RECONSTRUCTION</h1>
                            <p>Ashique Rahman A, Sharat Balemane, Muthukumar Subramanian, Akhil M Kumar, Ram Sudhan S</p>
                            <p>Chirurgia Narządów Ruchu i Ortopedia Polska, 2025 August;90(04):200-206.</p>
                            <a class="doi" href="javascript:void(0)">doi.org/10.31139/chnriop.2025.90.4.2</a>
                        </div>
                    </div>
                    <!-- publication card open 8-->
                    <!-- publication card open 9-->
                    <div class="publication-card" data-aos="fade-up"  data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                         <div class="imb-block " data-aos="fade-up" data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                            <img src="<?=base_url('public/assets/template/images/publications/confusions.webp');?>" width="100%" alt="">
                            
                        </div>
                        <div class="content-block">
                            <h1>“CONFUSIONS AND CONVICTIONS IN THE PLACEMENT OF ACETABULAR CUP IN THA - A BRIEF ANALYSIS OF THE PAST, PRESENT AND FUTURE</h1>
                            <p>Ram Sudhan S, Muhammed Faisal, Muhammed Fazil V V, Abdul Gafoor PM, Anwar Marthya Hamid, Sharat Balemane, & Fardeen Sharif</p>
                            <p>Bulgarian Journal Of Orthopaedics & Traumatology, 2025 July;62(1):88-114.</p>
                            <a class="doi" href="javascript:void(0)">doi.org/10.58542/jbota.v62i1.170 </a>
                        </div>
                    </div>
                    <!-- publication card open 9-->
                    <!-- publication card open 10-->
                    <div class="publication-card" data-aos="fade-up"  data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                         <div class="imb-block " data-aos="fade-up" data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                            <img src="<?=base_url('public/assets/template/images/publications/tibial.webp');?>" width="100%" alt="">
                        </div>
                        <div class="content-block">
                            <h1>ACRAL TENDON SHEATH GIANT CELL TUMOR'S -CASE SERIES WITH A BRIEF REVIEW</h1>
                            <p>Prabu Manoharan, Rajkumar Vijaykumar, Kannan Kanapathy Rajamanickam,Varaprasad Narayanaswamy, Srinivasan Anbu, Perumal Selvam, Ram Sudhan</p>
                            <p>Chirurgia Narządów Ruchu i Ortopedia Polska, 2025 July.</p>
                            <a class="doi" href="javascript:void(0)">doi.org/10.31139/chnriop.2026.91.1.1</a>
                        </div>
                    </div>
                    <!-- publication card open 10-->
                    <!-- publication card open 11-->
                    <div class="publication-card" data-aos="fade-up"  data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                         <div class="imb-block " data-aos="fade-up" data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                            <img src="<?=base_url('public/assets/template/images/publications/current_trends.webp');?>" width="100%" alt="">
                        </div>
                        <div class="content-block">
                            <h1>“CURRENT TRENDS AND APPLICATIONS IN ANKLE ARTHROSCOPYA CONCISED REVIEW</h1>
                            <p>Ram Sudhan S, Abdul Gafoor PM, Sharat Balemane & Sharat Balemane</p>
                            <p>Medical Journal Of Wuhan University, 2025 June;46(04).</p>
                            <a class="doi" href="javascript:void(0)">doi.org/10.31139/chnriop.2026.91.1.1</a>
                        </div>
                    </div>
                    <!-- publication card open 11-->
                     <!-- publication card open 12-->
                    <div class="publication-card" data-aos="fade-up"  data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                         <div class="imb-block " data-aos="fade-up" data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                            <img src="<?=base_url('public/assets/template/images/publications/the_cpak.webp');?>" width="100%" alt="">
                        </div>
                        <div class="content-block">
                            <h1>“LOCKED POSTERIOR DISLOCATION OF SHOULDER: A REITERATION OF McLAUGHLIN'S PROCEDURE, REASSESSING THE RELEVANCE AFTER 7 DECADES -A CASE REPORT"</h1>
                            <p>Harshal Adinath Patil, Ameya Sawarkar, & Ram Sudhan S</p>
                            <p>Journal of Orthopaedic Reports, 2025 June;5(2) April .</p>
                            <a class="doi" href="javascript:void(0)">doi.org/10.1016/j.jorep.2025.100711</a>
                        </div>
                    </div>
                    <!-- publication card open 12-->
                     <!-- publication card open 13-->
                    <div class="publication-card" data-aos="fade-up"  data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                         <div class="imb-block " data-aos="fade-up" data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                            <img src="<?=base_url('public/assets/template/images/publications/confusions.webp');?>" width="100%" alt="">
                        </div>
                        <div class="content-block">
                            <h1>SYSTEMIC JUVENILE IDIOPATHIC ARTHRITIS AND ARTHRALGIA - CAN IT BE DIAGNOSED EARLY WITHIN THE WINDOW PERIOD? – AN OBSERVATION OF SERUM BIOMARKERS AND ANALYSIS WITH OTHER DIFFERENTIAL CONDITIONS IN CHILDREN</h1>
                            <p>Ram Sudhan S, MuthuKumar Subramanian, Rajkumar V, Fardeen Shariff, Linish Baalan R,Sharat Balemane</p>
                            <p>Bulgarian Journal Of Orthopaedics & Traumatology, 2024 September;61(4)</p>
                            <a class="doi" href="javascript:void(0)">doi.org/10.58542/jbota.v61i4.138</a>
                        </div>
                    </div>
                    <!-- publication card open 13--> 
                    <!-- publication card open 14-->
                    <div class="publication-card" data-aos="fade-up"  data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                         <div class="imb-block " data-aos="fade-up" data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                            <img src="<?=base_url('public/assets/template/images/publications/ournal-of-orthopedics.webp');?>" width="100%" alt="">
                        </div>
                        <div class="content-block">
                            <h1>SPINOPELVIC ALIGNMENT AND PRECISE CUP PLACEMENT IN TOTAL HIP ARTHROPLASTY - A SYSTEMATIC REVIEW</h1>
                            <p>Sudhan, Ram S. & Surendran, Sibin & Gopinath, Naveen & U, Jijulal & Fazil V.V. & Gopinathan,Patinharayil & Vasu, Nikhil</p>
                            <p>Journal Of Orthopaedics, 2024 August; 60(08):105-114</p>
                            <a class="doi" href="javascript:void(0)">doi.org/10.1016/j.jor.2024.08.008</a>
                        </div>
                    </div>
                    <!-- publication card open 14--> 
                     <!-- publication card open 15-->
                    <div class="publication-card" data-aos="fade-up"  data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                         <div class="imb-block " data-aos="fade-up" data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                            <img src="<?=base_url('public/assets/template/images/publications/ournal-of-orthopedics.webp');?>" width="100%" alt="">
                        </div>
                        <div class="content-block">
                            <h1>PTH LIKE SUBSTANCE SECRETING MESENCHYMAL TUMOR CAUSING ONCOGENIC OSTEOMALACIA; UNRAVELLING THE DIFFICULTIES IN LOCALIZATION</h1>
                            <p>Jijulal C U, Sreeja Sreedharan, Naveen P. Gopinath, Sibin Surendran, Gopinathan Patinharayil,Muhammed Fazil, Nikhil K V, Ram Sudhan</p>
                            <p>Journal Of Orthopaedics, 2024 July;58(July):123-127.</p>
                            <a class="doi" href="javascript:void(0)">doi.org/10.1016/j.jor.2024.06.034</a>
                        </div>
                    </div>
                    <!-- publication card open 15--> 
                    <!-- publication card open 16-->
                    <div class="publication-card" data-aos="fade-up"  data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                         <div class="imb-block " data-aos="fade-up" data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                            <img src="<?=base_url('public/assets/template/images/publications/the_cpak.webp');?>" width="100%" alt="">
                        </div>
                        <div class="content-block">
                            <h1>A CASE REPORT OF LARSEN SYNDROME - A RARE GENETIC DISORDER.</h1>
                            <p>Nair, K. R., Sreedharan, S., Gopinath, N. P., Surendran, S., Patinharayil, G., Fazil, M.,Sudhan, R.</p>
                            <p>Journal of Orthopaedic Reports, 2024 June;4(2)100421</p>
                            <a class="doi" href="javascript:void(0)">doi.org/10.1016/j.jorep.2024.100421</a>
                        </div>
                    </div>
                    <!-- publication card open 16--> 
                    <!-- publication card open 17-->
                    <div class="publication-card" data-aos="fade-up"  data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                         <div class="imb-block " data-aos="fade-up" data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                            <img src="<?=base_url('public/assets/template/images/publications/jhsmr.webp');?>" width="100%" alt="">
                        </div>
                        <div class="content-block">
                            <h1>A PROSPECTIVE STUDY OF 18F-FDG PET-CT APPLICATION IN THERAPEUTIC MONITORING OF OSTEOARTICULAR TUBERCULOSIS</h1>
                            <p>Mohammed Ayaz N. Saiyed, Mathew Varghese, Harshal Adinath Patil, Ram Sudhan.S</p>
                            <p>Journal of Health Science and Medical Research, 2024 January; 48(1)2024</p>
                            <a class="doi" href="javascript:void(0)">doi.org/10.31584/jhsmr.20231027 </a>
                        </div>
                    </div>
                    <!-- publication card open 17--> 
                    <!-- publication card open 18-->
                    <div class="publication-card" data-aos="fade-up"  data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                         <div class="imb-block " data-aos="fade-up" data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                            <img src="<?=base_url('public/assets/template/images/publications/comparison.webp');?>" width="100%" alt="">
                        </div>
                        <div class="content-block">
                            <h1>COMPARISON OF ANTERIOR CRUCIATE LIGAMENT RECONSTRUCTION WITH AND WITHOUT CONCOMITANT MENISCAL REPAIR: A PROSPECTIVE COMPARATIVE STUDY</h1>
                            <p>Arya A, Kumar SD, Rajkumar V, Sudhan SR </p>
                            <p>Journal Of Medical And Scientific Research, 2023 July:11(4):315-322.</p>
                            <a class="doi" href="javascript:void(0)">doi.org/10.17727/JMSR.2023/11-58 </a>
                        </div>
                    </div>
                    <!-- publication card open 18--> 
                    <!-- publication card open 19-->
                    <div class="publication-card" data-aos="fade-up"  data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                         <div class="imb-block " data-aos="fade-up" data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                            <img src="<?=base_url('public/assets/template/images/publications/ultrasonography.webp');?>" width="100%" alt="">
                        </div>
                        <div class="content-block">
                            <h1>ULTRASONOGRAPHY IN THE DIAGNOSIS OF CARPAL TUNNEL SYNDROME: ITS METHOD, OUTCOME AND PRECISION</h1>
                            <p>V.Rajkumar, Harshal Adinath Patil, Dheepan Kumar.S, Ram Sudhan.S</p>
                            <p>International Medical Journal, 2023 July;30(7)July</p>
                            <a class="doi" href="javascript:void(0)">doi.org/10.17727/JMSR.2023/11-58 </a>
                        </div>
                    </div>
                    <!-- publication card open 19-->
                     <!-- publication card open 20-->
                    <div class="publication-card" data-aos="fade-up"  data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                         <div class="imb-block " data-aos="fade-up" data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                            <img src="<?=base_url('public/assets/template/images/publications/european-chemical.webp');?>" width="100%" alt="">
                        </div>
                        <div class="content-block">
                            <h1>AN OBSERVATIONAL STUDY OF COMPLICATIONS IN PATIENTS TREATED WITH CEMENTED BIPOLAR HEMIARTHROPLASTY IN GERIATRIC FRACTURE NECK OF FEMUR AT A TERTIARY SETUP</h1>
                            <p>Dr. Harshal AdinathPatil, Dr. Dheepan Kumar, Dr. V Rajkumar, Dr. Ram Sudhan S</p>
                            <p>European Chemical Bulletin, 2023 June;12(8):2416-2428 </p>
                            <a class="doi" href="javascript:void(0)">doi.org/10.48047/ecb/2023.12.8.200</a>
                        </div>
                    </div>
                    <!-- publication card open 20-->
                    <!-- publication card open 21-->
                    <div class="publication-card" data-aos="fade-up"  data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                         <div class="imb-block " data-aos="fade-up" data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                            <img src="<?=base_url('public/assets/template/images/publications/descriptive.webp');?>" width="100%" alt="">
                        </div>
                        <div class="content-block">
                            <h1>A DESCRIPTIVE STUDY OF VARIOUS PATTERNS OF INTERNAL DERANGEMENTS OF THE KNEE IN 3T-MRI AND ITS CORRELATION WITH ARTHROSCOPIC FINDINGS</h1>
                            <p>Dheepan Kumar, Harshal Adinath Patil, V Rajkumar and Ram Sudhan</p>
                            <p>International Journal Of Recent Scientific Research, 2022 November;13(11):2623-2629 </p>
                            <a class="doi" href="javascript:void(0)">doi.org/10.24327/ijrsr.2022.1312.0537 </a>
                        </div>
                    </div>
                    <!-- publication card open 21-->
                    <!-- publication card open 22-->
                    <div class="publication-card" data-aos="fade-up"  data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                         <div class="imb-block " data-aos="fade-up" data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                            <img src="<?=base_url('public/assets/template/images/publications/outcome.webp');?>" width="100%" alt="">
                        </div>
                        <div class="content-block">
                            <h1>OUTCOME OF DISTAL FITTING REVISION HEMIARTHROPLASTY IN FAILED OSTEOSYNTHESES OF TROCHANTERIC FRACTURES IN ELDERLY–A CROSS-SECTIONAL RETROSPECTIVE STUDY</h1>
                            <p>S. Ram Sudhan, Rajkumar Vijayakumar, Dheepan Kumar, Viswanathan Muthiah,Aravind Venkatasamy Ayothi.</p>
                            <p>Asian Journal of Orthopaedic Research, 2022, January; 5(1): 14-22. </p>
                            <a class="doi" href="https://journalajorr.com/index.php/AJORR/article/view/121/24">https://journalajorr.com/index.php/AJORR/article/view/121/24 </a>
                        </div>
                    </div>
                    <!-- publication card open 22-->
                    <!-- publication card open 23-->
                    <div class="publication-card" data-aos="fade-up"  data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                         <div class="imb-block " data-aos="fade-up" data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                            <img src="<?=base_url('public/assets/template/images/publications/analgesic.webp');?>" width="100%" alt="">
                        </div>
                        <div class="content-block">
                            <h1>THE ANALGESIC EFFICACY OF A STANDARDIZED LOCAL INFILTRATION ANALGESIA TECHNIQUE OVER EQUIVALENT EPIDURAL ANALGESIA IN TKA AND A COMPARATIVE ANALYSIS WITH MOST CITED RCTS</h1>
                            <p>Ram Sudhan.S, Jithesh Asokan, Vijetha Nagendra, Bibu George, Bipin Theruvil. </p>
                            <p>Paripex - Indian Journal Of Research, 2021, March:10(03):2250 - 1991</p>
                            <a class="doi" href="javascript:void(0)">doi.org/10.36106/paripex/8315440</a>
                        </div>
                    </div>
                    <!-- publication card open 23-->       
                    <!-- publication card open 24-->
                    <div class="publication-card" data-aos="fade-up"  data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                         <div class="imb-block " data-aos="fade-up" data-aos-duration="1500" data-aos-anchor-placement="center-bottom">
                            <img src="<?=base_url('public/assets/template/images/publications/surgical-update.webp');?>" width="100%" alt="">
                        </div>
                        <div class="content-block">
                            <h1>EFFECTIVENESS OF A STANDARD PROTOCOL FOR TRANEXAMIC ACID ADMINISTRATION IN TOTAL HIP & KNEE ARTHROPLASTY – DOES IT MAKE A DIFFERENCE?</h1>
                            <p>Sudhan S R, Karthick S, Nagendra V, Asokan J, George V, Jacob J</p>
                            <p>international journal of surgery trauma and orthopedics,2020, November:6(02):MAR-ARP</p>
                            <a class="doi" href="javascript:void(0)">doi.org/10.17511/ijoso.2020.i02.09 </a>
                        </div>
                    </div>
                    <!-- publication card open 24-->                         
                    
                 </article>

                 
                <!-- close publications list -->
                </div>
            </div>
        </div>
    </div>
</main>
<!-- close Publications -->




    



    

                    
<?= view('frontend/inc/footerLink') ?>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>

</html>