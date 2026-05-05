 
<?php $__env->startSection('title','Hot Deals'); ?>
<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/jquery-ui.css')); ?>" />
<style>
.pagination .page-link {
    color: #03a416 !important;
    border-color: #03a416 !important;
}
.pagination .page-item.active .page-link {
    background-color: #03a416 !important;
    border-color: #03a416 !important;
    color: #ffffff !important;
}
.pagination .page-link:hover {
    color: #03a416 !important;
    border-color: #03a416 !important;
    background-color: #eaf7ea !important;
}

.sorting-section {
    background: #fff;
    border: 1px solid #e7e7e7;
    border-radius: 10px;
    padding: 18px;
    box-shadow: 0 8px 28px rgba(0,0,0,.06);
    margin-bottom: 16px;
}

.shop-price-filter .price-inputs input {
    border-color: #d8d8d8;
    border-radius: 6px;
}

.shop-price-filter .btn {
    border-radius: 6px;
    font-weight: 600;
}

.shop-price-filter .btn-success {
    background-color: #03a416;
    border-color: #03a416;
}

.shop-price-filter .btn-success:hover {
    background-color: #028f12;
}

.shop-price-filter .form-label {
    padding-left: 8px;
}

.filter_sidebar .sidebar_item {
    margin-bottom: 12px;
}

.filter_sidebar .accordion-button {
    font-weight: 600;
    padding: 12px 16px;
    padding-left: 24px;
    border-radius: 8px;
    border: 1px solid #e7e7e7;
}

.filter_sidebar .accordion-button:not(.collapsed) {
    background-color: #f5f5f5;
    color: #03a416;
}

.filter_sidebar .form-check-input {
    border-color: #d8d8d8;
    cursor: pointer;
}

.filter_sidebar .form-check-input:checked {
    background-color: #03a416;
    border-color: #03a416;
}

.filter_sidebar ul {
    list-style: none;
    padding: 0 0 0 12px;
    margin: 0;
}

.filter_sidebar ul li {
    padding: 8px 0;
}

.filter_sidebar ul li label {
    cursor: pointer;
    font-size: 14px;
    margin: 0;
    color: #3b3b3b;
    padding-left: 8px;
}

.filter_sidebar ul li label:hover {
    color: #03a416;
}

.filter_sidebar .btn-outline-secondary:hover {
    background-color: rgb(238, 128, 33);
    border-color: rgb(238, 128, 33);
    color: #fff;
}

@media (max-width: 768px) {
    .filter_sidebar {
        margin-bottom: 20px;
    }
}
</style>
<?php $__env->stopPush(); ?> 
<?php $__env->startSection('content'); ?>
<section class="product-section">
    <div class="container">
        <div class="sorting-section">
            <div class="row">
                <div class="col-sm-6">
                    <div class="category-breadcrumb d-flex align-items-center">
                        <a href="<?php echo e(route('home')); ?>">Home</a>
                        <span>/</span>
                        <strong>All Products</strong>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="showing-data">
                                <span>Showing <?php echo e($products->firstItem()); ?>-<?php echo e($products->lastItem()); ?> of <?php echo e($products->total()); ?> Results</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="filter_sort">
                                <div class="filter_btn">
                                    <i class="fa fa-list-ul"></i>
                                </div>
                                <div class="page-sort">
                                    <form action="" class="sort-form">
                                        <select name="sort" class="form-control form-select sort">
                                            <option value="1" <?php if(request()->get('sort')==1): ?>selected <?php endif; ?>>Product: Latest</option>
                                            <option value="2" <?php if(request()->get('sort')==2): ?>selected <?php endif; ?>>Product: Oldest</option>
                                            <option value="3" <?php if(request()->get('sort')==3): ?>selected <?php endif; ?>>Price: High To Low</option>
                                            <option value="4" <?php if(request()->get('sort')==4): ?>selected <?php endif; ?>>Price: Low To High</option>
                                            <option value="5" <?php if(request()->get('sort')==5): ?>selected <?php endif; ?>>Name: A-Z</option>
                                            <option value="6" <?php if(request()->get('sort')==6): ?>selected <?php endif; ?>>Name: Z-A</option>
                                        </select>
                                        <input type="hidden" name="category" value="<?php echo e(request()->get('category')); ?>" />
                                        <input type="hidden" name="min_price" value="<?php echo e(request()->get('min_price')); ?>" />
                                        <input type="hidden" name="max_price" value="<?php echo e(request()->get('max_price')); ?>" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3 filter_sidebar">
                <div class="filter_close"><i class="fa fa-long-arrow-left"></i> Filter</div>
                <form action="<?php echo e(route('shop')); ?>" method="GET" class="attribute-submit">
                    <!-- Category Filter -->
                    <div class="sidebar_item wraper__item">
                        <div class="accordion" id="category_sidebar">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseCat" aria-expanded="true" aria-controls="collapseCat">
                                        Categories
                                    </button>
                                </h2>
                                <div id="collapseCat" class="accordion-collapse collapse show"
                                    data-bs-parent="#category_sidebar">
                                    <div class="accordion-body cust_according_body">
                                        <ul style="list-style: none; padding: 0; margin: 0;">
                                            <li style="padding: 6px 0;">
                                                <label style="display: flex; align-items: center; cursor: pointer; font-size: 14px; margin: 0;">
                                                    <input type="radio" name="category" value="" 
                                                        <?php if(!request('category')): ?> checked <?php endif; ?> 
                                                        class="form-check-input" style="margin-right: 8px;" onchange="this.form.submit()" />
                                                    <span>All Categories</span>
                                                </label>
                                            </li>
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li style="padding: 6px 0;">
                                                <label style="display: flex; align-items: center; cursor: pointer; font-size: 14px; margin: 0;">
                                                    <input type="radio" name="category" value="<?php echo e($category->id); ?>"
                                                        <?php if(request('category') == $category->id): ?> checked <?php endif; ?> 
                                                        class="form-check-input" style="margin-right: 8px;" onchange="this.form.submit()" />
                                                    <span><?php echo e($category->name); ?></span>
                                                </label>
                                            </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Price Filter -->
                    <div class="sidebar_item wraper__item">
                        <div class="accordion" id="price_sidebar">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsePrice" aria-expanded="true" aria-controls="collapsePrice">
                                        Price Range
                                    </button>
                                </h2>
                                <div id="collapsePrice" class="accordion-collapse collapse show"
                                    data-bs-parent="#price_sidebar">
                                    <div class="accordion-body cust_according_body">
                                        <div class="shop-price-filter">
                                            <div class="price-inputs mb-3">
                                                <div class="mb-2">
                                                    <label class="form-label small">Min Price (৳)</label>
                                                    <input type="number" name="min_price" class="form-control form-control-sm" 
                                                        min="0" step="1" placeholder="<?php echo e(number_format($min_price,0)); ?>" 
                                                        value="<?php echo e(request('min_price')); ?>" />
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label small">Max Price (৳)</label>
                                                    <input type="number" name="max_price" class="form-control form-control-sm" 
                                                        min="0" step="1" placeholder="<?php echo e(number_format($max_price,0)); ?>" 
                                                        value="<?php echo e(request('max_price')); ?>" />
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-sm btn-success w-100">
                                                <i class="fa fa-filter"></i> Apply
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Clear Filters -->
                    <div class="sidebar_item wraper__item">
                        <a href="<?php echo e(route('shop')); ?>" class="btn btn-outline-secondary w-100 btn-sm">
                            <i class="fa fa-refresh"></i> Reset Filters
                        </a>
                    </div>
                </form>
            </div>

            <div class="col-sm-9">
                <div class="offer_timer" id="simple_timer"></div>
                <div class="category-product main_product_inner">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="custom_paginate">
                    <?php echo e($products->links('pagination::bootstrap-4')); ?>

                </div>
            </div>
        </div>
    </div>
</section>


<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script>
    $(".sort").change(function(){
       $('#loading').show();
       $(".sort-form").submit();
    })
    
    $(".form-attribute").on('change click',function(){
        $(".attribute-submit").submit();
    })
</script>
<script>
    $("#simple_timer").syotimer({
        date: new Date(2015, 0, 1),
        layout: "hms",
        doubleNumbers: false,
        effectType: "opacity",

        periodUnit: "d",
        periodic: true,
        periodInterval: 1,
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('frontEnd.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\orvionshop3\resources\views/frontEnd/layouts/pages/shop.blade.php ENDPATH**/ ?>