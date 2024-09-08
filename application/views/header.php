<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <meta name="robots" content="noindex, nofollow" />
    
    <title><?php echo TITLE; ?></title>
    
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>source/images/icons/favicon.png"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>source/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>source/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>source/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>source/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>source/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>source/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>source/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>source/css/util.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>source/css/main.css">
</head>

<body class="animsition">
	<header>
		<div class="container-menu-desktop">
			<div class="topbar">
				<div class="content-topbar container h-100">
					<div class="left-topbar">
						<a href="<?php echo base_url(); ?>about" class="left-topbar-item" id="clp">
							About
						</a>
						
						<a href="<?php echo base_url(); ?>privacy" class="left-topbar-item" id="clp">
							Privacy
						</a>

						<a href="<?php echo base_url(); ?>terms" class="left-topbar-item" id="clp">
							Terms
						</a>
						
						<a href="<?php echo base_url(); ?>contact" class="left-topbar-item" id="clp">
							Contact
						</a>
					</div>
				</div>
			</div>

			<div class="wrap-header-mobile">
				<div class="logo-mobile">
					<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>source/images/icons/logo-01.png" alt="IMG-LOGO"></a>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>

			<div class="menu-mobile">
				<ul class="topbar-mobile">
					<li class="left-topbar">
						<a href="<?php echo base_url(); ?>about" class="left-topbar-item" id="clp">
							About
						</a>

						<a href="<?php echo base_url(); ?>privacy" class="left-topbar-item" id="clp">
							Privacy
						</a>

						<a href="<?php echo base_url(); ?>terms" class="left-topbar-item" id="clp">
							Terms
						</a>
						
						<a href="<?php echo base_url(); ?>contact" class="left-topbar-item" id="clp">
							Contact
						</a>
					</li>
				</ul>

				<ul class="main-menu-m">
					<li>
						<a href="<?php echo base_url(); ?>">Home</a>
					</li>
                    <?php if(!empty($headerMainCategory)){ ?>
                        <?php foreach($headerMainCategory as $data){ ?>
        					<li>
        						<a href="<?php echo base_url(); ?>main/<?php echo $data['main_category_slug']; ?>"><?php echo $data['main_category_name']; ?> </a>
        					</li>
        				<?php } ?>
        			<?php } ?>
				</ul>
			</div>
			
			<div class="wrap-logo container">
				<div class="logo">
					<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>source/images/icons/logo-01.png" alt="LOGO"></a>
				</div>	
			</div>	
			
			<div class="wrap-main-nav">
				<div class="main-nav">
					<nav class="menu-desktop">
						<a class="logo-stick" href="<?php echo base_url(); ?>">
							<img src="<?php echo base_url(); ?>source/images/icons/logo-01.png" alt="LOGO">
						</a>

						<ul class="main-menu">
						    <a class="home-menu" href="<?php echo base_url(); ?>">Home</a>
                            
                            <?php if(!empty($headerMainCategory)){ ?>
                                <?php foreach($headerMainCategory as $mainCategory){ ?>
        							<li class="mega-menu-item">
        								<a href="<?php echo base_url(); ?>main/<?php echo $mainCategory['main_category_slug']; ?>"><?php echo $mainCategory['main_category_name']; ?></a>
                                        
                                        <?php if(!empty($mainCategory['headerSubCategory'])){ ?>
            								<div class="sub-mega-menu">
            									<div class="nav flex-column nav-pills" role="tablist">
                                                    <?php foreach($mainCategory['headerSubCategory'] as $key => $subCategory){ ?>
                                                        <a class="nav-link <?php echo $key == 0 ? 'active' : ''; ?>" data-toggle="pill" href="#sub-<?php echo $subCategory['sub_category_slug'];?>" role="tab"><?php echo $subCategory['sub_category_name']; ?></a>
                                                    <?php } ?>
            									</div>
            
            									<div class="tab-content">
                                                    <?php foreach($mainCategory['headerSubCategory'] as $key => $subCategory){ ?>
                										<div class="tab-pane <?php echo $key == 0 ? 'show active' : ''; ?>" id="sub-<?php echo $subCategory['sub_category_slug'];?>" role="tabpanel">
                											<div class="row">
                											    <?php if(!empty($subCategory['headerBlog'])){ ?>
                                                                    <?php foreach($subCategory['headerBlog'] as $blog){ ?>
                        												<div class="col-3">
                        													<div>
                        														<a href="<?php echo base_url(); ?><?php echo $blog['blog_slug']; ?>" class="wrap-pic-w hov1 trans-03" id="clb">
                        															<img src="<?php echo THUMBNAIL_PATH . $blog['blog_thumbnail']; ?>" alt="IMG" width="160" height="80">
                        														</a>
                        
                        														<div class="p-t-10">
                        															<h5 class="p-b-5">
                        																<a href="<?php echo base_url(); ?><?php echo $blog['blog_slug']; ?>" class="f1-s-5 cl3 hov-cl10 trans-03" id="clb">
                        																	<?php 
                                                                                                $blogTitle = strip_tags($blog['blog_title']); 
                                                                                                if(strlen($blogTitle) > 45){
                                                                                                    echo substr($blogTitle, 0, 45);
                                                                                                } else {
                                                                                                    echo $blogTitle;
                                                                                                }
                                                                                            ?>
                        																</a>
                        															</h5>
                        
                        															<span class="cl8">
                        																<a class="f1-s-6 cl8 hov-cl10 trans-03">
                        																	Published by
                        																</a>
                        
                        																<span class="f1-s-3 m-rl-3">
                        																	-
                        																</span>
                        
                        																<span class="f1-s-3">
                        																	<?php
                                                											    $date = $blog['blog_date'];
                                                											    $dateTime = DateTime::createFromFormat('d/m/Y', $date);
                                                                                                echo $dateTime->format('M j');
                                                											?>
                        																</span>
                        															</span>
                        														</div>
                        													</div>
                        												</div>
                        											<?php } ?>
                        										<?php } ?>
                											</div>
                										</div>
                									<?php } ?>
            									</div>
            								</div>
            							<?php } ?>
        							</li>
        						<?php } ?>
        					<?php } ?>
						</ul>
					</nav>
				</div>
			</div>	
		</div>
	</header>