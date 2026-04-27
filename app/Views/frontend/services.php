<?= view('frontend/inc/header') ?>

	<div class="page-header bg-section dark-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-3" data-cursor="-opaque">Knee
                         </h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Knee</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>


    
    <!-- Page Services Start -->
    <div class="page-services d-none">
        <div class="container">

        <?php 
        $i=1;
        if(!empty($services)){
            foreach($services as $service) {
            ?>  
                <div class="row section-row align-items-center">
                    <div class="col-lg-12">
                        <!-- Section Title Start -->
                        <div class="section-title section-title-center">
                            <h2 class="text-anime-style-3" data-cursor="-opaque"><?php echo $service['sub_category_title']; ?></h2>
                        </div>
                        <!-- Section Title End -->
                    </div>
                </div>

                <!-- <div class="row">  -->
                       <?php
                        $items = $service['items'];
                        $it = 0;

                        if (!empty($items)) {
                            foreach ($items as $item) {

                                // OPEN ROW
                                if ($it % 3 == 0) {
                                    echo '<div class="row">';
                                }
                                ?>
                                <div class="col-lg-4 col-md-6">
                                    <!-- Service Item Start -->
                                    <div class="service-item wow fadeInUp">
                                        <div class="service-content">
                                            <div class="service-content-title">
                                                <h2>
                                                    <a href="<?= base_url('service-details/'.$item['slug']); ?>">
                                                        <?= esc($item['title']); ?>
                                                    </a>
                                                </h2>
                                            </div>
                                            <p><?= esc($item['note']); ?></p>
                                        </div>

                                        <div class="service-image">
                                            <a href="<?= base_url('service-details/'.$item['slug']); ?>" data-cursor-text="View">
                                                <figure class="image-anime">
                                                    <img src="<?= validImg($item['image']); ?>" alt="">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Service Item End -->
                                </div>
                                <?php

                                if ($it % 3 == 2) {
                                    echo '</div>';
                                }

                                $it++;
                            }

                            if ($it % 3 != 0) {
                                echo '</div>';
                            }
                        }
                        ?>

                      
                     <!-- </div>  -->

            <?php
            }
        } ?>

    </div>
</div>
    <!-- Page Services End -->
  
    <div class="page-services__ main-section">
    <div class="container">
        <div class="inner-section bg-light-gray">
        <div class="row">

            <!-- LEFT SIDEBAR -->
            <div class="col-lg-3">
                <div class="service-sidebar page-single-category-list">

                    <h3 class="service-link"  data-index="all">CHAPTERS</h3>

                    <ul class="list-group p-0 " id="serviceList">
                        <?php
                        if(!empty($services)) {?>
                         
                            <?php
                            foreach($services as $index => $service) {
                                ?>
                                <li class="list-group-item list-group-item<?= $index ?> ">
                                    <a href="javascript:void(0);" 
                                   class="service-link "
                                   data-index="<?= $index ?>">
                                    <?= esc($service['sub_category_title']); ?>
                                </a>
                            </li>
                        <?php };
                        } ?>
                    </ul>

                    <div class=" d-none">
                        <a href="#" class="btn btn-primary w-100">
                            Request a Consultation
                        </a>
                    </div>

                </div>
            </div>

            <!-- RIGHT CONTENT -->
            <div class="col-lg-9">

                <div id="serviceContent" class="row">

                    <?php 


                    // Default first service
                    $firstService = $services[0] ?? [];
                    $items = $firstService['items'] ?? [];

                    if (!empty($service)) {
                        foreach ($services as  $index => $service) {
                            $items = $service['items'] ?? [];
                           $img = $service['category_image'];
                    ?>
                        <div class="col-lg-4 col-md-6 pb-0">
                                <div class="service-item wow fadeInUp mb-0">
                                        <div class="service-content">
                                            <div class="service-content-title ">
                                                <h2>
                                                    <a href="<?=base_url('service-details/'.$service['category_slug'])?>"   class="service-link__"  data-index="<?= $index ?>">
                                                        <?= esc($service['sub_category_title']); ?>
                                                    </a>
                                                </h2>
                                            </div>
                                                <div class="service-image mb-2">
                                            <a href="<?= base_url('service-details/'.$service['category_slug'])?>" data-cursor-text="View">
                                                <figure class="image-anime">
                                                    <img src="<?= validImg($img); ?>" alt="">
                                                </figure>
                                            </a>
                                        </div>

                                            <p><?= $service['category_description']; ?></p>
                                        </div>

                                    
                                    </div>
                        </div>
                    <?php 
                        }
                    } else {
                        echo '<p>No services found</p>';
                    }
                    ?>

                </div>

            </div>

        </div>
    </div>
                </div>
</div>

<?= view('frontend/inc/footerLink') ?>


<script>
const BASE_URL = "<?= base_url(); ?>";
const servicesData = <?= json_encode($services); ?>;
</script>

<script>
$(document).on('click', '.service-link', function () {

    let index = $(this).data('index');
  
    // Active class
    $('.list-group-item').removeClass('active');
    // add a active button data-index li class 
     
    $('.list-group-item' + index).addClass('active');
  //  $(this).closest('li').addClass('active');

    let html = '';
    if(index == 'all') {
        servicesData.forEach(function(service,count){
              let image =   service.category_image ? BASE_URL + service.category_image : BASE_URL + 'uploads/default.png';
            html += `
                <div class="col-lg-4 col-md-6 mb-4">
                                <div class="service-item wow fadeInUp">
                                        <div class="service-content">
                                            <div class="service-content-title">
                                                <h2>
                                                    <a href="${BASE_URL}service-details/${service['category_slug']}"   >
                                                        ${service.sub_category_title}
                                                    </a>
                                                </h2>
                                            </div>
                                              <div class="service-image mb-2">
                                            <a href="${BASE_URL}service-details/${service['category_slug']}" data-cursor-text="View">
                                                <figure class="image-anime">
                                                    <img src="${image}" alt="">
                                                </figure>
                                            </a>
                                        </div>

                                            <p>${service.category_description}</p>
                                        </div>

                                      
                                    </div>
                        </div>
            `;
        })
    }else{
          let items = servicesData[index].items || [];
   // let allServices = servicesData

    if (items.length > 0) {

        items.forEach(function(item){

            let image = item.image ? item.image : 'no-image.png';

            html += `
                <div class="col-lg-4 col-md-6 ">
                    <div class="service-item">

                        <div class="service-content-title">
                            <h2>
                                <a href="${BASE_URL}service-details/${item.category_slug}">
                                    ${item.title}
                                </a>
                            </h5>
                            
                        </div>

                        <div class="service-image mb-3">
                           <img src="${image}" 
                                 style="width:100%; object-fit:cover;">
                        </div>
                        <p>${item.note ?? ''}</p>

                    </div>
                </div>
            `;
        });

    } else {
        html = `<p>No services found</p>`;
    }
}


    $('#serviceContent').html(html);
});
</script>

<!-- ✅ CSS -->
<style>
.service-sidebar {
    background: #f8f9fa;
    padding: 0px;
    border-radius: 10px;
}

.list-group-item {
    border: none;
    padding: 10px;
    cursor: pointer;
    margin-bottom:0px!important;
}

.list-group-item.active {
    background-color: #f1f1f1;
    color: #fff;
    padding: 10px;
    margin: 0;
}
.page-single-category-list ul li:last-child{
     padding: 10px;
}
.list-group-item a {
    text-decoration: none;
    color: inherit;
    display: block;
    padding: 10px;
}

.service-item {
    background: #fff;
    padding: 15px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    transition: 0.3s;
}

.service-item:hover {
    transform: translateY(-5px);
}

.service-item h5 {
    font-size: 16px;
    margin-bottom: 10px;
}

.service-item p {
    font-size: 14px;
    color: #666;
}
</style>