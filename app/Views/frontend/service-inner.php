<?= view('frontend/inc/header') ?>

<style>
    .page-single-sidebar {
    position: sticky;
    top: 100px;
}

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
    height: 100%;
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

	<div class="page-header bg-section dark-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-3" data-cursor="-opaque"><?=($page ?? '');?>
                         </h1> 
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">home</a></li>
								<li class="breadcrumb-item active" aria-current="page"><?=($subTitle ?? '');?></li>
                     

							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>



    <div class="page-case-study-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Page Single Sidebar Start -->
                    <div class="page-single-sidebar">
                        <!-- Page Single Category List Start -->
                        <div class="page-single-category-list wow fadeInUp">
                            <h3>CONTENT </h3>
                             <ul class="list-group p-0 " id="serviceList">
                        <?php
                       if(!empty($titleBar)){
                                    foreach($titleBar as $index => $otherService){
                                ?>
                                <li class="list-group-item list-group-item<?= $index ?> active">
                                    <a  href="#ser<?=$index?>"
                                   class="service-link "
                                   data-index="<?= $index ?>">
                                 <?=$otherService['serviceTitle'];?>
                                </a>
                            </li>
                        <?php };
                        } ?>
                    </ul>

                         
                        </div>
                        <!-- Page Single Category List End -->
                        
                     
                        <!-- Sidebar CTA Box End -->
                    </div>
                    <!-- Page Single Sidebar End -->
                </div>


                <div class="col-lg-8">
                   <?php
                        if (!empty($services)) {
                            foreach ($services as $index => $service) {

                                $variants = $service['variants'];
                        ?>
                        <div id="ser<?=$index;?>" class="case-study-single-content">

                            <!-- Main Category Title -->
                            <div class="section-title pt-3">
                                <h3 class="wow fadeInUp"><?=$service['mainTitle'] ?? ''?></h3>
                            </div>

                            <?php 
                            $i=0;
                            foreach ($variants as   $variant) { ?>

                                <!-- Variant Section -->
                                <div class="page-single-faqs" id="ser__<?=$i;?>">

                                    <div class="section-title">
                                        <h2 class="wow fadeInUp"><?=$variant['serviceTitle']?></h2>
                                    </div>

                                    <div class="faq-accordion">
                                        <?=$variant['description']?>
                                    </div>

                                </div> 

                                <?php if (!empty($variant['subImages'])) { ?>
                                <div class="mt-3 mb-3">
                                    <div class="row d-flex align-items-stretch">

                                        <?php foreach ($variant['subImages'] as $gallery) {
                                            if (!empty($gallery['image'])) { ?>
                                                <div class="col-lg-4">
                                                    <div class="sidebar-cta-box wow fadeInUp">
                                                        <div class="sidebar-cta-image h-100">
                                                            <figure>
                                                                <img src="<?= validImg($gallery['image']) ?>" alt="">
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php } } ?>

                                    </div>
                                </div>
                                <?php } ?>

                            <?php $i++; } ?>

                        </div>
                        <?php
                            }
                        }
                        ?>
                   
                </div>

            </div>
        </div>
    </div>              
<?= view('frontend/inc/footerLink') ?>
    
</body>
<script>
document.addEventListener("DOMContentLoaded", function () {

    const sections = document.querySelectorAll(".case-study-single-content");
    const navItems = document.querySelectorAll("#serviceList .list-group-item");

    window.addEventListener("scroll", function () {

        let currentIndex = 0;

        sections.forEach((section, index) => {
            const top = section.offsetTop - 200;

            if (window.scrollY >= top) {
                currentIndex = index;
            }
        });

        // remove all active
        navItems.forEach(item => item.classList.remove("active"));

        // add active to current
        if (navItems[currentIndex]) {
            navItems[currentIndex].classList.add("active");
        }

    });

});
</script>

</html>