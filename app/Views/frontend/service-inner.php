<?= view('frontend/inc/header') ?>

<style>

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



    <div class=" p-0 main-section">
    <div class="container">
        <div class="inner-section bg-light-gray">
            <div class="row g-4">

            <!-- Sidebar -->
            <div class="col-lg-3 pe-lg-1">
                <div class="page-single-sidebar position-sticky row" >

                   <div class="page-single-category-list wow fadeInUp p-0">
                            <h3>CONTENT </h3>

                        <ul class="list-group p-0" id="serviceList">
                            <?php if(!empty($titleBar)){
                                foreach($titleBar as $index => $otherService){ ?>
                                    
                                    <li class="list-group-item  list-group-item<?= $index ?> ">
                                        <a href="#ser<?=$index?>"
                                           class="service-link d-block py-2 text-decoration-none"
                                           data-index="<?= $index ?>">
                                            <?=$otherService['serviceTitle'];?>
                                        </a>
                                    </li>

                            <?php }} ?>
                        </ul>

                    </div>

                </div>
            </div>

            <!-- Content -->
            <div class="col-lg-9">
                <div class="bg-white p-3 p-lg-5 rounded-4 shadow-sm ">

                    <?php if (!empty($services)) {
                        foreach ($services as $index => $service) {

                            $variants = $service['variants'];
                    ?>

                     <div id="ser<?=$index;?>" class="case-study-single-content mb-5">

                         <!-- Main Category Title -->
                        <div class="section-title pt-4">
                            <h3 class="wow fadeInUp"><?=$service['mainTitle'] ?? ''?></h3>
                        </div>


                        <?php foreach ($variants as $i => $variant) { ?>

                            <div class="mb-4">

                                <div class="section-title">
                                    <h2 class="wow fadeInUp" style="font-size: 20px;font-weight: 400;"><?=$variant['serviceTitle']?></h2>
                                </div>

                                <div class="mb-3">
                                    <?=$variant['description']?>
                                </div>

                                <!-- Images -->
                                <?php if (!empty($variant['subImages'])) { ?>
                                    <div class="row g-3">
                                        <?php foreach ($variant['subImages'] as $gallery) {
                                            if (!empty($gallery['image'])) { ?>
                                                <div class="col-12">
                                                    <img src="<?= validImg($gallery['image']) ?>" 
                                                         class="img-fluid rounded-3 shadow-sm w-100">
                                                </div>
                                        <?php }} ?>
                                    </div>
                                <?php } ?>

                            </div>

                        <?php } ?>

                        <!-- Divider -->
                        <hr class="my-5">

                    </div>

                    <?php } } ?>

                </div>
            </div>
                                                
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