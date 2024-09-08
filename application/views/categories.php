<div class="container">
	<div class="bg0 flex-wr-sb-c p-tb-8">
		<div class="f2-s-1 p-r-30 m-tb-6">
			<a href="<?php echo base_url(); ?>" class="breadcrumb-item f1-s-3 cl9">
				Home 
			</a>
            
			<span class="breadcrumb-item f1-s-3 cl9">
				<?php echo $mainCategoryData['main_category_name']; ?>
			</span>
		</div>
        <?php $sessionCategories = $this->session->userdata('session_categories'); ?>
        <form action="" method="post" class="form-validate is-alter" enctype="multipart/form-data">
		    <div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
    			<input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search_categories" value="<?php if(!empty($sessionCategories)){ echo $sessionCategories; } ?>" placeholder="Search" autocomplete="off">
    			<input type="submit" name="submit_search">
                <input type="submit" name="reset_search">
    			<div class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
    				<i class="zmdi zmdi-search"></i>
    			</div>
		    </div>
		</form>
	</div>
</div>

<div class="container p-t-4 p-b-40">
	<h2 class="f1-l-1 cl2">
		<?php echo $mainCategoryData['main_category_name']; ?>
	</h2>
</div>

<section class="bg0 p-b-40">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 col-lg-8 p-b-80">
				<div class="p-r-10 p-r-0-sr991">
					<div class="m-t--40 p-b-40">
					    <?php if(!empty($viewBlog)){ ?>
                            <?php foreach($viewBlog as $data){ ?>
        						<div class="flex-wr-sb-s p-t-40 p-b-15 how-bor2">
        							<a href="<?php echo base_url(); ?><?php echo $data['blog_slug']; ?>" class="size-w-8 wrap-pic-w hov1 trans-03 w-full-sr575 m-b-25" id="clb">
        								<img src="<?php echo THUMBNAIL_PATH . $data['blog_thumbnail']; ?>" alt="IMG" width="320" height="180">
        							</a>
        
        							<div class="size-w-9 w-full-sr575 m-b-25">
        								<h5 class="p-b-12">
        									<a href="<?php echo base_url(); ?><?php echo $data['blog_slug']; ?>" class="f1-l-2 cl2 hov-cl10 trans-03 respon2" id="clb">
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
        
        								<div class="cl8 p-b-18">
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
        								</div>
        
        								<p>
        								    <?php 
                                                $blogDescription = strip_tags($data['blog_description']); 
                                                if(strlen($blogDescription) > 100){
                                                    echo substr($blogDescription, 0, 100);
                                                } else {
                                                    echo $blogDescription;
                                                }
        
                                            ?>
        								</p>
                                        <br>
                                        <a href="<?php echo base_url(); ?><?php echo $data['blog_slug']; ?>" class="f1-s-1 cl9 hov-cl10 trans-03" id="clb">
        									Read More
        									<i class="m-l-2 fa fa-long-arrow-alt-right"></i>
        								</a>
        							</div>
        						</div>
        					<?php } ?>
        				<?php } ?>
					</div>
                    
                    <div class="flex-wr-c-c m-rl--7 p-t-15">
						<ul class="pagination">
                            <?php echo $this->pagination->create_links(); ?>
                        </ul>
					</div>
				</div>
			</div>

			<div class="col-md-10 col-lg-4 p-b-80">
				<div class="p-l-10 p-rl-0-sr991">							
					<div class="p-b-23">
						<div class="how2 how2-cl4 flex-s-c">
							<h3 class="f1-m-2 cl3 tab01-title">
								Most Popular
							</h3>
						</div>

						<ul class="p-t-35">
						    <?php if(!empty($popularTitleBlog)){ ?>
                                <?php $counter = 1; foreach($popularTitleBlog as $data){ ?>
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