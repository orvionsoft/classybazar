 
<?php $__env->startSection('title', 'Home'); ?> 
<?php $__env->startPush('css'); ?>
<style>
    body, h1, h2, h3, h4, h5, h6, p, div, span, a, button, input, textarea, select {
        font-family: "Hind Siliguri", sans-serif !important;
    }
</style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('seo'); ?>
 
<meta name="description" content="<?php echo $generalsetting->meta_description; ?>" />
<meta name="keyword" content="<?php echo $generalsetting->meta_keyword; ?>" />

		<!-- Open Graph data -->
<meta property="og:title" content="<?php echo e($generalsetting->name); ?>" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo e(URL::to('/')); ?>" />
<meta property="og:image" content="<?php echo e(asset($generalsetting->og_baner)); ?>" />
<meta property="og:description" content="<?php echo $generalsetting->meta_description; ?>" />
<?php $__env->stopPush(); ?> <?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/owl.carousel.min.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/owl.theme.default.min.css')); ?>" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" rel="stylesheet" />
<?php $__env->stopPush(); ?> <?php $__env->startSection('content'); ?>
<section class="slider-section">
    <div class="home-slider-container" style="width: 100%;padding:0;margin:0;">
        <div class="main_slider owl-carousel" style="margin-top: -10px;">
                        <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="slider-item">
                                <img src="<?php echo e(asset($value->image)); ?>" alt="" />
                                
                            </div>
                            <!-- slider item -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
</section>
<!-- slider end -->

<section>
    <div class="container" style="text-align: center; padding: 15px 0">
        <h1 style="font-size: 25px; font-weight: bold;  font-family: "Hind Siliguri", sans-serif;">সেরা মশলা ও খাবারের প্রিমিয়াম কালেকশন</h1>  
    </div>
</section>

<section class="homeproduct">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="sec_title">
                    <h3 class="section-title-header">
                        <div class="timer_inner">
                            <div class="">
                                <span class="section-title-name"> Top Categories </span>
                            </div>
                        </div>
                    </h3>
                </div>
            </div>

            
            
            <div class="col-sm-12">
                <div class="category-sliger owl-carousel">
                    <?php $__currentLoopData = $menucategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div>
                            <div class="text-center ">
                                <a href="<?php echo e(route('category', $value->slug)); ?>">
                                    <img class="" id="top-category-img" src="<?php echo e(asset($value->image)); ?>" alt="" style="height: 170px; border: 2px solid #3c7d17; border-radius: 50%; width: 100%;" />
                                </a>
                            </div>
                            <div class="text-center" style="margin-top: 10px;">
                                <a href="<?php echo e(route('category', $value->slug)); ?>">
                                    <div style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                        <?php echo e($value->name); ?>

                                    </div>
                                
                                </a>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

        </div>
    </div>
</section>





<?php
    $hotDealEndDate = $generalsetting->hot_deal_end_date.'T23:59:59';
    $flashSaleEndDate = $generalsetting->flash_sale_end_date.'T23:59:59';
    $isHotDealActive = $hotDealEndDate && \Carbon\Carbon::parse($hotDealEndDate)->isFuture(); // Check if the date is in the future
    $isFlashSaleActive = $flashSaleEndDate && \Carbon\Carbon::parse($flashSaleEndDate)->isFuture(); 
?>
<!--//Flash sales-->
<?php if($isFlashSaleActive): ?>
<section class="homeproduct">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="sec_title">
                    <h3 class="section-title-header">
                        <div class="timer_inner">
                            <div class="">
                                <span class="section-title-name">Flash Sales </span>
                            </div>

                            <div class="">
                                <div class="offer_timer" id="flash_sale_timer"></div>
                            </div>
                        </div>
                    </h3>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="flash_sale_slider owl-carousel">
                    <?php $__currentLoopData = $flas_sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="product_item wist_item">
                            <div class="product_item_inner">
                                <?php if($value->old_price): ?>
                                <div class="sale-badge">
                                    <div class="sale-badge-inner">
                                        <div class="sale-badge-box">
                                            <span class="sale-badge-text">
                                                <p><?php $discount=(((($value->old_price)-($value->new_price))*100) / ($value->old_price)) ?> <?php echo e(number_format($discount, 0)); ?>%</p>
                                                ছাড়
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <div class="pro_img">
                                    <a href="<?php echo e(route('product', $value->slug)); ?>">
                                        <img src="<?php echo e(asset($value->image ? $value->image->image : '')); ?>"
                                            alt="<?php echo e($value->name); ?>" />
                                    </a>
                                    <?php if($value->stock < 1): ?>
                                    <div class="stock-out-overlay">STOCK OUT</div>
                                    <?php endif; ?>
                                </div>
                                <div class="pro_des">
                                    <div class="pro_name">
                                        <a href="<?php echo e(route('product', $value->slug)); ?>"><?php echo e(Str::limit($value->name, 80)); ?></a>
                                    </div>
                                    
                                    <span style="background-color:#FFBCA5" class="px-3 py-1 rounded-pill">Sold <?php echo e($value->sold??0); ?></span>
                                  
                                    <div class="pro_price">
                                        <p>
                                            <?php if($value->old_price): ?>
                                             <del>৳ <?php echo e($value->old_price); ?></del>
                                            <?php endif; ?>

                                            ৳ <?php echo e($value->new_price); ?> 
                                           
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <?php if(!$value->prosizes->isEmpty() || !$value->procolors->isEmpty() || ($value->stock < 1)): ?>
                                <div class="pro_btn">
                                   
                                    <div class="cart_btn order_button">
                                        <a href="<?php echo e(route('product', $value->slug)); ?>"
                                            class="addcartbutton">অর্ডার করুন</a>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="pro_btn">
                                    
                                    <form action="<?php echo e(route('cart.store')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="id" value="<?php echo e($value->id); ?>" />
                                        <input type="hidden" name="qty" value="1" />
                                        <button type="submit">অর্ডার করুন</button>
                                    </form>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="col-sm-12">
               <a href="<?php echo e(route('flashsales')); ?>" class="view_more_btn" style="float:left">View More</a> 
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!--//hot deals-->
<?php if($isHotDealActive): ?>
<section class="homeproduct">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="sec_title">
                    <h3 class="section-title-header">
                        <div class="timer_inner">
                            <div class="">
                                <span class="section-title-name">Hot Deal </span>
                            </div>

                            <div class="">
                                <div class="offer_timer" id="simple_timer"></div>
                            </div>
                        </div>
                    </h3>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="product_slider owl-carousel">
                    <?php $__currentLoopData = $hotdeal_top; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="product_item wist_item">
                            <div class="product_item_inner">
                                <?php if($value->old_price): ?>
                                <div class="sale-badge">
                                    <div class="sale-badge-inner">
                                        <div class="sale-badge-box">
                                            <span class="sale-badge-text">
                                                <p><?php $discount=(((($value->old_price)-($value->new_price))*100) / ($value->old_price)) ?> <?php echo e(number_format($discount, 0)); ?>%</p>
                                                ছাড়
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <div class="pro_img">
                                    <a href="<?php echo e(route('product', $value->slug)); ?>">
                                        <img src="<?php echo e(asset($value->image ? $value->image->image : '')); ?>"
                                            alt="<?php echo e($value->name); ?>" />
                                    </a>
                                    <?php if($value->stock < 1): ?>
                                    <div class="stock-out-overlay">STOCK OUT</div>
                                    <?php endif; ?>
                                </div>
                                <div class="pro_des">
                                    <div class="pro_name">
                                        <a
                                            href="<?php echo e(route('product', $value->slug)); ?>"><?php echo e(Str::limit($value->name, 80)); ?></a>
                                    </div>
                                    <div class="pro_price">
                                        <p>
                                            <?php if($value->old_price): ?>
                                             <del>৳ <?php echo e($value->old_price); ?></del>
                                            <?php endif; ?>

                                            ৳ <?php echo e($value->new_price); ?> 
                                           
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <?php if(!$value->prosizes->isEmpty() || !$value->procolors->isEmpty() || ($value->stock < 1)): ?>
                                <div class="pro_btn">
                                   
                                    <div class="cart_btn order_button">
                                        <a href="<?php echo e(route('product', $value->slug)); ?>"
                                            class="addcartbutton">অর্ডার করুন</a>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="pro_btn">
                                    
                                    <form action="<?php echo e(route('cart.store')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="id" value="<?php echo e($value->id); ?>" />
                                        <input type="hidden" name="qty" value="1" />
                                        <button type="submit">অর্ডার করুন</button>
                                    </form>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="col-sm-12">
               <a href="<?php echo e(route('hotdeals')); ?>" class="view_more_btn" style="float:left">View More</a> 
            </div>
        </div>
    </div>
</section>
<?php endif; ?>




<?php if($generalsetting->show_all_products): ?>
<section class="homeproduct">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="sec_title">
                    <h3 class="section-title-header">
                        <div class="timer_inner">
                            <div class="">
                                <span class="section-title-name">All Products</span>
                            </div>
                        </div>
                    </h3>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="category-product main_product_inner">
                    <?php $__currentLoopData = $all_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="product_item wist_item">
                        <div class="product_item_inner">
                             <?php if($value->old_price): ?>
                            <div class="sale-badge">
                                <div class="sale-badge-inner">
                                    <div class="sale-badge-box">
                                        <span class="sale-badge-text">
                                           <p> <?php $discount=(((($value->old_price)-($value->new_price))*100) / ($value->old_price)) ?> <?php echo e(number_format($discount,0)); ?>%</p>
                                            ছাড়
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                            <div class="pro_img">
                                <a href="<?php echo e(route('product',$value->slug)); ?>">
                                    <img src="<?php echo e(asset($value->image ? $value->image->image : '')); ?>" alt="<?php echo e($value->name); ?>" />
                                </a>
                                <?php if($value->stock < 1): ?>
                                <div class="stock-out-overlay">STOCK OUT</div>
                                <?php endif; ?>
                            </div>
                            <div class="pro_des">
                                <div class="pro_name">
                                    <a href="<?php echo e(route('product',$value->slug)); ?>"><?php echo e(Str::limit($value->name,80)); ?></a>
                                </div>
                                <div class="pro_price">
                                    <p>
                                        <del>৳ <?php echo e($value->old_price); ?></del>
                                        ৳ <?php echo e($value->new_price); ?> <?php if($value->old_price): ?> <?php endif; ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                         <?php if(! $value->prosizes->isEmpty() || ! $value->procolors->isEmpty() || ($value->stock < 1)): ?>
                        <div class="pro_btn">
                            
                            <div class="cart_btn order_button">
                                <a href="<?php echo e(route('product',$value->slug)); ?>" class="addcartbutton">অর্ডার করুন</a>
                            </div>
                            
                        </div>
                        <?php else: ?>

                        <div class="pro_btn">
                           
                            <form action="<?php echo e(route('cart.store')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="id" value="<?php echo e($value->id); ?>" />
                                <input type="hidden" name="qty" value="1" />
                                <button type="submit">অর্ডার করুন</button>
                            </form>
                        </div>
                        <?php endif; ?>
                        
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <?php if($all_products->lastPage() > 1): ?>
            <div class="col-sm-12 mt-3">
                <div class="d-flex justify-content-center">
                    <a href="<?php echo e(route('shop')); ?>" class="btn btn-success px-4 py-2" style="background: #03a416; border-color: #03a416;">View More</a>
                </div>
            </div>
            <?php endif; ?>

        </div>
    </div>
</section>
<?php endif; ?>

<?php if($sliderbottomads): ?>
<section class="mt-2">
    <div class="row">
        <?php $__currentLoopData = $sliderbottomads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bottomAds): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-12">
            <a href="<?php echo e($bottomAds->link); ?>?sold=show">
                <img style=" width: 100%;" src="<?php echo e($bottomAds->image); ?>"/>
            </a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>
<?php endif; ?>




<?php if($generalsetting->show_category_wise_products): ?>
    <?php $__currentLoopData = $homeproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $homecat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <section class="homeproduct">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="sec_title">
                            <h3 class="section-title-header">
                                <span class="section-title-name"><?php echo e($homecat->name); ?></span>
                                
                            </h3>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="product_sliders">
                            <?php $__currentLoopData = $homecat->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <div class="product_item wist_item">
                                <div class="product_item_inner">
                                    <?php if($value->old_price): ?>
                                    <div class="sale-badge">
                                        <div class="sale-badge-inner">
                                            <div class="sale-badge-box">
                                                <span class="sale-badge-text">
                                                    <p><?php $discount=(((($value->old_price)-($value->new_price))*100) / ($value->old_price)) ?> <?php echo e(number_format($discount, 0)); ?>%</p>
                                                    ছাড়
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <div class="pro_img">
                                        <a href="<?php echo e(route('product', $value->slug)); ?>">
                                            <img src="<?php echo e(asset($value->image ? $value->image->image : '')); ?>"
                                                alt="<?php echo e($value->name); ?>" />
                                        </a>
                                        <?php if($value->stock < 1): ?>
                                        <div class="stock-out-overlay">STOCK OUT</div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="pro_des">
                                        <div class="pro_name">
                                            <a
                                                href="<?php echo e(route('product', $value->slug)); ?>"><?php echo e(Str::limit($value->name, 80)); ?></a>
                                        </div>
                                        <div class="pro_price">
                                            <p>
                                                <?php if($value->old_price): ?>
                                                 <del>৳ <?php echo e($value->old_price); ?></del>
                                                <?php endif; ?>
    
                                                ৳ <?php echo e($value->new_price); ?> 
                                               
                                            </p>
                                        </div>
                                    </div>
                                </div>
    
                                <?php if(!$value->prosizes->isEmpty() || !$value->procolors->isEmpty() || ($value->stock < 1)): ?>
                                    <div class="pro_btn">
                                       
                                        <div class="cart_btn order_button">
                                            <a href="<?php echo e(route('product', $value->slug)); ?>"
                                                class="addcartbutton">অর্ডার করুন</a>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <div class="pro_btn">
                                        
                                        <form action="<?php echo e(route('cart.store')); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="id" value="<?php echo e($value->id); ?>" />
                                            <input type="hidden" name="qty" value="1" />
                                            <button type="submit">অর্ডার করুন</button>
                                        </form>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="show_more_btn">
                            <a href="<?php echo e(route('category', $homecat->slug)); ?>" class="view_more_btn">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php if($campaognads): ?>
<section>
    <div class="row">
        <?php $__currentLoopData = $campaognads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $campaignAds): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-12">
            <a href="<?php echo e($campaignAds->link); ?>?sold=show">
                <img style=" width: 100% !important;" src="<?php echo e($campaignAds->image); ?>"/>
            </a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>
<?php endif; ?>


<?php if($reviews->count()>0): ?>
<section class="homeproduct">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="sec_title">
                    <h5 class="text-center text-light py-2" style="background-color:#03a416">
                        সম্মানীত কাষ্টমারদের পজিটিভ রিভিউ
                    </h5>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="customer-review owl-carousel">
                    <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="border rounded">
                        <img class="w-100" src="<?php echo e(asset($review->image)); ?>" />
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            
        </div>
    </div>
</section>
<?php endif; ?>
<section style="background-color: #fdfbf7; padding: 60px 20px; font-family: 'Hind Siliguri', sans-serif;">

    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        .feature-card {
            position: relative;
            background: #ffffff;
            border-radius: 4px;
            padding: 45px 20px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.04);
            transition: all 0.3s ease;
            cursor: pointer;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* কার্ড হোভার করলে সামান্য উপরে উঠবে */
        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(11, 122, 28, 0.12);
        }

        /* নিচ দিয়ে এনিমেটেড বর্ডার (বাম থেকে ডানে) */
        .feature-card::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 4px;
            background-color: #18910d;
            transition: width 0.4s ease-in-out;
        }

        .feature-card:hover::after {
            width: 100%;
        }

        /* আইকন কন্টেইনার - হালকা সবুজ (ছবির মতো) */
        .icon-container {
            width: 65px;
            height: 65px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
            background-color: #e8f5e9;  /* হালকা সবুজ ব্যাকগ্রাউন্ড - ছবির মতো */
            transition: all 0.3s ease;
        }

        /* আইকনের ডিফল্ট কালার - গাঢ় সবুজ */
        .icon-container img {
            width: 30px;
            height: auto;
            transition: all 0.3s ease;
            filter: brightness(0) invert(28%) sepia(63%) saturate(498%) hue-rotate(105deg) brightness(92%) contrast(90%);
            /* #0f4233 - গাঢ় সবুজ */
            color: #03a416;
        }

        /* হোভার ইফেক্ট - ব্যাকগ্রাউন্ড গাঢ় সবুজ হবে, আইকন সাদা হবে */
        .feature-card:hover .icon-container {
            background-color: #2fa835;  /* গাঢ় সবুজ */
        }

        .feature-card:hover .icon-container img {
            filter: brightness(0) invert(1);  /* সাদা */
            transform: scale(1.05);
        }

        /* Pagination Green Color */
        .pagination .page-link {
            color: #03a416;
            border-color: #03a416;
        }

        .pagination .page-item.active .page-link {
            background-color: #03a416;
            border-color: #03a416;
            color: #fff;
        }

        .pagination .page-link:hover {
            color: #03a416;
            border-color: #03a416;
        }

        /* টেক্সট স্টাইল - ছবির টেক্সট অনুযায়ী */
        h3 {
            font-size: 22px;
            font-weight: 700;
            color: #03a416;
            margin: 0 0 10px 0;
        }

        p {
            font-size: 15px;
            color: #17711d;
            margin: 0;
            line-height: 1.6;
        }

        /* বাংলা টেক্সট সঠিকভাবে দেখানোর জন্য */
        .bangla-text {
            font-family: 'Hind Siliguri', sans-serif;
        }
    </style>

    <div style="text-align: center; margin-bottom: 50px;">
        <div style="display: flex; align-items: center; justify-content: center; gap: 12px; margin-bottom: 5px;">
            <div style="width: 35px; height: 1px; background-color: #1a3c34;"></div>
            <span style="font-size: 16px; color: #1a3c34; font-weight: 500;"> কেন আমরা
</span>
            <div style="width: 35px; height: 1px; background-color: #1a3c34;"></div>
        </div>
        <h2 style="font-size: 36px; font-weight: 700; color: #0f4233; margin: 0;">আমাদের বৈশিষ্ট্য</h2>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 25px; max-width: 1200px; margin: 0 auto;">

        <!-- ১০০% প্রাকৃতিক -->
        <div class="feature-card">
            <div class="icon-container">
                <!-- প্রাকৃতিক পাতা আইকন -->
                <img src="https://cdn-icons-png.flaticon.com/512/2855/2855140.png" alt="natural icon">
            </div>
            <h3>১০০% প্রাকৃতিক</h3>
            <p>কোনো কেমিক্যাল বা কৃত্রিম উপাদান নেই</p>
        </div>

        <!-- সর্বোচ্চ মানের -->
        <div class="feature-card">
            <div class="icon-container">
                <!-- মানের ব্যাজ/সার্টিফিকেট আইকন -->
                <img src="https://cdn-icons-png.flaticon.com/512/10045/10045155.png" alt="quality icon">
            </div>
            <h3>সর্বোচ্চ মানের</h3>
            <p>কঠোর মান নিয়ন্ত্রণ প্রক্রিয়ায় তৈরি</p>
        </div>

        <!-- দ্রুত ডেলিভারি -->
        <div class="feature-card">
            <div class="icon-container">
                <!-- ডেলিভারি ভ্যান আইকন -->
                <img src="https://cdn-icons-png.flaticon.com/512/411/411712.png" alt="delivery icon">
            </div>
            <h3>দ্রুত ডেলিভারি</h3>
            <p>সারা বাংলাদেশে ফ্রি হোম ডেলিভারি</p>
        </div>

        <!-- ক্যাশ অন ডেলিভারি -->
        <div class="feature-card">
            <div class="icon-container">
                <!-- টাকা/পেমেন্ট আইকন -->
                <img src="https://cdn-icons-png.flaticon.com/512/1572/1572635.png" alt="cash on delivery icon">
            </div>
            <h3>ক্যাশ অন ডেলিভারি</h3>
            <p>পণ্য হাতে পেয়ে মূল্য পরিশোধ করুন</p>
        </div>

    </div>
</section>
<section style="width: 100%; padding: 0 0 50px 0; background-color: #fdfbf7;">
    <div style="max-width: 1280px; margin-left: auto; margin-right: auto; padding-left: 2rem; padding-right: 2rem;">
        <div style="background: #ffffff; padding: 2rem; border-radius: 16px; box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.02), 0 0 0 1px rgba(0, 0, 0, 0.02);">
            <p style="color: #17711d; font-size: 1.25rem; line-height: 1.5; margin: 0; text-align: justify; font-family: system-ui, -apple-system, sans-serif;">
                Classy Bazar is a trusted online shop in Bangladesh offering premium spices, organic food, honey, nuts, and healthy products. We ensure quality, purity, and fast delivery across the country.
            </p>
        </div>
    </div>
</section>

<style>
    @media (max-width: 768px) {
        section div[style*="max-width: 1280px"] {
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }
        section div[style*="background: #ffffff"] {
            padding: 1.5rem !important;
        }
        section p[style*="color: #17711d"] {
            font-size: 1rem !important;
            text-align: justify !important;
        }
    }
    @media (max-width: 480px) {
        section div[style*="max-width: 1280px"] {
            padding-left: 0.75rem !important;
            padding-right: 0.75rem !important;
        }
        section div[style*="background: #ffffff"] {
            padding: 1.25rem !important;
        }
        section p[style*="color: #17711d"] {
            font-size: 0.95rem !important;
        }
    }
</style>
<section>
    <div class="row">
        <?php $__currentLoopData = $footertopads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $footerAds): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-12">
            <a href="<?php echo e($footerAds->link); ?>?sold=show">
                <img class="w-100" src="<?php echo e($footerAds->image); ?>"/>
            </a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>

<?php $__env->stopSection(); ?> <?php $__env->startPush('script'); ?>
<script src="<?php echo e(asset('public/frontEnd/js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/frontEnd/js/jquery.syotimer.min.js')); ?>"></script>

<script>
    $(document).ready(function() {
        $(".main_slider").owlCarousel({
            items: 1,
            loop: true,
            dots: false,
            autoplay: true,
            nav: true,
            autoplayHoverPause: true,
            margin: 0,
            mouseDrag: true,
            smartSpeed: 8000,
            autoplayTimeout: 3000,
            animateOut: "fadeOutRight",
            animateIn: "slideInLeft",

            navText: ["<i class='fa-solid fa-angle-left'></i>",
                "<i class='fa-solid fa-angle-right'></i>"
            ],
        });
    });
</script>
<script>
    $(document).ready(function() {
        $(".hotdeals-slider").owlCarousel({
            margin: 15,
            loop: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 3,
                    nav: true,
                },
                600: {
                    items: 3,
                    nav: false,
                },
                1000: {
                    items: 6,
                    nav: true,
                    loop: false,
                },
            },
        });
    });
</script>
<script>
    $(document).ready(function() {
        $(".category-slider").owlCarousel({
            margin: 15,
            loop: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 5,
                    nav: true,
                },
                600: {
                    items: 3,
                    nav: false,
                },
                1000: {
                    items: 8,
                    nav: true,
                    loop: false,
                },
            },
        });

        $(".product_slider").owlCarousel({
            margin: 15,
            items: 6,
            loop: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 2,
                    nav: false,
                },
                600: {
                    items: 5,
                    nav: false,
                },
                1000: {
                    items: 6,
                    nav: false,
                },
            },
        });
        
        $(".flash_sale_slider").owlCarousel({
            margin: 8,
            items: 6,
            loop: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 3,
                    nav: false,
                },
                600: {
                    items: 6,
                    nav: false,
                },
                1000: {
                    items: 7,
                    nav: false,
                },
            },
        });
        
        $(".category-sliger").owlCarousel({
            margin: 8,
            items: 6,
            loop: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 3,
                    nav: false,
                },
                600: {
                    items: 6,
                    nav: false,
                },
                1000: {
                    items: 7,
                    nav: false,
                },
            },
        });
        $(".customer-review").owlCarousel({
            margin: 8,
            items: 6,
            loop: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 2,
                    nav: false,
                },
                600: {
                    items: 3,
                    nav: false,
                },
                1000: {
                    items: 5,
                    nav: false,
                },
            },
        });
    });
</script>

<script>
    $("#simple_timer").syotimer({
        date: new Date("<?php echo e($generalsetting->hot_deal_end_date); ?>T23:59:59"), // November is month 10 (0-indexed)
        layout: "hms", // Hours, minutes, seconds
        doubleNumbers: false, // No leading zeros
        effectType: "opacity", // Opacity effect when changing numbers
        periodUnit: "d", // Period unit set to days
        periodic: false // Countdown only, no reset
    });
   $("#flash_sale_timer").syotimer({
        date: new Date("<?php echo e($generalsetting->flash_sale_end_date); ?>T23:59:59"), // Use the date from your Laravel model
        layout: "hms", // Hours, minutes, seconds
        doubleNumbers: false, // No leading zeros
        effectType: "opacity", // Opacity effect when changing numbers
        periodUnit: "d", // Period unit set to days
        periodic: false, // Countdown only, no reset
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontEnd.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Classybazar\resources\views/frontEnd/layouts/pages/index.blade.php ENDPATH**/ ?>