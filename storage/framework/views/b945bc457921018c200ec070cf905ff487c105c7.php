<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
         
		<title><?php echo $__env->yieldContent('title'); ?> - <?php echo e($generalsetting->name); ?></title>
		
        <!-- App favicon -->

        <link rel="shortcut icon" href="<?php echo e(asset($generalsetting->favicon)); ?>" alt="<?php echo e($generalsetting->name); ?> Favicon" />
        <meta name="author" content="Creative Design" />
        <link rel="canonical" href="https://creativedesign.com.bd" />
        <?php echo $__env->yieldPushContent('seo'); ?> 
        <?php echo $__env->yieldPushContent('css'); ?>
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/bootstrap.min.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/animate.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/all.min.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/owl.carousel.min.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/owl.theme.default.min.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/mobile-menu.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/select2.min.css')); ?>" />
        <!-- toastr css -->
        <link rel="stylesheet" href="<?php echo e(asset('public/backEnd/')); ?>/assets/css/toastr.min.css" />

        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/wsit-menu.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/style.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/responsive.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/main.css')); ?>" />

        <meta name="facebook-domain-verification" content="<?php echo e($generalsetting->facebook_verification); ?>" />
        <meta name="google-site-verification" content="<?php echo e($generalsetting->google_verification); ?>" />
		
		
		
		

        <?php $__currentLoopData = $pixels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pixel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- Facebook Pixel Code -->
        <script>
            !(function (f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function () {
                    n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments);
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = "2.0";
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s);
            })(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
            fbq("init", "<?php echo e($pixel->code); ?>");
            fbq("track", "PageView");
        </script>
        <noscript>
            <img height="1" width="1" style="display: none;" src="https://www.facebook.com/tr?id=<?php echo e($pixel->code); ?>&ev=PageView&noscript=1" />
        </noscript>
        <!-- End Facebook Pixel Code -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        <?php $__currentLoopData = $gtm_code; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gtm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- Google tag (gtag.js) -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-<?php echo e($gtm->code); ?>');</script>
        <!-- End Google Tag Manager -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <style>
            .whatsapp-float {
                position: fixed;
                bottom: 20px; /* Adjust vertical position */
                left: 20px; /* Adjust horizontal position */
                z-index: 1000;
                background-color: #25D366;
                color: white;
                border-radius: 50%;
                padding: 15px;
                font-size: 24px; /* Icon size */
                box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
                display: flex;
                align-items: center;
                justify-content: center;
            }
        
            .whatsapp-float:hover {
                color: white;
                box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
            }
            /* Hide the .whatsapp-float element on mobile devices */
            @media (max-width: 768px) {
                .whatsapp-float {
                    display: none;
                }
                /* Hide any raw header code output (e.g., plain URL) that may show up on mobile */
                .header-code-wrapper {
                    display: none !important;
                }
            }
            .stock-out-overlay {
                position: absolute;
                top: 50%;
                left: 0;
                transform: translateY(-50%);
                width: 100%;
                background-color: white;
                color: black;
                font-size: 1em;
                opacity:0.8;
                font-weight: bold;
                text-align: center;
                padding: 10px 0;
                overflow: hidden;
                white-space: nowrap;
            }
            /* Facebook icon */
            .social_list .fa-facebook-f {
                padding:5px 8px;
                color:white;
                background-color: #3b5998; 
                
            }
            
            .social_list .fa-facebook-f:hover {
                background-color: #2d4373;  /* Darker Facebook blue on hover */
            }
            
            /* Twitter icon */
            .social_list .fa-twitter {
                padding:5px 8px;
                color:white;
                background-color: rgb(238,128,33);  /* Twitter blue */
            }
            
            .social_list .fa-twitter:hover {
                padding:5px 8px;
                color:white;
                background-color: rgb(238,128,33);  /* Darker Twitter blue on hover */
            }
            
            /* Instagram icon */
            .social_list .fa-instagram {
                padding:5px 8px;
                color:white;
                background-color: #e4405f;  /* Instagram pink */
            }
            
            .social_list .fa-instagram:hover {
                padding:5px 8px;
                color:white;
                background-color: #bc2a8d;  /* Darker Instagram purple-pink on hover */
            }
            
            /* LinkedIn icon */
            .social_list .fa-linkedin {
                padding:5px 8px;
                color:white;
                background-color: rgb(238,128,33);  /* LinkedIn blue */
            }
            
            .social_list .fa-linkedin:hover {
                background-color: rgb(238,128,33);  /* Darker LinkedIn blue on hover */
            }
            
            /* WhatsApp icon */
            .social_list .fa-whatsapp {
                padding:5px 8px;
                color:white;
                background-color: #25d366;  /* WhatsApp green */
            }
            
            .social_list .fa-whatsapp:hover {
                background-color: #128c7e;  /* Darker WhatsApp green on hover */
            }
            
            /* YouTube icon */
            .social_list .fa-youtube {
                padding:5px 8px;
                color:white;
                background-color: #ff0000;  /* YouTube red */
            }
            
            .social_list .fa-youtube:hover {
                background-color: #cc0000;  /* Darker YouTube red on hover */
            }

            /* Footer with light gradient */
            footer {
                background: linear-gradient(135deg, #0f5b18 0%, #1c8929 100%) !important;
            }

            .footer-top {
                background: transparent !important;
            }

            .footer-bottom {
                background: transparent !important;
            }

            /* Footer text colors */
            .footer-about p,
            .footer-menu ul li a,
            .copyright p,
            .copyright p a,
            .footer-hotlint,
            .stay_conn a {
                color: #ffffff !important;
            }

            .footer-menu ul li.title a {
                color: #ffffff !important;
                font-weight: 600;
            }

            /* Remove any filter from logo */
            .footer-about img {
                filter: none !important;
            }

            .footer-menu ul li a:hover {
                color: #f0f0f0 !important;
                text-decoration: underline;
            }

            /* Social icons in footer */
            .social_link .social_list a {
                background-color: rgba(255, 255, 255, 0.2) !important;
                border-radius: 50%;
                display: inline-block;
                transition: all 0.3s ease;
            }

            .social_link .social_list a:hover {
                background-color: rgba(255, 255, 255, 0.3) !important;
                transform: translateY(-3px);
            }

            .social_link .social_list a i {
                color: #ffffff !important;
                font-size: 18px;
                width: 36px;
                height: 36px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            /* Override any existing icon colors */
            .social_list .fa-facebook-f,
            .social_list .fa-twitter,
            .social_list .fa-instagram,
            .social_list .fa-linkedin,
            .social_list .fa-whatsapp,
            .social_list .fa-youtube {
                background-color: transparent !important;
            }
        </style>
        <div class="header-code-wrapper">
            <?php echo $generalsetting->header_code; ?>

        </div>
    </head>
    <body class="gotop">
       
        <?php $subtotal = Cart::instance('shopping')->subtotal(); ?>
        <div class="mobile-menu">
                <div class="mobile-menu-logo">
                    <div class="logo-image">
                        <img src="<?php echo e(asset($generalsetting->white_logo)); ?>" alt="" />
                    </div>
                    <div class="mobile-menu-close">
                        <i class="fa fa-times"></i>
                    </div>
                </div>
                <ul class="first-nav">
                    <?php $__currentLoopData = $menucategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="parent-category">
                        <a href="<?php echo e(url('category/'.$scategory->slug)); ?>" class="menu-category-name">
                            <img src="<?php echo e(asset($scategory->image)); ?>" alt="" class="side_cat_img" />
                            <?php echo e($scategory->name); ?>

                        </a>
                        <?php if($scategory->subcategories->count() > 0): ?>
                        <span class="menu-category-toggle">
                            <i class="fa fa-chevron-down"></i>
                        </span>
                        <?php endif; ?>
                        <ul class="second-nav" style="display: none;">
                            <?php $__currentLoopData = $scategory->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="parent-subcategory">
                                <a href="<?php echo e(url('subcategory/'.$subcategory->slug)); ?>" class="menu-subcategory-name"><?php echo e($subcategory->subcategoryName); ?></a>
                                <?php if($subcategory->childcategories->count() > 0): ?>
                                <span class="menu-subcategory-toggle"><i class="fa fa-chevron-down"></i></span>
                                <?php endif; ?>
                                <ul class="third-nav" style="display: none;">
                                    <?php $__currentLoopData = $subcategory->childcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="childcategory"><a href="<?php echo e(url('products/'.$childcat->slug)); ?>" class="menu-childcategory-name"><?php echo e($childcat->childcategoryName); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <header id="navbar_top">
            
            
            <div class="mobile-header sticky">
                <div class="mobile-logo">
                    <div class="menu-bar">
                        <a class="toggle">
                            <i class="fa-solid fa-bars"></i>
                        </a>
                    </div>
                    <div class="menu-logo">
                        <a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset($generalsetting->white_logo)); ?>" alt="" /></a>
                    </div>
                    <div class="menu-bag">
                        <a href="<?php echo e(route('customer.checkout')); ?>">
                            <p class="margin-shopping">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <span class="mobilecart-qty"><?php echo e(Cart::instance('shopping')->count()); ?></span>
                            </p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="mobile-search">
                <form action="<?php echo e(route('search')); ?>">
                    <input type="text" placeholder="Search Product ... " value="" class="msearch_keyword msearch_click" name="keyword" />
                    <button><i data-feather="search"></i></button>
                </form>
                <div class="search_result"></div>
            </div>

            

            <div class="main-header">
                
            

                <div class="logo-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="logo-header">
                                    <div class="main-logo">
                                        <a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset($generalsetting->white_logo)); ?>" alt="" /></a>
                                    </div>
                                    <div class="main-search">
                                        <form action="<?php echo e(route('search')); ?>">
                                            <input type="text" placeholder="Search Product..." class="search_keyword search_click" name="keyword" />
                                            <button>
                                                <i data-feather="search"></i>
                                            </button>
                                        </form>
                                        <div class="search_result"></div>
                                    </div>
                                    <div class="header-list-items">
                                        <ul>
                                            <li class="track_btn">
                                                <a href="<?php echo e(route('customer.order_track')); ?>"> <i class="fa fa-truck"></i>Track Order</a>
                                            </li>
                                            <?php if(Auth::guard('customer')->user()): ?>
                                            <li class="for_order">
                                                <p>
                                                    <a href="<?php echo e(route('customer.account')); ?>">
                                                        <i class="fa-regular fa-user"></i>

                                                        <?php echo e(Str::limit(Auth::guard('customer')->user()->name,14)); ?>

                                                    </a>
                                                </p>
                                            </li>
                                            <?php else: ?>
                                            <li class="for_order">
                                                <p>
                                                    <a href="<?php echo e(route('customer.login')); ?>">
                                                        <i class="fa-regular fa-user"></i>
                                                        Login / Sign Up
                                                    </a>
                                                </p>
                                            </li>
                                            <?php endif; ?>

                                            <li class="cart-dialog" id="cart-qty">
                                                <a href="<?php echo e(route('customer.checkout')); ?>">
                                                    <p class="margin-shopping">
                                                        <i class="fa-solid fa-cart-shopping"></i>
                                                        <span><?php echo e(Cart::instance('shopping')->count()); ?></span>
                                                    </p>
                                                </a>
                                                <div class="cshort-summary">
                                                    <ul>
                                                        <?php $__currentLoopData = Cart::instance('shopping')->content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li>
                                                            <a href=""><img src="<?php echo e(asset($value->options->image)); ?>" alt="" /></a>
                                                        </li>
                                                        <li><a href=""><?php echo e(Str::limit($value->name, 30)); ?></a></li>
                                                        <li>Qty: <?php echo e($value->qty); ?></li>
                                                        <li>
                                                            <p>৳<?php echo e($value->price); ?></p>
                                                            <button class="remove-cart cart_remove" data-id="<?php echo e($value->rowId); ?>"><i data-feather="x"></i></button>
                                                        </li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                    <p><strong>সর্বমোট : ৳<?php echo e($subtotal); ?></strong></p>
                                                    <a href="<?php echo e(route('customer.checkout')); ?>" class="go_cart"> অর্ডার করুন </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="catagory_menu text-center">
                                    <ul>
                                        <?php $__currentLoopData = $menucategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="cat_bar ">
                                            <a href="<?php echo e(url('category/' . $scategory->slug)); ?>"> 
                                                <span class="cat_head"><?php echo e($scategory->name); ?></span>
                                                <?php if($scategory->subcategories->count() > 0): ?>
                                                <i class="fa-solid fa-angle-down cat_down"></i>
                                                <?php endif; ?>
                                            </a>
                                            <?php if($scategory->subcategories->count() > 0): ?>
                                            <ul class="Cat_menu">
                                                <?php $__currentLoopData = $scategory->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="Cat_list cat_list_hover">
                                                    <a href="<?php echo e(url('subcategory/' . $subcat->slug)); ?>">
                                                        <span><?php echo e(Str::limit($subcat->subcategoryName, 25)); ?></span>
                                                        <?php if($subcat->childcategories->count() > 0): ?><i class="fa-solid fa-chevron-right cat_down"></i><?php endif; ?>
                                                    </a>
                                                    <?php if($subcat->childcategories->count() > 0): ?>
                                                    <ul class="child_menu">
                                                        <?php $__currentLoopData = $subcat->childcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li class="child_main">
                                                            <a href="<?php echo e(url('products/'.$childcat->slug)); ?>"><?php echo e($childcat->childcategoryName); ?></a>
                                                            
                                                        </li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                    <?php endif; ?>
                                                </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                            <?php endif; ?>
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main-header end -->
        </header>
        <div id="content">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
            <!-- content end -->
    <footer style="background-color: #0d3b2e; color: #ffffff; padding: 60px 5% 20px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    
    <!-- Grid Section: Responsive Grid -->
    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px; margin-bottom: 40px;">
        
        <!-- About Section with Larger Logo -->
        <div class="footer-section">
            <div style="margin-bottom: 20px;" class="logo-container">
                <!-- Logo - Larger Size & No Shadow -->
                <img src="<?php echo e(asset($generalsetting->white_logo)); ?>" 
                     alt="<?php echo e($generalsetting->name); ?>" 
                     style="width: 130px; height: auto; display: block; max-width: 100%; border-radius: 10px;">
            </div>
            <p style="font-size: 0.95rem; line-height: 1.8; color: #e0e0e0; margin: 0;">
               প্রকৃতির টানে, ভালোবাসার বাঁধনে। শতভাগ প্রাকৃতিক ও হারবাল পণ্য নিয়ে আপনার সুস্বাস্থ্যর পাশে আছি। 
            </p>
        </div>

        <!-- Useful Links -->
        <div class="footer-section">
            <h3 style="font-size: 1.2rem; margin-bottom: 25px; font-weight: 600; letter-spacing: 0.5px; color: #ffffff;">
                Useful Links
            </h3>
            <ul style="list-style: none !important; padding: 0 !important; margin: 0 !important;">
                <li style="margin-bottom: 12px !important; list-style: none !important; display: block !important;">
                    <a href="<?php echo e(route('home')); ?>" style="color: #e0e0e0 !important; text-decoration: none !important; transition: all 0.3s ease; display: inline-block !important; position: relative;">Home</a>
                </li>
                <li style="margin-bottom: 12px !important; list-style: none !important; display: block !important;">
                    <a href="<?php echo e(route('shop')); ?>" style="color: #e0e0e0 !important; text-decoration: none !important; transition: all 0.3s ease; display: inline-block !important; position: relative;">Products</a>
                </li>
                <li style="margin-bottom: 12px !important; list-style: none !important; display: block !important;">
                    <a href="<?php echo e(route('contact')); ?>" style="color: #e0e0e0 !important; text-decoration: none !important; transition: all 0.3s ease; display: inline-block !important; position: relative;">Contact</a>
                </li>
                <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li style="margin-bottom: 12px !important; list-style: none !important; display: block !important;">
                        <a href="<?php echo e(route('page',['slug'=>$page->slug])); ?>" style="color: #e0e0e0 !important; text-decoration: none !important; transition: all 0.3s ease; display: inline-block !important; position: relative;">
                            <?php echo e($page->name); ?>

                        </a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>

        <!-- Quick Links (formerly Link) -->
        <div class="footer-section">
            <h3 style="font-size: 1.2rem; margin-bottom: 25px; font-weight: 600; letter-spacing: 0.5px; color: #ffffff;">
                Quick Links
            </h3>
            <ul style="list-style: none !important; padding: 0 !important; margin: 0 !important;">
                <?php $__currentLoopData = $pagesright; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li style="margin-bottom: 12px !important; list-style: none !important; display: block !important;">
                        <a href="<?php echo e(route('page',['slug'=>$value->slug])); ?>" style="color: #e0e0e0 !important; text-decoration: none !important; transition: all 0.3s ease; display: inline-block !important; position: relative;">
                            <?php echo e($value->name); ?>

                        </a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>

        <!-- Contact Info -->
        <div class="footer-section">
            <h3 style="font-size: 1.2rem; margin-bottom: 25px; font-weight: 600; letter-spacing: 0.5px; color: #ffffff;">
                Contact Info
            </h3>
            <div style="font-size: 0.95rem;" class="contact-info">
                <p style="margin: 0 0 15px 0; display: flex; align-items: center; color: #e0e0e0; gap: 12px;">
                    <i class="fas fa-phone-alt" style="width: 20px; color: #4CAF50; font-size: 1.1rem;"></i> 
                    <span><?php echo e($contact->hotline); ?></span>
                </p>
                <p style="margin: 0 0 15px 0; display: flex; align-items: center; color: #e0e0e0; gap: 12px;">
                    <i class="fas fa-envelope" style="width: 20px; color: #4CAF50; font-size: 1.1rem;"></i> 
                    <span><?php echo e($contact->email ?? 'support@email.com'); ?></span>
                </p>
                <p style="margin: 0; display: flex; align-items: flex-start; color: #e0e0e0; gap: 12px;">
                    <i class="fas fa-map-marker-alt" style="width: 20px; color: #4CAF50; font-size: 1.1rem;"></i> 
                    <span><?php echo e($contact->address); ?></span>
                </p>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div style="border-top: 1px solid gray; margin-top: 20px;">
        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 20px;" class="footer-bottom">
            
            <p style="font-size: 0.9rem; color: #e0e0e0; margin: 0;">
                © <?php echo e(date('Y')); ?> <?php echo e($generalsetting->name); ?>. All rights reserved. Website Designed & Developed by: <a href="https://orvionsoft.com" target="_blank" style="color: white; font-weight: 600;">OrvionSoft</a>
            </p>

            <div style="display: flex; gap: 15px;" class="social-icons">
                <?php $__currentLoopData = $socialicons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e($value->link); ?>" target="_blank" 
                       style="width: 38px; height: 38px; background: #1a4d3f; border-radius: 50%; display: flex; justify-content: center; align-items: center; text-decoration: none; color: #ffffff; transition: all 0.3s ease;"
                       class="social-icon">
                        <i class="<?php echo e($value->icon); ?>" style="font-size: 1rem;"></i>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</footer>

<style>
    /* Reset and Base Styles */
    .footer {
        width: 100%;
        box-sizing: border-box;
    }

    /* Force list items to display properly */
    footer ul {
        list-style: none !important;
        padding: 0 !important;
        margin: 0 !important;
    }
    
    footer li {
        list-style: none !important;
        display: block !important;
        margin-bottom: 12px !important;
    }
    
    footer li a {
        color: #e0e0e0 !important;
        text-decoration: none !important;
        display: inline-block !important;
        position: relative;
        transition: all 0.3s ease;
    }

    /* Link Hover Effects */
    footer li a:hover {
        color: #4CAF50 !important;
        transform: translateX(5px);
    }

    footer li a::after {
        content: '';
        position: absolute;
        width: 0;
        height: 1px;
        bottom: 0;
        left: 0;
        background-color: #4CAF50;
        transition: width 0.3s ease;
    }

    footer li a:hover::after {
        width: 100%;
    }

    /* Social Icons Hover */
    .social-icon:hover {
        background: #4CAF50 !important;
        transform: translateY(-5px) !important;
        box-shadow: 0 5px 15px rgba(76, 175, 80, 0.3);
    }

    /* Responsive Design */
    @media screen and (max-width: 992px) {
        footer {
            padding: 50px 4% 20px !important;
        }
        
        footer > div:first-child {
            grid-template-columns: repeat(2, 1fr) !important;
            gap: 35px !important;
        }
    }

    @media screen and (max-width: 768px) {
        footer {
            padding: 40px 5% 20px !important;
        }
        
        footer > div:first-child {
            grid-template-columns: 1fr !important;
            gap: 30px !important;
        }
        
        /* Center align all sections on mobile */
        .footer-section {
            text-align: center !important;
            width: 100%;
        }
        
        /* Center logo */
        .logo-container {
            display: flex !important;
            justify-content: center !important;
            width: 100%;
        }
        
        footer img {
            margin: 0 auto !important;
        }
        
        /* Center headings */
        .footer-section h3 {
            text-align: center !important;
            width: 100%;
        }
        
        /* Center list items and links */
        .footer-section ul {
            text-align: center !important;
        }
        
        .footer-section li {
            text-align: center !important;
        }
        
        footer li a {
            text-align: center !important;
            display: inline-block !important;
            margin: 0 auto !important;
        }
        
        /* Center contact info */
        .contact-info p {
            justify-content: center !important;
            text-align: center !important;
        }
        
        .contact-info {
            text-align: center !important;
        }
        
        /* Center bottom section */
        .footer-bottom {
            flex-direction: column !important;
            text-align: center !important;
            justify-content: center !important;
        }
        
        .footer-bottom p {
            text-align: center !important;
            width: 100%;
        }
        
        /* Center social icons */
        .social-icons {
            justify-content: center !important;
            width: 100%;
        }
    }

    @media screen and (max-width: 480px) {
        footer {
            padding: 30px 5% 15px !important;
        }
        
        h3 {
            font-size: 1.1rem !important;
            margin-bottom: 20px !important;
        }
        
        p, a {
            font-size: 0.9rem !important;
        }
        
        .social-icons {
            gap: 10px !important;
        }
        
        .social-icon {
            width: 35px !important;
            height: 35px !important;
        }
    }
</style>
        <div class="footer_nav">
            <ul>
                <li>
                    <a class="toggle">
                        <span>
                            <i class="fa-solid fa-bars"></i>
                        </span>
                        <span>Category</span>
                    </a>
                </li>

                <li>
                    <a href="https://wa.me/<?php echo e(str_replace(['+', ' ', '-'], '', $contact->whatsapp)); ?>">
                        <span>
                            <i class="fa-brands fa-whatsapp"></i>
                        </span>
                        <span>Whatsapp</span>
                    </a>
                </li>

                <li class="mobile_home">
                    <a href="<?php echo e(route('home')); ?>">
                        <span><i class="fa-solid fa-home"></i></span> <span>Home</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(route('customer.checkout')); ?>">
                        <span>
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                        <span>Cart (<b class="mobilecart-qty"><?php echo e(Cart::instance('shopping')->count()); ?></b>)</span>
                    </a>
                </li>
                <?php if(Auth::guard('customer')->user()): ?>
                <li>
                    <a href="<?php echo e(route('customer.account')); ?>">
                        <span>
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span>Account</span>
                    </a>
                </li>
                <?php else: ?>
                <li>
                    <a href="<?php echo e(route('customer.login')); ?>">
                        <span>
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span>Login</span>
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
        
        <a href="https://wa.me/<?php echo e(str_replace(['+', ' ', '-'], '', $contact->whatsapp)); ?>?text=Hello, I would like to inquire about..." target="_blank" class="whatsapp-float">
            <i class="fa-brands fa-whatsapp"></i>
        </a>

        <div class="scrolltop" style="">
            <div class="scroll">
                <i class="fa fa-angle-up"></i>
            </div>
        </div>

        <!-- /. fixed sidebar -->

        <div id="custom-modal"></div>
        <div id="page-overlay"></div>
        <div id="loading"><div class="custom-loader"></div></div>

        <script src="<?php echo e(asset('public/frontEnd/js/jquery-3.6.3.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/frontEnd/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/frontEnd/js/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/frontEnd/js/mobile-menu.js')); ?>"></script>
        <script src="<?php echo e(asset('public/frontEnd/js/wsit-menu.js')); ?>"></script>
        <script src="<?php echo e(asset('public/frontEnd/js/mobile-menu-init.js')); ?>"></script>
        <script src="<?php echo e(asset('public/frontEnd/js/wow.min.js')); ?>"></script>
        <script>
            new WOW().init();
        </script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

        <!-- feather icon -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js"></script>
        <script>
            feather.replace();
        </script>
        <script src="<?php echo e(asset('public/backEnd/')); ?>/assets/js/toastr.min.js"></script>
        <?php echo Toastr::message(); ?> <?php echo $__env->yieldPushContent('script'); ?>
        <script>
            $(".quick_view").on("click", function () {
                var id = $(this).data("id");
                $("#loading").show();
                if (id) {
                    $.ajax({
                        type: "GET",
                        data: { id: id },
                        url: "<?php echo e(route('quickview')); ?>",
                        success: function (data) {
                            if (data) {
                                $("#custom-modal").html(data);
                                $("#custom-modal").show();
                                $("#loading").hide();
                                $("#page-overlay").show();
                            }
                        },
                    });
                }
            });
        </script>
        <!-- quick view end -->
        <!-- cart js start -->
        <script>
            $(".addcartbutton").on("click", function () {
                var id = $(this).data("id");
                var qty = 1;
                if (id) {
                    $.ajax({
                        cache: "false",
                        type: "GET",
                        url: "<?php echo e(url('add-to-cart')); ?>/" + id + "/" + qty,
                        dataType: "json",
                        success: function (data) {
                            if (data) {
                                toastr.success('Success', 'Product add to cart successfully');
                                return cart_count() + mobile_cart();
                            }
                        },
                    });
                }
            });
            $(".cart_store").on("click", function () {
                var id = $(this).data("id");
                var qty = $(this).parent().find("input").val();
                if (id) {
                    $.ajax({
                        type: "GET",
                        data: { id: id, qty: qty ? qty : 1 },
                        url: "<?php echo e(route('cart.store')); ?>",
                        success: function (data) {
                            if (data) {
                                toastr.success('Success', 'Product add to cart succfully');
                                return cart_count() + mobile_cart();
                            }
                        },
                    });
                }
            });

            $(".cart_remove").on("click", function () {
                var id = $(this).data("id");
                if (id) {
                    $.ajax({
                        type: "GET",
                        data: { id: id },
                        url: "<?php echo e(route('cart.remove')); ?>",
                        success: function (data) {
                            if (data) {
                                $(".cartlist").html(data);
                                return cart_count() + mobile_cart() + cart_summary();
                            }
                        },
                    });
                }
            });

            $(".cart_increment").on("click", function () {
                var id = $(this).data("id");
                if (id) {
                    $.ajax({
                        type: "GET",
                        data: { id: id },
                        url: "<?php echo e(route('cart.increment')); ?>",
                        success: function (data) {
                            if (data) {
                                $(".cartlist").html(data);
                                return cart_count() + mobile_cart();
                            }
                        },
                    });
                }
            });

            $(".cart_decrement").on("click", function () {
                var id = $(this).data("id");
                if (id) {
                    $.ajax({
                        type: "GET",
                        data: { id: id },
                        url: "<?php echo e(route('cart.decrement')); ?>",
                        success: function (data) {
                            if (data) {
                                $(".cartlist").html(data);
                                return cart_count() + mobile_cart();
                            }
                        },
                    });
                }
            });

            function cart_count() {
                $.ajax({
                    type: "GET",
                    url: "<?php echo e(route('cart.count')); ?>",
                    success: function (data) {
                        if (data) {
                            $("#cart-qty").html(data);
                        } else {
                            $("#cart-qty").empty();
                        }
                    },
                });
            }
            function mobile_cart() {
                $.ajax({
                    type: "GET",
                    url: "<?php echo e(route('mobile.cart.count')); ?>",
                    success: function (data) {
                        if (data) {
                            $(".mobilecart-qty").html(data);
                        } else {
                            $(".mobilecart-qty").empty();
                        }
                    },
                });
            }
            function cart_summary() {
                $.ajax({
                    type: "GET",
                    url: "<?php echo e(route('shipping.charge')); ?>",
                    dataType: "html",
                    success: function (response) {
                        $(".cart-summary").html(response);
                    },
                });
            }
        </script>
        <!-- cart js end -->
        <script>
            $(".search_click").on("keyup change", function () {
                var keyword = $(".search_keyword").val();
                $.ajax({
                    type: "GET",
                    data: { keyword: keyword },
                    url: "<?php echo e(route('livesearch')); ?>",
                    success: function (products) {
                        if (products) {
                            $(".search_result").html(products);
                        } else {
                            $(".search_result").empty();
                        }
                    },
                });
            });
            $(".msearch_click").on("keyup change", function () {
                var keyword = $(".msearch_keyword").val();
                $.ajax({
                    type: "GET",
                    data: { keyword: keyword },
                    url: "<?php echo e(route('livesearch')); ?>",
                    success: function (products) {
                        if (products) {
                            $("#loading").hide();
                            $(".search_result").html(products);
                        } else {
                            $(".search_result").empty();
                        }
                    },
                });
            });
        </script>
        <!-- search js start -->
        <script></script>
        <script></script>
        <script>
            $(".district").on("change", function () {
                var id = $(this).val();
                $.ajax({
                    type: "GET",
                    data: { id: id },
                    url: "<?php echo e(route('districts')); ?>",
                    success: function (res) {
                        if (res) {
                            $(".area").empty();
                            $(".area").append('<option value="">Select..</option>');
                            $.each(res, function (key, value) {
                                $(".area").append('<option value="' + key + '" >' + value + "</option>");
                            });
                        } else {
                            $(".area").empty();
                        }
                    },
                });
            });
        </script>
        <script>
            $(".toggle").on("click", function () {
                $("#page-overlay").show();
                $(".mobile-menu").addClass("active");
            });

            $("#page-overlay").on("click", function () {
                $("#page-overlay").hide();
                $(".mobile-menu").removeClass("active");
                $(".feature-products").removeClass("active");
            });

            $(".mobile-menu-close").on("click", function () {
                $("#page-overlay").hide();
                $(".mobile-menu").removeClass("active");
            });

            $(".mobile-filter-toggle").on("click", function () {
                $("#page-overlay").show();
                $(".feature-products").addClass("active");
            });
        </script>
        <script>
            $(document).ready(function () {
                $(".parent-category").each(function () {
                    const menuCatToggle = $(this).find(".menu-category-toggle");
                    const secondNav = $(this).find(".second-nav");

                    menuCatToggle.on("click", function () {
                        menuCatToggle.toggleClass("active");
                        secondNav.slideToggle("fast");
                        $(this).closest(".parent-category").toggleClass("active");
                    });
                });
                $(".parent-subcategory").each(function () {
                    const menuSubcatToggle = $(this).find(".menu-subcategory-toggle");
                    const thirdNav = $(this).find(".third-nav");

                    menuSubcatToggle.on("click", function () {
                        menuSubcatToggle.toggleClass("active");
                        thirdNav.slideToggle("fast");
                        $(this).closest(".parent-subcategory").toggleClass("active");
                    });
                });
            });
        </script>

        <script>
            var menu = new MmenuLight(document.querySelector("#menu"), "all");

            var navigator = menu.navigation({
                selectedClass: "Selected",
                slidingSubmenus: true,
                // theme: 'dark',
                title: "ক্যাটাগরি",
            });

            var drawer = menu.offcanvas({
                // position: 'left'
            });

            //  Open the menu.
            document.querySelector('a[href="#menu"]').addEventListener("click", (evnt) => {
                evnt.preventDefault();
                drawer.open();
            });
        </script>

        <script>
            // document.addEventListener("DOMContentLoaded", function () {
            //     window.addEventListener("scroll", function () {
            //         if (window.scrollY > 200) {
            //             document.getElementById("navbar_top").classList.add("fixed-top");
            //         } else {
            //             document.getElementById("navbar_top").classList.remove("fixed-top");
            //             document.body.style.paddingTop = "0";
            //         }
            //     });
            // });
            /*=== Main Menu Fixed === */
            // document.addEventListener("DOMContentLoaded", function () {
            //     window.addEventListener("scroll", function () {
            //         if (window.scrollY > 0) {
            //             document.getElementById("m_navbar_top").classList.add("fixed-top");
            //             // add padding top to show content behind navbar
            //             navbar_height = document.querySelector(".navbar").offsetHeight;
            //             document.body.style.paddingTop = navbar_height + "px";
            //         } else {
            //             document.getElementById("m_navbar_top").classList.remove("fixed-top");
            //             // remove padding top from body
            //             document.body.style.paddingTop = "0";
            //         }
            //     });
            // });
            /*=== Main Menu Fixed === */

            $(window).scroll(function () {
                if ($(this).scrollTop() > 50) {
                    $(".scrolltop:hidden").stop(true, true).fadeIn();
                } else {
                    $(".scrolltop").stop(true, true).fadeOut();
                }
            });
            $(function () {
                $(".scroll").click(function () {
                    $("html,body").animate({ scrollTop: $(".gotop").offset().top }, "1000");
                    return false;
                });
            });
        </script>
        <script>
            $(".filter_btn").click(function(){
               $(".filter_sidebar").addClass('active');
               $("body").css("overflow-y", "hidden");
            })
            $(".filter_close").click(function(){
               $(".filter_sidebar").removeClass('active');
               $("body").css("overflow-y", "auto");
            })
        </script>
        <!--search ANIMAtion end-->
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo e($gtm->code); ?>"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    </body>
</html><?php /**PATH C:\laragon\www\orvionshop3\resources\views/frontEnd/layouts/master.blade.php ENDPATH**/ ?>