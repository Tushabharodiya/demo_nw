<div class="container">
	<div class="bg0 flex-wr-sb-c p-tb-8">
		<div class="f2-s-1 p-r-30 size-w-0 m-tb-6 flex-wr-s-c">
			<span class="text-uppercase cl2 p-r-8">
				Trending Now:
			</span>

			<span class="dis-inline-block cl6 slide100-txt pos-relative size-w-0" data-in="fadeInDown" data-out="fadeOutDown">
			    <?php if(!empty($trendingTitleBlog)){ ?>
                    <?php foreach($trendingTitleBlog as $data){ ?>
        				<span class="dis-inline-block slide100-txt-item animated visible-false">
        					<?php 
                                $blogTitle = strip_tags($data['blog_title']); 
                                if(strlen($blogTitle) > 100){
                                    echo substr($blogTitle, 0, 100);
                                } else {
                                    echo $blogTitle;
                                }
                            ?>
        				</span>
        			<?php } ?>
        		<?php } ?>
			</span>
		</div>
	</div>
</div>
		
<section class="bg0">
	<div class="container">
		<div class="row m-rl--1">
		    <?php if(!empty($trendingBlog)){ ?>
                <?php foreach($trendingBlog as $key => $data){ ?>
                    <?php if($key == 0){ ?>
            			<div class="col-md-6 p-rl-1 p-b-2">
            				<div class="bg-img1 size-a-3 how1 pos-relative" style="background-image: url(<?php echo IMAGE_PATH . $data['blog_image']; ?>);" width="524" height="440">
            					<a href="<?php echo base_url(); ?><?php echo $data['blog_slug']; ?>" class="dis-block how1-child1 trans-03" id="clb"></a>
            
            					<div class="flex-col-e-s s-full p-rl-25 p-tb-20">
            						<h3 class="how1-child2 m-t-14 m-b-10">
            							<a href="<?php echo base_url(); ?><?php echo $data['blog_slug']; ?>" class="how-txt1 size-a-6 f1-l-1 cl0 hov-cl10 trans-03" id="clb">
            								<?php 
                                                $blogTitle = strip_tags($data['blog_title']); 
                                                if(strlen($blogTitle) > 53){
                                                    echo substr($blogTitle, 0, 53);
                                                } else {
                                                    echo $blogTitle;
                                                }
                                            ?>
            							</a>
            						</h3>
            
            						<span class="how1-child2">
            							<span class="f1-s-4 cl11">
            								<?php echo $data['blog_created_by']; ?>
            							</span>
            
            							<span class="f1-s-3 cl11 m-rl-3">
            								-
            							</span>
            
            							<span class="f1-s-3 cl11">
            								<?php
        									    $date = $data['blog_date'];
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
        	<?php } ?>

			<div class="col-md-6 p-rl-1">
				<div class="row m-rl--1">
				    <?php if(!empty($trendingBlog)){ ?>
                        <?php foreach($trendingBlog as $key => $data){ ?>
                            <?php if($key == 1){ ?>
            					<div class="col-12 p-rl-1 p-b-2">
            						<div class="bg-img1 size-a-4 how1 pos-relative" style="background-image: url(<?php echo IMAGE_PATH . $data['blog_image']; ?>);" width="524" height="244">
            							<a href="<?php echo base_url(); ?><?php echo $data['blog_slug']; ?>" class="dis-block how1-child1 trans-03" id="clb"></a>
            
            							<div class="flex-col-e-s s-full p-rl-25 p-tb-24">
            								<h3 class="how1-child2 m-t-14">
            									<a href="<?php echo base_url(); ?><?php echo $data['blog_slug']; ?>" class="how-txt1 size-a-7 f1-l-2 cl0 hov-cl10 trans-03" id="clb">
            										<?php 
                                                        $blogTitle = strip_tags($data['blog_title']); 
                                                        if(strlen($blogTitle) > 57){
                                                            echo substr($blogTitle, 0, 57);
                                                        } else {
                                                            echo $blogTitle;
                                                        }
                                                    ?>
            									</a>
            								</h3>
            							</div>
            						</div>
            					</div>
            				<?php } ?>
            			<?php } ?>
            		<?php } ?>
                    
                    <?php if(!empty($trendingBlog)){ ?>
                        <?php foreach($trendingBlog as $key => $data){ ?>
                            <?php if($key == 2){ ?>
            					<div class="col-sm-6 p-rl-1 p-b-2">
            						<div class="bg-img1 size-a-5 how1 pos-relative" style="background-image: url(<?php echo THUMBNAIL_PATH . $data['blog_thumbnail']; ?>);" width="261" height="194">
            							<a href="<?php echo base_url(); ?><?php echo $data['blog_slug']; ?>" class="dis-block how1-child1 trans-03" id="clb"></a>
            
            							<div class="flex-col-e-s s-full p-rl-25 p-tb-20">
            								<h3 class="how1-child2 m-t-14">
            									<a href="<?php echo base_url(); ?><?php echo $data['blog_slug']; ?>" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03" id="clb">
            										<?php 
                                                        $blogTitle = strip_tags($data['blog_title']); 
                                                        if(strlen($blogTitle) > 50){
                                                            echo substr($blogTitle, 0, 50);
                                                        } else {
                                                            echo $blogTitle;
                                                        }
                                                    ?>
            									</a>
            								</h3>
            							</div>
            						</div>
            					</div>
            				<?php } ?>
            			<?php } ?>
            		<?php } ?>
                    
                    <?php if(!empty($trendingBlog)){ ?>
                        <?php foreach($trendingBlog as $key => $data){ ?>
                            <?php if($key == 3){ ?>
            					<div class="col-sm-6 p-rl-1 p-b-2">
            						<div class="bg-img1 size-a-5 how1 pos-relative" style="background-image: url(<?php echo THUMBNAIL_PATH . $data['blog_thumbnail']; ?>);" width="261" height="194">
            							<a href="<?php echo base_url(); ?><?php echo $data['blog_slug']; ?>" class="dis-block how1-child1 trans-03" id="clb"></a>
            
            							<div class="flex-col-e-s s-full p-rl-25 p-tb-20">
            								<h3 class="how1-child2 m-t-14">
            									<a href="<?php echo base_url(); ?><?php echo $data['blog_slug']; ?>" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03" id="clb">
            										<?php 
                                                        $blogTitle = strip_tags($data['blog_title']); 
                                                        if(strlen($blogTitle) > 54){
                                                            echo substr($blogTitle, 0, 54);
                                                        } else {
                                                            echo $blogTitle;
                                                        }
                                                    ?>
            									</a>
            								</h3>
            							</div>
            						</div>
            					</div>
            				<?php } ?>
            			<?php } ?>
            		<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="bg0 p-t-70">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 col-lg-8">
				<div class="p-b-20">
				    <?php if(!empty($viewMainCategory)){ ?>
                        <?php foreach($viewMainCategory as $mainCategorykey => $mainCategory){ ?>
                            <?php if($mainCategorykey == 0){ ?>
            					<div class="tab01 p-b-20">
            						<div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
            							<h3 class="f1-m-2 cl12 tab01-title">
            								<?php echo $mainCategory['main_category_name']; ?>
            							</h3>
            
            							<ul class="nav nav-tabs" role="tablist">
            							    <?php if(!empty($mainCategory['viewSubCategory'])){ ?>
            							        <?php foreach($mainCategory['viewSubCategory'] as $subCategorykey => $subCategory){ ?>
                    							    <li class="nav-item">
                    									<a class="nav-link <?php echo $subCategorykey == 0 ? 'active' : ''; ?>" data-toggle="tab" href="#sub-category-<?php echo $subCategory['sub_category_id'];?>" role="tab" id="clc"><?php echo $subCategory['sub_category_name']; ?></a>
                    								</li>
                    							<?php } ?>
                    						<?php } ?>
            							</ul>
            
            							<a href="<?php echo base_url(); ?>main/<?php echo $mainCategory['main_category_slug']; ?>" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03" id="clac">
            								View all
            								<i class="fs-12 m-l-5 fa fa-caret-right"></i>
            							</a>
            						</div>
            							
            
            						<div class="tab-content p-t-35">
            						    <?php foreach($mainCategory['viewSubCategory'] as $subCategorykey => $subCategory){ ?>
                							<div class="tab-pane fade <?php echo $subCategorykey == 0 ? 'show active' : ''; ?>" id="sub-category-<?php echo $subCategory['sub_category_id'];?>" role="tabpanel">
                								<div class="row">
                        							<div class="col-sm-6 p-r-25 p-r-15-sr991">
                                                        <?php foreach($subCategory['viewBlog'] as $blogkey => $blog){ ?>
                                                            <?php if($blogkey == 0){ ?>
                        										<div class="m-b-30">
                        											<a href="<?php echo base_url(); ?><?php echo $blog['blog_slug']; ?>" class="wrap-pic-w hov1 trans-03" id="clb">
                        												<img src="<?php echo THUMBNAIL_PATH . $blog['blog_thumbnail']; ?>" alt="IMG" width="320" height="240"> 
                        											</a>
                        
                        											<div class="p-t-20">
                        												<h5 class="p-b-5">
                        													<a href="<?php echo base_url(); ?><?php echo $blog['blog_slug']; ?>" class="f1-m-3 cl2 hov-cl10 trans-03" id="clb">
                        														<?php 
                                                                                    $blogTitle = strip_tags($blog['blog_title']); 
                                                                                    if(strlen($blogTitle) > 30){
                                                                                        echo substr($blogTitle, 0, 30);
                                                                                    } else {
                                                                                        echo $blogTitle;
                                                                                    }
                                                                                ?>
                        													</a>
                        												</h5>
                        
                        												<span class="cl8">
                        													<a class="f1-s-4 cl8 hov-cl10 trans-03">
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
                        									<?php } ?>
                        								<?php } ?>
                        							</div>
                        								
                        							<div class="col-sm-6 p-r-25 p-r-15-sr991">
                                                        <?php foreach($subCategory['viewBlog'] as $blogkey => $blog){ ?>
                                                            <?php if($blogkey == 1 or $blogkey == 2 or $blogkey == 3){ ?>
                        										<div class="flex-wr-sb-s m-b-30">
                        											<a href="<?php echo base_url(); ?><?php echo $blog['blog_slug']; ?>" class="size-w-1 wrap-pic-w hov1 trans-03" id="clb">
                        												<img src="<?php echo THUMBNAIL_PATH . $blog['blog_thumbnail']; ?>" alt="IMG" width="100" height="75">
                        											</a>
                        
                        											<div class="size-w-2">
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
                        								    <?php } ?>
                    								    <?php } ?>
                        							</div>
                								</div>
                							</div>
                						<?php } ?>
            						</div>
            					</div>
            				<?php } ?>
        				<?php } ?>
        			<?php } ?>
                    
                    <?php if(!empty($viewMainCategory)){ ?>
                        <?php foreach($viewMainCategory as $mainCategorykey => $mainCategory){ ?>
                            <?php if($mainCategorykey == 1){ ?>
            					<div class="tab01 p-b-20">
            						<div class="tab01-head how2 how2-cl2 bocl12 flex-s-c m-r-10 m-r-0-sr991">
            							<h3 class="f1-m-2 cl13 tab01-title">
            								<?php echo $mainCategory['main_category_name']; ?>
            							</h3>
            
            							<ul class="nav nav-tabs" role="tablist">
            							    <?php if(!empty($mainCategory['viewSubCategory'])){ ?>
            							        <?php foreach($mainCategory['viewSubCategory'] as $subCategorykey => $subCategory){ ?>
                    								<li class="nav-item">
                    									<a class="nav-link <?php echo $subCategorykey == 0 ? 'active' : ''; ?>" data-toggle="tab" href="#sub-category-<?php echo $subCategory['sub_category_id'];?>" role="tab" id="clc"><?php echo $subCategory['sub_category_name']; ?></a>
                    								</li>
                    							<?php } ?>
                    						<?php } ?>
            							</ul>
            
            							<a href="<?php echo base_url(); ?>main/<?php echo $mainCategory['main_category_slug']; ?>" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03" id="clac">
            								View all
            								<i class="fs-12 m-l-5 fa fa-caret-right"></i>
            							</a>
            						</div>
            							
            
            						<div class="tab-content p-t-35">
            						    <?php foreach($mainCategory['viewSubCategory'] as $subCategorykey => $subCategory){ ?>
                							<div class="tab-pane fade <?php echo $subCategorykey == 0 ? 'show active' : ''; ?>" id="sub-category-<?php echo $subCategory['sub_category_id'];?>" role="tabpanel">
                								<div class="row">
                									<div class="col-sm-6 p-r-25 p-r-15-sr991">
                									    <?php foreach($subCategory['viewBlog'] as $blogkey => $blog){ ?>
                									        <?php if($blogkey == 0){ ?>
                        										<div class="m-b-30">
                        											<a href="<?php echo base_url(); ?><?php echo $blog['blog_slug']; ?>" class="wrap-pic-w hov1 trans-03" id="clb">
                        												<img src="<?php echo THUMBNAIL_PATH . $blog['blog_thumbnail']; ?>" alt="IMG" width="320" height="240">
                        											</a>
                        
                        											<div class="p-t-20">
                        												<h5 class="p-b-5">
                        													<a href="<?php echo base_url(); ?><?php echo $blog['blog_slug']; ?>" class="f1-m-3 cl2 hov-cl10 trans-03" id="clb">
                        														<?php 
                                                                                    $blogTitle = strip_tags($blog['blog_title']); 
                                                                                    if(strlen($blogTitle) > 30){
                                                                                        echo substr($blogTitle, 0, 30);
                                                                                    } else {
                                                                                        echo $blogTitle;
                                                                                    }
                                                                                ?>
                        													</a>
                        												</h5>
                        
                        												<span class="cl8">
                        													<a class="f1-s-4 cl8 hov-cl10 trans-03">
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
                        									<?php } ?>	
                    								    <?php } ?>	
                									</div>
                
                									<div class="col-sm-6 p-r-25 p-r-15-sr991">
                									    <?php foreach($subCategory['viewBlog'] as $blogkey => $blog){ ?>
                                                            <?php if($blogkey == 1 or $blogkey == 2 or $blogkey == 3){ ?>
                        										<div class="flex-wr-sb-s m-b-30">
                        											<a href="<?php echo base_url(); ?><?php echo $blog['blog_slug']; ?>" class="size-w-1 wrap-pic-w hov1 trans-03" id="clb">
                        												<img src="<?php echo THUMBNAIL_PATH . $blog['blog_thumbnail']; ?>" alt="IMG" width="100" height="75">
                        											</a>
                        
                        											<div class="size-w-2">
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
                        									<?php } ?>
                        								<?php } ?>
                									</div>
                								</div>
                							</div>
                						<?php } ?>
            						</div>
            					</div>
        				    <?php } ?>
        				<?php } ?>
        			<?php } ?>
                    
                    <?php if(!empty($viewMainCategory)){ ?>
                        <?php foreach($viewMainCategory as $mainCategorykey => $mainCategory){ ?>
                            <?php if($mainCategorykey == 2){ ?>
            					<div class="tab01 p-b-20">
            						<div class="tab01-head how2 how2-cl3 bocl12 flex-s-c m-r-10 m-r-0-sr991">
            							<h3 class="f1-m-2 cl14 tab01-title">
            								<?php echo $mainCategory['main_category_name']; ?>
            							</h3>
            
            							<ul class="nav nav-tabs" role="tablist">
            							    <?php if(!empty($mainCategory['viewSubCategory'])){ ?>
            							        <?php foreach($mainCategory['viewSubCategory'] as $subCategorykey => $subCategory){ ?>
                    								<li class="nav-item">
                    									<a class="nav-link <?php echo $subCategorykey == 0 ? 'active' : ''; ?>" data-toggle="tab" href="#sub-category-<?php echo $subCategory['sub_category_id'];?>" role="tab" id="clc"><?php echo $subCategory['sub_category_name']; ?></a>
                    								</li>
                    							<?php } ?>
        			                        <?php } ?>
            							</ul>
            
            							<a href="<?php echo base_url(); ?>main/<?php echo $mainCategory['main_category_slug']; ?>" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03" id="clac">
            								View all
            								<i class="fs-12 m-l-5 fa fa-caret-right"></i>
            							</a>
            						</div>
            							
            
            						<div class="tab-content p-t-35">
            						    <?php foreach($mainCategory['viewSubCategory'] as $subCategorykey => $subCategory){ ?>
                							<div class="tab-pane fade <?php echo $subCategorykey == 0 ? 'show active' : ''; ?>" id="sub-category-<?php echo $subCategory['sub_category_id'];?>" role="tabpanel">
                								<div class="row">
                									<div class="col-sm-6 p-r-25 p-r-15-sr991">
                									    <?php foreach($subCategory['viewBlog'] as $blogkey => $blog){ ?>
                                                            <?php if($blogkey == 0){ ?>
                        										<div class="m-b-30">
                        											<a href="<?php echo base_url(); ?><?php echo $blog['blog_slug']; ?>" class="wrap-pic-w hov1 trans-03" id="clb">
                        												<img src="<?php echo THUMBNAIL_PATH . $blog['blog_thumbnail']; ?>" alt="IMG" width="320" height="240">
                        											</a>
                        
                        											<div class="p-t-20">
                        												<h5 class="p-b-5">
                        													<a href="<?php echo base_url(); ?><?php echo $blog['blog_slug']; ?>" class="f1-m-3 cl2 hov-cl10 trans-03" id="clb">
                        														<?php 
                                                                                    $blogTitle = strip_tags($blog['blog_title']); 
                                                                                    if(strlen($blogTitle) > 30){
                                                                                        echo substr($blogTitle, 0, 30);
                                                                                    } else {
                                                                                        echo $blogTitle;
                                                                                    }
                                                                                ?>
                        													</a>
                        												</h5>
                        
                        												<span class="cl8">
                        													<a class="f1-s-4 cl8 hov-cl10 trans-03">
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
                        									<?php } ?>
                        								<?php } ?>
                									</div>
                
                									<div class="col-sm-6 p-r-25 p-r-15-sr991">
                									    <?php foreach($subCategory['viewBlog'] as $blogkey => $blog){ ?>
                                                            <?php if($blogkey == 1 or $blogkey == 2 or $blogkey == 3){ ?>
                        										<div class="flex-wr-sb-s m-b-30">
                        											<a href="<?php echo base_url(); ?><?php echo $blog['blog_slug']; ?>" class="size-w-1 wrap-pic-w hov1 trans-03" id="clb">
                        												<img src="<?php echo THUMBNAIL_PATH . $blog['blog_thumbnail']; ?>" alt="IMG" width="100" height="75">
                        											</a>
                        
                        											<div class="size-w-2">
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
                        									<?php } ?>
                    								    <?php } ?>
                									</div>
                								</div>
                							</div>
                						<?php } ?>
            						</div>
            					</div>
            				<?php } ?>
        				<?php } ?>
        			<?php } ?>
				</div>
			</div>

			<div class="col-md-10 col-lg-4">
				<div class="p-l-10 p-rl-0-sr991 p-b-20">
					<div>
						<div class="how2 how2-cl4 flex-s-c">
							<h3 class="f1-m-2 cl3 tab01-title">
								Most Popular
							</h3>
						</div>

						<ul class="p-t-35">
						    <?php if(!empty($popularBlog)){ ?>
                                <?php $counter = 1; foreach($popularBlog as $data){ ?>
        							<li class="flex-wr-sb-s p-b-22">
        								<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
        									<?php echo $counter; ?>
        								</div>
        
        								<a href="<?php echo base_url(); ?><?php echo $data['blog_slug']; ?>" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03" id="clb">
        									<?php 
                                                $blogTitle = strip_tags($data['blog_title']); 
                                                if(strlen($blogTitle) > 60){
                                                    echo substr($blogTitle, 0, 60);
                                                } else {
                                                    echo $blogTitle;
                                                }
                                            ?>
        								</a>
        							</li>
        						<?php $counter++; } ?>
        					<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="bg0 p-t-35 p-b-35">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 col-lg-12 p-b-20">
				<div class="how2 how2-cl4 flex-s-c m-r-10 m-r-0-sr991">
					<h3 class="f1-m-2 cl3 tab01-title">
						Latest Articles
					</h3>
				</div>

				<div class="row p-t-35">
				    <?php if(!empty($latestBlog)){ ?>
                        <?php foreach($latestBlog as $data){ ?>
        					<div class="col-sm-4 p-r-25 p-r-15-sr991">
        						<div class="m-b-45">
        							<a href="<?php echo base_url(); ?><?php echo $data['blog_slug']; ?>" class="wrap-pic-w hov1 trans-03" id="clb">
        								<img src="<?php echo THUMBNAIL_PATH . $data['blog_thumbnail']; ?>" alt="IMG" width="320" height="180">
        							</a>
        
        							<div class="p-t-16">
        								<h5 class="p-b-5">
        									<a href="<?php echo base_url(); ?><?php echo $data['blog_slug']; ?>" class="f1-m-3 cl2 hov-cl10 trans-03" id="clb">
        										<?php 
                                                    $blogTitle = strip_tags($data['blog_title']); 
                                                    if(strlen($blogTitle) > 50){
                                                        echo substr($blogTitle, 0, 50);
                                                    } else {
                                                        echo $blogTitle;
                                                    }
                                                ?>
        									</a>
        								</h5>
        
        								<span class="cl8">
        									<a class="f1-s-4 cl8 hov-cl10 trans-03">
        										by <?php echo $data['blog_created_by']; ?>
        									</a>
        
        									<span class="f1-s-3 m-rl-3">
        										-
        									</span>
        
        									<span class="f1-s-3">
        										<?php
    											    $date = $data['blog_date'];
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
		</div>
	</div>
</section>