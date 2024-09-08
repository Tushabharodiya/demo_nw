    <footer>
    	<div class="bg2 p-t-40 p-b-25">
    		<div class="container">
    			<div class="row">
    				<div class="col-lg-4 p-b-20">
    					<div class="size-h-3 flex-s-c">
    						<a href="<?php echo base_url(); ?>">
    							<img class="max-s-full" src="<?php echo base_url(); ?>source/images/icons/logo-02.png" alt="LOGO">
    						</a>
    					</div>
    
    					<div>
    						<p class="f1-s-1 cl11 p-b-16">
    							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tempor magna eget elit efficitur, at accumsan sem placerat. Nulla tellus libero, mattis nec molestie at, facilisis ut turpis. Vestibulum dolor metus, tincidunt eget odio 
    						</p>
    					</div>
    				</div>
    
                    <?php if(!empty($footerPopularBlog)){ ?>
        				<div class="col-sm-6 col-lg-4 p-b-20">
        					<div class="size-h-3 flex-s-c">
        						<h5 class="f1-m-7 cl0">
        							Popular Posts
        						</h5>
        					</div>
        
        					<ul>
                                <?php foreach($footerPopularBlog as $data){ ?>
            						<li class="flex-wr-sb-s p-b-20">
            							<a href="<?php echo base_url(); ?><?php echo $data['blog_slug']; ?>" class="size-w-4 wrap-pic-w hov1 trans-03" id="clb">
            								<img src="<?php echo THUMBNAIL_PATH . $data['blog_thumbnail']; ?>" alt="IMG" width="80" height="60">
            							</a>
            
            							<div class="size-w-5">
            								<h6 class="p-b-5">
            									<a href="<?php echo base_url(); ?><?php echo $data['blog_slug']; ?>" class="f1-s-5 cl11 hov-cl10 trans-03" id="clb">
            										<?php 
                                                        $blogTitle = strip_tags($data['blog_title']); 
                                                        if(strlen($blogTitle) > 50){
                                                            echo substr($blogTitle, 0, 50);
                                                        } else {
                                                            echo $blogTitle;
                                                        }
                                                    ?>
            									</a>
            								</h6>
            
            								<span class="f1-s-3 cl6">
            									<?php
    											    $date = $data['blog_date'];
    											    $dateTime = DateTime::createFromFormat('d/m/Y', $date);
                                                    echo $dateTime->format('M j');
    											?>
            								</span>
            							</div>
            						</li>
            					<?php } ?>
        					</ul>
        				</div>
        			<?php } ?>
    
                    <?php if(!empty($footerMainCategory)){ ?>
        				<div class="col-sm-6 col-lg-4 p-b-20">
        					<div class="size-h-3 flex-s-c">
        						<h5 class="f1-m-7 cl0">
        							Category
        						</h5>
        					</div>
        
        					<ul class="m-t--12">
                                <?php foreach($footerMainCategory as $key => $data){ ?>
                                    <?php if($key == 0){ ?>
                						<li class="how-bor1 p-rl-5 p-tb-10">
                							<a href="<?php echo base_url(); ?>main/<?php echo $data['main_category_slug']; ?>" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                								<span class="f1-s-5 cl11 hov-cl10 trans-03"><?php echo $data['main_category_name']; ?> (<?php echo $data['countMainCategoryBlog']; ?>)</span>
                							</a>
                						</li>
                				    <?php } ?>
                				    <?php if($key == 1){ ?>
                						<li class="how-bor1 p-rl-5 p-tb-10">
                							<a href="<?php echo base_url(); ?>main/<?php echo $data['main_category_slug']; ?>" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                								<span class="f1-s-5 cl11 hov-cl10 trans-03"><?php echo $data['main_category_name']; ?> (<?php echo $data['countMainCategoryBlog']; ?>)</span>
                							</a>
                						</li>
                				    <?php } ?>
                				    <?php if($key == 2){ ?>
                						<li class="how-bor1 p-rl-5 p-tb-10">
                							<a href="<?php echo base_url(); ?>main/<?php echo $data['main_category_slug']; ?>" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                								<span class="f1-s-5 cl11 hov-cl10 trans-03"><?php echo $data['main_category_name']; ?> (<?php echo $data['countMainCategoryBlog']; ?>)</span>
                							</a>
                						</li>
                				    <?php } ?>
                				    <?php if($key == 3){ ?>
                						<li class="how-bor1 p-rl-5 p-tb-10">
                							<a href="<?php echo base_url(); ?>main/<?php echo $data['main_category_slug']; ?>" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                								<span class="f1-s-5 cl11 hov-cl10 trans-03"><?php echo $data['main_category_name']; ?> (<?php echo $data['countMainCategoryBlog']; ?>)</span>
                							</a>
                						</li>
                				    <?php } ?>
                				    <?php if($key == 4){ ?>
                						<li class="how-bor1 p-rl-5 p-tb-10">
                							<a href="<?php echo base_url(); ?>main/<?php echo $data['main_category_slug']; ?>" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                								<span class="f1-s-5 cl11 hov-cl10 trans-03"><?php echo $data['main_category_name']; ?> (<?php echo $data['countMainCategoryBlog']; ?>)</span>
                							</a>
                						</li>
                				    <?php } ?>
            					<?php } ?>
        					</ul>
        				</div>
        			<?php } ?>
    			</div>
    		</div>
    	</div>
    
    	<div class="bg11">
    		<div class="container size-h-4 flex-c-c p-tb-15">
    			<span class="f1-s-1 cl0 txt-center">
    				Copyright © 2018 
    				<a href="<?php echo $_SERVER['REQUEST_URI']; ?>" class="f1-s-1 cl10 hov-link1">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    			</span>
    		</div>
    	</div>
    </footer>
	
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<span class="fas fa-angle-up"></span>
		</span>
	</div>

	<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document" data-dismiss="modal">
			<div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

			<div class="wrap-video-mo-01">
				<div class="video-mo-01">
					<iframe src="https://www.youtube.com/embed/wJnBTPUQS5A?rel=0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>

	<script src="<?php echo base_url(); ?>source/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url(); ?>source/vendor/animsition/js/animsition.min.js"></script>
	<script src="<?php echo base_url(); ?>source/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url(); ?>source/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>source/js/main.js"></script>

</body>
</html>