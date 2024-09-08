<div class="container">
	<div class="headline bg0 flex-wr-sb-c p-tb-8">
		<div class="f2-s-1 p-r-30 m-tb-6">
			<a href="<?php echo base_url(); ?>" class="breadcrumb-item f1-s-3 cl9">
				Home 
			</a>

			<span class="breadcrumb-item f1-s-3 cl9">
				Contact Us
			</span>
		</div>
	</div>
</div>

<div class="container p-t-4 p-b-40">
	<h2 class="f1-l-1 cl2">
		Contact Us
	</h2>
</div>

<section class="bg0 p-b-60">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-7 col-lg-8 p-b-80">
				<div class="p-r-10 p-r-0-sr991">
					<form action="" method="post" class="form-validate is-alter" enctype="multipart/form-data">
						<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="contact_name" placeholder="Name*" required>

						<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="email" name="contact_email" placeholder="Email*" required>

						<textarea class="bo-1-rad-3 bocl13 size-a-15 f1-s-13 cl5 plh6 p-rl-18 p-tb-14 m-b-20" name="contact_message" placeholder="Your Message" required></textarea>
                        
                        <input type="submit" class="size-a-20 bg2 borad-3 f1-s-12 cl0 hov-btn1 trans-03 p-rl-15 m-t-20" name="submit" value="Send">
					</form>
				</div>
			</div>
			
			<div class="col-md-5 col-lg-4 p-b-80">
				<div class="p-l-10 p-rl-0-sr991">
					<div>
						<div class="how2 how2-cl4 flex-s-c">
							<h3 class="f1-m-2 cl3 tab01-title">
								Popular Post
							</h3>
						</div>

						<ul class="p-t-35">
						    <?php if(!empty($popularBlog)){ ?>
                                <?php foreach($popularBlog as $data){ ?>
        							<li class="flex-wr-sb-s p-b-30">
        								<a href="<?php echo base_url(); ?><?php echo $data['blog_slug']; ?>" class="size-w-10 wrap-pic-w hov1 trans-03" id="clb">
        									<img src="<?php echo THUMBNAIL_PATH . $data['blog_thumbnail']; ?>" alt="IMG" width="100" height="75">
        								</a>
        
        								<div class="size-w-11">
        									<h6 class="p-b-4">
        										<a href="<?php echo base_url(); ?><?php echo $data['blog_slug']; ?>" class="f1-s-5 cl3 hov-cl10 trans-03" id="clb">
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
        
        									<span class="cl8 txt-center p-b-24">
        										<a class="f1-s-6 cl8 hov-cl10 trans-03">
        											Published by
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
        							</li>
        						<?php } ?>
        					<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>