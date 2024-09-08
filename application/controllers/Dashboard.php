<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index(){
        $data['headerMainCategory'] = $this->DataModel->viewData(null, 'main_category_show = "true"', null, MAIN_CATEGORY_TABLE);
        foreach($data['headerMainCategory'] as $headerMainCategoryKey => &$headerMainCategoryRow){
            $headerMainCategoryRow['headerSubCategory'] = $this->DataModel->viewData(null, 'main_category_id = ' . $headerMainCategoryRow['main_category_id'], null, SUB_CATEGORY_TABLE);

            if(empty($headerMainCategoryRow['headerSubCategory'])){
                unset($data['headerMainCategory'][$headerMainCategoryKey]);
                continue;
            }

            foreach($headerMainCategoryRow['headerSubCategory'] as $headerSubCategoryKey => &$headerSubCategoryRow){
                $headerSubCategoryRow['headerBlog'] = $this->DataModel->viewData('blog_view '.'DESC', 'sub_category_id = ' . $headerSubCategoryRow['sub_category_id'], 4, BLOG_TABLE);

                if(empty($headerSubCategoryRow['headerBlog'])){
                    unset($headerMainCategoryRow['headerSubCategory'][$headerSubCategoryKey]);
                }
            }

            if(empty($headerMainCategoryRow['headerSubCategory'])){
                unset($data['headerMainCategory'][$headerMainCategoryKey]);
            }
        }
        $data['headerMainCategory'] = array_values($data['headerMainCategory']);
        foreach($data['headerMainCategory'] as &$headerMainCategoryRow){
            $headerMainCategoryRow['headerSubCategory'] = array_values($headerMainCategoryRow['headerSubCategory']);
        }
    
	    $data['footerPopularBlog'] = $this->DataModel->viewData('blog_view '.'DESC', null, 3, BLOG_TABLE);
        
        $data['footerMainCategory'] = $this->DataModel->viewData(null, null, null, MAIN_CATEGORY_TABLE);
        foreach($data['footerMainCategory'] as $footerMainCategoryKey => &$footerMainCategoryRow){
            $footerMainCategoryRow['footerSubCategory'] = $this->DataModel->viewData(null, 'main_category_id = ' . $footerMainCategoryRow['main_category_id'], null, SUB_CATEGORY_TABLE);

            if(empty($footerMainCategoryRow['footerSubCategory'])){
                unset($data['footerMainCategory'][$footerMainCategoryKey]);
                continue;
            }
            
            $mainCategoryBlogCount = 0;

            foreach($footerMainCategoryRow['footerSubCategory'] as $footerSubCategoryKey => &$footerSubCategoryRow){
                $footerSubCategoryRow['footerBlog'] = $this->DataModel->viewData('blog_view '.'DESC', 'sub_category_id = ' . $footerSubCategoryRow['sub_category_id'], 4, BLOG_TABLE);

                if(empty($footerSubCategoryRow['footerBlog'])){
                    unset($footerMainCategoryRow['footerSubCategory'][$footerSubCategoryKey]);
                } else {
                    $footerSubCategoryRow['countFooterBlog'] = $this->DataModel->countData('sub_category_id = '.$footerSubCategoryRow['sub_category_id'], BLOG_TABLE);
                    $mainCategoryBlogCount += $footerSubCategoryRow['countFooterBlog'];
                }
            }
            
            $footerMainCategoryRow['countMainCategoryBlog'] = $mainCategoryBlogCount;

            if(empty($footerMainCategoryRow['footerSubCategory'])){
                unset($data['footerMainCategory'][$footerMainCategoryKey]);
            }
        }
        $data['footerMainCategory'] = array_values($data['footerMainCategory']);
        foreach($data['footerMainCategory'] as &$footerMainCategoryRow){
            $footerMainCategoryRow['footerSubCategory'] = array_values($footerMainCategoryRow['footerSubCategory']);
        }
        
        $data['viewMainCategory'] = $this->DataModel->viewData('main_category_id '.'DESC', null, null, MAIN_CATEGORY_TABLE);
        foreach($data['viewMainCategory'] as $viewMainCategoryKey => &$viewMainCategoryRow){
            $viewMainCategoryRow['viewSubCategory'] = $this->DataModel->viewData(null, 'main_category_id = ' . $viewMainCategoryRow['main_category_id'], 4, SUB_CATEGORY_TABLE);

            if(empty($viewMainCategoryRow['viewSubCategory'])){
                unset($data['viewMainCategory'][$viewMainCategoryKey]);
                continue;
            }

            foreach($viewMainCategoryRow['viewSubCategory'] as $viewSubCategoryKey => &$viewSubCategoryRow){
                $viewSubCategoryRow['viewBlog'] = $this->DataModel->viewData('blog_view '.'DESC', 'sub_category_id = ' . $viewSubCategoryRow['sub_category_id'], 4, BLOG_TABLE);

                if(empty($viewSubCategoryRow['viewBlog'])){
                    unset($viewMainCategoryRow['viewSubCategory'][$viewSubCategoryKey]);
                }
            }

            if(empty($viewMainCategoryRow['viewSubCategory'])){
                unset($data['viewMainCategory'][$viewMainCategoryKey]);
            }
        }
        $data['viewMainCategory'] = array_values($data['viewMainCategory']);
        foreach($data['viewMainCategory'] as &$viewMainCategoryRow){
            $viewMainCategoryRow['viewSubCategory'] = array_values($viewMainCategoryRow['viewSubCategory']);
        }
	    
	    $data['trendingTitleBlog'] = $this->DataModel->viewData('blog_view '.'DESC', null, 3, BLOG_TABLE);
	    $data['trendingBlog'] = $this->DataModel->viewData('blog_view '.'DESC', null, 4, BLOG_TABLE);
	    $data['latestBlog'] = $this->DataModel->viewData('blog_view '.'DESC', null, 6, BLOG_TABLE);
	    $data['popularBlog'] = $this->DataModel->viewData('blog_view '.'DESC', null, 5, BLOG_TABLE);

		$this->load->view('header', $data);
		$this->load->view('index', $data);
		$this->load->view('footer', $data);
	}
	
	public function about(){
	    $data['headerMainCategory'] = $this->DataModel->viewData(null, 'main_category_show = "true"', null, MAIN_CATEGORY_TABLE);
        foreach($data['headerMainCategory'] as $headerMainCategoryKey => &$headerMainCategoryRow){
            $headerMainCategoryRow['headerSubCategory'] = $this->DataModel->viewData(null, 'main_category_id = ' . $headerMainCategoryRow['main_category_id'], null, SUB_CATEGORY_TABLE);

            if(empty($headerMainCategoryRow['headerSubCategory'])){
                unset($data['headerMainCategory'][$headerMainCategoryKey]);
                continue;
            }

            foreach($headerMainCategoryRow['headerSubCategory'] as $headerSubCategoryKey => &$headerSubCategoryRow){
                $headerSubCategoryRow['headerBlog'] = $this->DataModel->viewData('blog_view '.'DESC', 'sub_category_id = ' . $headerSubCategoryRow['sub_category_id'], 4, BLOG_TABLE);

                if(empty($headerSubCategoryRow['headerBlog'])){
                    unset($headerMainCategoryRow['headerSubCategory'][$headerSubCategoryKey]);
                }
            }

            if(empty($headerMainCategoryRow['headerSubCategory'])){
                unset($data['headerMainCategory'][$headerMainCategoryKey]);
            }
        }
        $data['headerMainCategory'] = array_values($data['headerMainCategory']);
        foreach($data['headerMainCategory'] as &$headerMainCategoryRow){
            $headerMainCategoryRow['headerSubCategory'] = array_values($headerMainCategoryRow['headerSubCategory']);
        }
        
        $data['footerPopularBlog'] = $this->DataModel->viewData('blog_view '.'DESC', null, 3, BLOG_TABLE);

	    $data['footerMainCategory'] = $this->DataModel->viewData(null, null, null, MAIN_CATEGORY_TABLE);
        foreach($data['footerMainCategory'] as $footerMainCategoryKey => &$footerMainCategoryRow){
            $footerMainCategoryRow['footerSubCategory'] = $this->DataModel->viewData(null, 'main_category_id = ' . $footerMainCategoryRow['main_category_id'], null, SUB_CATEGORY_TABLE);

            if(empty($footerMainCategoryRow['footerSubCategory'])){
                unset($data['footerMainCategory'][$footerMainCategoryKey]);
                continue;
            }
            
            $mainCategoryBlogCount = 0;

            foreach($footerMainCategoryRow['footerSubCategory'] as $footerSubCategoryKey => &$footerSubCategoryRow){
                $footerSubCategoryRow['footerBlog'] = $this->DataModel->viewData('blog_view '.'DESC', 'sub_category_id = ' . $footerSubCategoryRow['sub_category_id'], 4, BLOG_TABLE);

                if(empty($footerSubCategoryRow['footerBlog'])){
                    unset($footerMainCategoryRow['footerSubCategory'][$footerSubCategoryKey]);
                } else {
                    $footerSubCategoryRow['countFooterBlog'] = $this->DataModel->countData('sub_category_id = '.$footerSubCategoryRow['sub_category_id'], BLOG_TABLE);
                    $mainCategoryBlogCount += $footerSubCategoryRow['countFooterBlog'];
                }
            }
            
            $footerMainCategoryRow['countMainCategoryBlog'] = $mainCategoryBlogCount;

            if(empty($footerMainCategoryRow['footerSubCategory'])){
                unset($data['footerMainCategory'][$footerMainCategoryKey]);
            }
        }
        $data['footerMainCategory'] = array_values($data['footerMainCategory']);
        foreach($data['footerMainCategory'] as &$footerMainCategoryRow){
            $footerMainCategoryRow['footerSubCategory'] = array_values($footerMainCategoryRow['footerSubCategory']);
        }
        
        $data['pageData'] = $this->DataModel->getData(null, PAGE_TABLE);
        $data['popularBlog'] = $this->DataModel->viewData('blog_view '.'DESC', null, 5, BLOG_TABLE);

		$this->load->view('header', $data);
		$this->load->view('about', $data);
		$this->load->view('footer', $data);
	}
	
	public function privacy(){
	    $data['headerMainCategory'] = $this->DataModel->viewData(null, 'main_category_show = "true"', null, MAIN_CATEGORY_TABLE);
        foreach($data['headerMainCategory'] as $headerMainCategoryKey => &$headerMainCategoryRow){
            $headerMainCategoryRow['headerSubCategory'] = $this->DataModel->viewData(null, 'main_category_id = ' . $headerMainCategoryRow['main_category_id'], null, SUB_CATEGORY_TABLE);

            if(empty($headerMainCategoryRow['headerSubCategory'])){
                unset($data['headerMainCategory'][$headerMainCategoryKey]);
                continue;
            }

            foreach($headerMainCategoryRow['headerSubCategory'] as $headerSubCategoryKey => &$headerSubCategoryRow){
                $headerSubCategoryRow['headerBlog'] = $this->DataModel->viewData('blog_view '.'DESC', 'sub_category_id = ' . $headerSubCategoryRow['sub_category_id'], 4, BLOG_TABLE);

                if(empty($headerSubCategoryRow['headerBlog'])){
                    unset($headerMainCategoryRow['headerSubCategory'][$headerSubCategoryKey]);
                }
            }

            if(empty($headerMainCategoryRow['headerSubCategory'])){
                unset($data['headerMainCategory'][$headerMainCategoryKey]);
            }
        }
        $data['headerMainCategory'] = array_values($data['headerMainCategory']);
        foreach($data['headerMainCategory'] as &$headerMainCategoryRow){
            $headerMainCategoryRow['headerSubCategory'] = array_values($headerMainCategoryRow['headerSubCategory']);
        }
        
        $data['footerPopularBlog'] = $this->DataModel->viewData('blog_view '.'DESC', null, 3, BLOG_TABLE);

        $data['footerMainCategory'] = $this->DataModel->viewData(null, null, null, MAIN_CATEGORY_TABLE);
        foreach($data['footerMainCategory'] as $footerMainCategoryKey => &$footerMainCategoryRow){
            $footerMainCategoryRow['footerSubCategory'] = $this->DataModel->viewData(null, 'main_category_id = ' . $footerMainCategoryRow['main_category_id'], null, SUB_CATEGORY_TABLE);

            if(empty($footerMainCategoryRow['footerSubCategory'])){
                unset($data['footerMainCategory'][$footerMainCategoryKey]);
                continue;
            }
            
            $mainCategoryBlogCount = 0;

            foreach($footerMainCategoryRow['footerSubCategory'] as $footerSubCategoryKey => &$footerSubCategoryRow){
                $footerSubCategoryRow['footerBlog'] = $this->DataModel->viewData('blog_view '.'DESC', 'sub_category_id = ' . $footerSubCategoryRow['sub_category_id'], 4, BLOG_TABLE);

                if(empty($footerSubCategoryRow['footerBlog'])){
                    unset($footerMainCategoryRow['footerSubCategory'][$footerSubCategoryKey]);
                } else {
                    $footerSubCategoryRow['countFooterBlog'] = $this->DataModel->countData('sub_category_id = '.$footerSubCategoryRow['sub_category_id'], BLOG_TABLE);
                    $mainCategoryBlogCount += $footerSubCategoryRow['countFooterBlog'];
                }
            }
            
            $footerMainCategoryRow['countMainCategoryBlog'] = $mainCategoryBlogCount;

            if(empty($footerMainCategoryRow['footerSubCategory'])){
                unset($data['footerMainCategory'][$footerMainCategoryKey]);
            }
        }
        $data['footerMainCategory'] = array_values($data['footerMainCategory']);
        foreach($data['footerMainCategory'] as &$footerMainCategoryRow){
            $footerMainCategoryRow['footerSubCategory'] = array_values($footerMainCategoryRow['footerSubCategory']);
        }
        
        $data['pageData'] = $this->DataModel->getData(null, PAGE_TABLE);
        $data['popularBlog'] = $this->DataModel->viewData('blog_view '.'DESC', null, 5, BLOG_TABLE);
        
		$this->load->view('header', $data);
		$this->load->view('privacy', $data);
		$this->load->view('footer', $data);
	}
	
	public function terms(){
	    $data['headerMainCategory'] = $this->DataModel->viewData(null, 'main_category_show = "true"', null, MAIN_CATEGORY_TABLE);
        foreach($data['headerMainCategory'] as $headerMainCategoryKey => &$headerMainCategoryRow){
            $headerMainCategoryRow['headerSubCategory'] = $this->DataModel->viewData(null, 'main_category_id = ' . $headerMainCategoryRow['main_category_id'], null, SUB_CATEGORY_TABLE);

            if(empty($headerMainCategoryRow['headerSubCategory'])){
                unset($data['headerMainCategory'][$headerMainCategoryKey]);
                continue;
            }

            foreach($headerMainCategoryRow['headerSubCategory'] as $headerSubCategoryKey => &$headerSubCategoryRow){
                $headerSubCategoryRow['headerBlog'] = $this->DataModel->viewData('blog_view '.'DESC', 'sub_category_id = ' . $headerSubCategoryRow['sub_category_id'], 4, BLOG_TABLE);

                if(empty($headerSubCategoryRow['headerBlog'])){
                    unset($headerMainCategoryRow['headerSubCategory'][$headerSubCategoryKey]);
                }
            }

            if(empty($headerMainCategoryRow['headerSubCategory'])){
                unset($data['headerMainCategory'][$headerMainCategoryKey]);
            }
        }
        $data['headerMainCategory'] = array_values($data['headerMainCategory']);
        foreach($data['headerMainCategory'] as &$headerMainCategoryRow){
            $headerMainCategoryRow['headerSubCategory'] = array_values($headerMainCategoryRow['headerSubCategory']);
        }
        
        $data['footerPopularBlog'] = $this->DataModel->viewData('blog_view '.'DESC', null, 3, BLOG_TABLE);
        
        $data['footerMainCategory'] = $this->DataModel->viewData(null, null, null, MAIN_CATEGORY_TABLE);
        foreach($data['footerMainCategory'] as $footerMainCategoryKey => &$footerMainCategoryRow){
            $footerMainCategoryRow['footerSubCategory'] = $this->DataModel->viewData(null, 'main_category_id = ' . $footerMainCategoryRow['main_category_id'], null, SUB_CATEGORY_TABLE);

            if(empty($footerMainCategoryRow['footerSubCategory'])){
                unset($data['footerMainCategory'][$footerMainCategoryKey]);
                continue;
            }
            
            $mainCategoryBlogCount = 0;

            foreach($footerMainCategoryRow['footerSubCategory'] as $footerSubCategoryKey => &$footerSubCategoryRow){
                $footerSubCategoryRow['footerBlog'] = $this->DataModel->viewData('blog_view '.'DESC', 'sub_category_id = ' . $footerSubCategoryRow['sub_category_id'], 4, BLOG_TABLE);

                if(empty($footerSubCategoryRow['footerBlog'])){
                    unset($footerMainCategoryRow['footerSubCategory'][$footerSubCategoryKey]);
                } else {
                    $footerSubCategoryRow['countFooterBlog'] = $this->DataModel->countData('sub_category_id = '.$footerSubCategoryRow['sub_category_id'], BLOG_TABLE);
                    $mainCategoryBlogCount += $footerSubCategoryRow['countFooterBlog'];
                }
            }
            
            $footerMainCategoryRow['countMainCategoryBlog'] = $mainCategoryBlogCount;

            if(empty($footerMainCategoryRow['footerSubCategory'])){
                unset($data['footerMainCategory'][$footerMainCategoryKey]);
            }
        }
        $data['footerMainCategory'] = array_values($data['footerMainCategory']);
        foreach($data['footerMainCategory'] as &$footerMainCategoryRow){
            $footerMainCategoryRow['footerSubCategory'] = array_values($footerMainCategoryRow['footerSubCategory']);
        }
        
        $data['pageData'] = $this->DataModel->getData(null, PAGE_TABLE);
        $data['popularBlog'] = $this->DataModel->viewData('blog_view '.'DESC', null, 5, BLOG_TABLE);
        
		$this->load->view('header', $data);
		$this->load->view('terms', $data);
		$this->load->view('footer', $data);
	}
	
	public function contact(){
	    $data['headerMainCategory'] = $this->DataModel->viewData(null, 'main_category_show = "true"', null, MAIN_CATEGORY_TABLE);
        foreach($data['headerMainCategory'] as $headerMainCategoryKey => &$headerMainCategoryRow){
            $headerMainCategoryRow['headerSubCategory'] = $this->DataModel->viewData(null, 'main_category_id = ' . $headerMainCategoryRow['main_category_id'], null, SUB_CATEGORY_TABLE);

            if(empty($headerMainCategoryRow['headerSubCategory'])){
                unset($data['headerMainCategory'][$headerMainCategoryKey]);
                continue;
            }

            foreach($headerMainCategoryRow['headerSubCategory'] as $headerSubCategoryKey => &$headerSubCategoryRow){
                $headerSubCategoryRow['headerBlog'] = $this->DataModel->viewData('blog_view '.'DESC', 'sub_category_id = ' . $headerSubCategoryRow['sub_category_id'], 4, BLOG_TABLE);

                if(empty($headerSubCategoryRow['headerBlog'])){
                    unset($headerMainCategoryRow['headerSubCategory'][$headerSubCategoryKey]);
                }
            }

            if(empty($headerMainCategoryRow['headerSubCategory'])){
                unset($data['headerMainCategory'][$headerMainCategoryKey]);
            }
        }
        $data['headerMainCategory'] = array_values($data['headerMainCategory']);
        foreach($data['headerMainCategory'] as &$headerMainCategoryRow){
            $headerMainCategoryRow['headerSubCategory'] = array_values($headerMainCategoryRow['headerSubCategory']);
        }
        
        $data['footerPopularBlog'] = $this->DataModel->viewData('blog_view '.'DESC', null, 3, BLOG_TABLE);

	    $data['footerMainCategory'] = $this->DataModel->viewData(null, null, null, MAIN_CATEGORY_TABLE);
        foreach($data['footerMainCategory'] as $footerMainCategoryKey => &$footerMainCategoryRow){
            $footerMainCategoryRow['footerSubCategory'] = $this->DataModel->viewData(null, 'main_category_id = ' . $footerMainCategoryRow['main_category_id'], null, SUB_CATEGORY_TABLE);

            if(empty($footerMainCategoryRow['footerSubCategory'])){
                unset($data['footerMainCategory'][$footerMainCategoryKey]);
                continue;
            }
            
            $mainCategoryBlogCount = 0;

            foreach($footerMainCategoryRow['footerSubCategory'] as $footerSubCategoryKey => &$footerSubCategoryRow){
                $footerSubCategoryRow['footerBlog'] = $this->DataModel->viewData('blog_view '.'DESC', 'sub_category_id = ' . $footerSubCategoryRow['sub_category_id'], 4, BLOG_TABLE);

                if(empty($footerSubCategoryRow['footerBlog'])){
                    unset($footerMainCategoryRow['footerSubCategory'][$footerSubCategoryKey]);
                } else {
                    $footerSubCategoryRow['countFooterBlog'] = $this->DataModel->countData('sub_category_id = '.$footerSubCategoryRow['sub_category_id'], BLOG_TABLE);
                    $mainCategoryBlogCount += $footerSubCategoryRow['countFooterBlog'];
                }
            }
            
            $footerMainCategoryRow['countMainCategoryBlog'] = $mainCategoryBlogCount;

            if(empty($footerMainCategoryRow['footerSubCategory'])){
                unset($data['footerMainCategory'][$footerMainCategoryKey]);
            }
        }
        $data['footerMainCategory'] = array_values($data['footerMainCategory']);
        foreach($data['footerMainCategory'] as &$footerMainCategoryRow){
            $footerMainCategoryRow['footerSubCategory'] = array_values($footerMainCategoryRow['footerSubCategory']);
        }
        
        $data['popularBlog'] = $this->DataModel->viewData('blog_view '.'DESC', null, 5, BLOG_TABLE);
	    
	    $this->load->view('header', $data);
		$this->load->view('contact', $data);
		$this->load->view('footer', $data);
		
        if($this->input->post('submit')){
            $newData = array(
                'contact_name'=>$this->input->post('contact_name'),
                'contact_email'=>$this->input->post('contact_email'),
                'contact_message'=>$this->input->post('contact_message'),
                'contact_date'=>todayDate(),
                'contact_status'=>'publish',
            );
            $newDataEntry = $this->DataModel->insertData(CONTACT_TABLE, $newData);
            if($newDataEntry){
                redirect('contact');  
            }
        }
	}
	
	public function read($blogSlug){
	    $blogSlugData = $this->DataModel->getData('blog_slug = "'.$blogSlug.'"', BLOG_TABLE);
	    if($blogSlugData !== null && isset($blogSlugData['blog_slug']) && $blogSlugData['blog_slug'] == $blogSlug){
	        $data['headerMainCategory'] = $this->DataModel->viewData(null, 'main_category_show = "true"', null, MAIN_CATEGORY_TABLE);
            foreach($data['headerMainCategory'] as $headerMainCategoryKey => &$headerMainCategoryRow){
                $headerMainCategoryRow['headerSubCategory'] = $this->DataModel->viewData(null, 'main_category_id = ' . $headerMainCategoryRow['main_category_id'], null, SUB_CATEGORY_TABLE);
    
                if(empty($headerMainCategoryRow['headerSubCategory'])){
                    unset($data['headerMainCategory'][$headerMainCategoryKey]);
                    continue;
                }
    
                foreach($headerMainCategoryRow['headerSubCategory'] as $headerSubCategoryKey => &$headerSubCategoryRow){
                    $headerSubCategoryRow['headerBlog'] = $this->DataModel->viewData('blog_view '.'DESC', 'sub_category_id = ' . $headerSubCategoryRow['sub_category_id'], 4, BLOG_TABLE);
    
                    if(empty($headerSubCategoryRow['headerBlog'])){
                        unset($headerMainCategoryRow['headerSubCategory'][$headerSubCategoryKey]);
                    }
                }
    
                if(empty($headerMainCategoryRow['headerSubCategory'])){
                    unset($data['headerMainCategory'][$headerMainCategoryKey]);
                }
            }
            $data['headerMainCategory'] = array_values($data['headerMainCategory']);
            foreach($data['headerMainCategory'] as &$headerMainCategoryRow){
                $headerMainCategoryRow['headerSubCategory'] = array_values($headerMainCategoryRow['headerSubCategory']);
            }
            
    	    $data['footerPopularBlog'] = $this->DataModel->viewData('blog_view '.'DESC', null, 3, BLOG_TABLE);
    	    
    	    $data['footerMainCategory'] = $this->DataModel->viewData(null, null, null, MAIN_CATEGORY_TABLE);
            foreach($data['footerMainCategory'] as $footerMainCategoryKey => &$footerMainCategoryRow){
                $footerMainCategoryRow['footerSubCategory'] = $this->DataModel->viewData(null, 'main_category_id = ' . $footerMainCategoryRow['main_category_id'], null, SUB_CATEGORY_TABLE);
    
                if(empty($footerMainCategoryRow['footerSubCategory'])){
                    unset($data['footerMainCategory'][$footerMainCategoryKey]);
                    continue;
                }
                
                $mainCategoryBlogCount = 0;
    
                foreach($footerMainCategoryRow['footerSubCategory'] as $footerSubCategoryKey => &$footerSubCategoryRow){
                    $footerSubCategoryRow['footerBlog'] = $this->DataModel->viewData('blog_view '.'DESC', 'sub_category_id = ' . $footerSubCategoryRow['sub_category_id'], 4, BLOG_TABLE);
    
                    if(empty($footerSubCategoryRow['footerBlog'])){
                        unset($footerMainCategoryRow['footerSubCategory'][$footerSubCategoryKey]);
                    } else {
                        $footerSubCategoryRow['countFooterBlog'] = $this->DataModel->countData('sub_category_id = '.$footerSubCategoryRow['sub_category_id'], BLOG_TABLE);
                        $mainCategoryBlogCount += $footerSubCategoryRow['countFooterBlog'];
                    }
                }
                
                $footerMainCategoryRow['countMainCategoryBlog'] = $mainCategoryBlogCount;
    
                if(empty($footerMainCategoryRow['footerSubCategory'])){
                    unset($data['footerMainCategory'][$footerMainCategoryKey]);
                }
            }
            $data['footerMainCategory'] = array_values($data['footerMainCategory']);
            foreach($data['footerMainCategory'] as &$footerMainCategoryRow){
                $footerMainCategoryRow['footerSubCategory'] = array_values($footerMainCategoryRow['footerSubCategory']);
            }
    	    
            $data['viewMainCategory'] = $this->DataModel->viewData(null, null, null, MAIN_CATEGORY_TABLE);
            foreach($data['viewMainCategory'] as $viewMainCategoryKey => &$viewMainCategoryRow){
                $viewMainCategoryRow['viewSubCategory'] = $this->DataModel->viewData(null, 'main_category_id = ' . $viewMainCategoryRow['main_category_id'], null, SUB_CATEGORY_TABLE);
    
                if(empty($viewMainCategoryRow['viewSubCategory'])){
                    unset($data['viewMainCategory'][$viewMainCategoryKey]);
                    continue;
                }
    
                foreach($viewMainCategoryRow['viewSubCategory'] as $viewSubCategoryKey => &$viewSubCategoryRow){
                    $viewSubCategoryRow['viewBlog'] = $this->DataModel->viewData('blog_view '.'DESC', 'sub_category_id = ' . $viewSubCategoryRow['sub_category_id'], 4, BLOG_TABLE);
    
                    if(empty($viewSubCategoryRow['viewBlog'])){
                        unset($viewMainCategoryRow['viewSubCategory'][$viewSubCategoryKey]);
                    }
                }
    
                if(empty($viewMainCategoryRow['viewSubCategory'])){
                    unset($data['viewMainCategory'][$viewMainCategoryKey]);
                }
            }
            $data['viewMainCategory'] = array_values($data['viewMainCategory']);
            foreach($data['viewMainCategory'] as &$viewMainCategoryRow){
                $viewMainCategoryRow['viewSubCategory'] = array_values($viewMainCategoryRow['viewSubCategory']);
            }
            
            $data['blogData'] = $this->DataModel->getData('blog_slug = "'.$blogSlug.'"', BLOG_TABLE);
            $data['subCategoryData'] = $this->DataModel->getData('sub_category_id = "'.$data['blogData']['sub_category_id'].'"', SUB_CATEGORY_TABLE); 
    	    $data['popularBlog'] = $this->DataModel->viewData('blog_view '.'DESC', null, 5, BLOG_TABLE);
    	    $data['blockData'] = $this->DataModel->getData(null, BLOCK_TABLE);
    	    
    		$this->load->view('read', $data);
    		$this->load->view('footer', $data);
	    } else {
	        redirect('error');
	    }
	    
	}
	
	public function blogs($subCategorySlug){
	    $subCategorySlugData = $this->DataModel->getData('sub_category_slug = "'.$subCategorySlug.'"', SUB_CATEGORY_TABLE);
	    if($subCategorySlugData !== null && isset($subCategorySlugData['sub_category_slug']) && $subCategorySlugData['sub_category_slug'] == $subCategorySlug){
	        $subCategoryID = $subCategorySlugData['sub_category_id'];
    	    $data['headerMainCategory'] = $this->DataModel->viewData(null, 'main_category_show = "true"', null, MAIN_CATEGORY_TABLE);
            foreach($data['headerMainCategory'] as $headerMainCategoryKey => &$headerMainCategoryRow){
                $headerMainCategoryRow['headerSubCategory'] = $this->DataModel->viewData(null, 'main_category_id = ' . $headerMainCategoryRow['main_category_id'], null, SUB_CATEGORY_TABLE);
    
                if(empty($headerMainCategoryRow['headerSubCategory'])){
                    unset($data['headerMainCategory'][$headerMainCategoryKey]);
                    continue;
                }
    
                foreach($headerMainCategoryRow['headerSubCategory'] as $headerSubCategoryKey => &$headerSubCategoryRow){
                    $headerSubCategoryRow['headerBlog'] = $this->DataModel->viewData('blog_view '.'DESC', 'sub_category_id = ' . $headerSubCategoryRow['sub_category_id'], 4, BLOG_TABLE);
    
                    if(empty($headerSubCategoryRow['headerBlog'])){
                        unset($headerMainCategoryRow['headerSubCategory'][$headerSubCategoryKey]);
                    }
                }
    
                if(empty($headerMainCategoryRow['headerSubCategory'])){
                    unset($data['headerMainCategory'][$headerMainCategoryKey]);
                }
            }
            $data['headerMainCategory'] = array_values($data['headerMainCategory']);
            foreach($data['headerMainCategory'] as &$headerMainCategoryRow){
                $headerMainCategoryRow['headerSubCategory'] = array_values($headerMainCategoryRow['headerSubCategory']);
            }
        
            $data['footerPopularBlog'] = $this->DataModel->viewData('blog_view '.'DESC', null, 3, BLOG_TABLE);

            $data['footerMainCategory'] = $this->DataModel->viewData(null, null, null, MAIN_CATEGORY_TABLE);
            foreach($data['footerMainCategory'] as $footerMainCategoryKey => &$footerMainCategoryRow){
                $footerMainCategoryRow['footerSubCategory'] = $this->DataModel->viewData(null, 'main_category_id = ' . $footerMainCategoryRow['main_category_id'], null, SUB_CATEGORY_TABLE);
    
                if(empty($footerMainCategoryRow['footerSubCategory'])){
                    unset($data['footerMainCategory'][$footerMainCategoryKey]);
                    continue;
                }
                
                $mainCategoryBlogCount = 0;
    
                foreach($footerMainCategoryRow['footerSubCategory'] as $footerSubCategoryKey => &$footerSubCategoryRow){
                    $footerSubCategoryRow['footerBlog'] = $this->DataModel->viewData('blog_view '.'DESC', 'sub_category_id = ' . $footerSubCategoryRow['sub_category_id'], 4, BLOG_TABLE);
    
                    if(empty($footerSubCategoryRow['footerBlog'])){
                        unset($footerMainCategoryRow['footerSubCategory'][$footerSubCategoryKey]);
                    } else {
                        $footerSubCategoryRow['countFooterBlog'] = $this->DataModel->countData('sub_category_id = '.$footerSubCategoryRow['sub_category_id'], BLOG_TABLE);
                        $mainCategoryBlogCount += $footerSubCategoryRow['countFooterBlog'];
                    }
                }
                
                $footerMainCategoryRow['countMainCategoryBlog'] = $mainCategoryBlogCount;
    
                if(empty($footerMainCategoryRow['footerSubCategory'])){
                    unset($data['footerMainCategory'][$footerMainCategoryKey]);
                }
            }
            $data['footerMainCategory'] = array_values($data['footerMainCategory']);
            foreach($data['footerMainCategory'] as &$footerMainCategoryRow){
                $footerMainCategoryRow['footerSubCategory'] = array_values($footerMainCategoryRow['footerSubCategory']);
            }
            
            $data['subCategoryData'] = $this->DataModel->getData('sub_category_id = ' . $subCategoryID, SUB_CATEGORY_TABLE);
            
            if(isset($_POST['reset_search'])){
                $this->session->unset_userdata('session_blogs');
            }
            
            if(isset($_POST['submit_search'])){
                $searchBlogs = $this->input->post('search_blogs');
                $this->session->set_userdata('session_blogs', $searchBlogs);
            }
            
            $sessionBlogs = $this->session->userdata('session_blogs');
            
            $conditions['search_blogs'] = $sessionBlogs;
            $conditions['returnType'] = 'count';
            
            $totalRec = $this->DataModel->viewBlogsData($conditions, $subCategoryID, BLOG_TABLE);
            
            //pagination config
            $config['base_url']    = site_url($subCategorySlug);
            $config['uri_segment'] = 2;
            $config['total_rows']  = $totalRec;
            $config['per_page']    = 10;
            
            //styling
            $config['num_tag_open'] = '<li class="page-item page-link">';
            $config['num_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="active page-item"><a href="javascript:void(0);" class="page-link" >';
            $config['cur_tag_close'] = '</a></li>';
            $config['next_link'] = '&raquo';
            $config['prev_link'] = '&laquo';
            $config['next_tag_open'] = '<li class="pg-next page-item page-link">';
            $config['next_tag_close'] = '</li>';
            $config['prev_tag_open'] = '<li class="pg-prev page-item page-link">';
            $config['prev_tag_close'] = '</li>';
            $config['first_tag_open'] = '<li class="page-item page-link">';
            $config['first_tag_close'] = '</li>';
            $config['last_tag_open'] = '<li class="page-item page-link">';
            $config['last_tag_close'] = '</li>';
            
            //initialize pagination library
            $this->pagination->initialize($config);
            
            //define offset
            $page = $this->uri->segment(2);
            $offset = !$page?0:$page;
            
            //get rows
            $conditions['returnType'] = '';
            $conditions['start'] = $offset;
            $conditions['limit'] = 10;
            
            $blog = $this->DataModel->viewBlogsData($conditions, $subCategoryID, BLOG_TABLE);
            
            $data['viewBlog'] = array();
            
            if(is_array($blog) || is_object($blog)){
                foreach($blog as $blogRow){
                    $dataArray = array();
                    $dataArray['blog_id'] = $blogRow['blog_id'];
                    $dataArray['sub_category_id'] = $blogRow['sub_category_id'];
                    $dataArray['blog_image'] = $blogRow['blog_image'];
                    $dataArray['blog_thumbnail'] = $blogRow['blog_thumbnail'];
                    $dataArray['blog_slug'] = $blogRow['blog_slug'];
                    $dataArray['blog_canonical'] = $blogRow['blog_canonical'];
                    $dataArray['blog_created_by'] = $blogRow['blog_created_by'];
                    $dataArray['blog_title'] = $blogRow['blog_title'];
                    $dataArray['blog_meta_title'] = $blogRow['blog_meta_title'];
                    $dataArray['blog_description'] = $blogRow['blog_description'];
                    $dataArray['blog_meta_description'] = $blogRow['blog_meta_description'];
                    $dataArray['blog_image_alt'] = $blogRow['blog_image_alt'];
                    $dataArray['blog_image_credit'] = $blogRow['blog_image_credit'];
                    $dataArray['blog_image_credit_url'] = $blogRow['blog_image_credit_url'];
                    $dataArray['blog_date'] = $blogRow['blog_date'];
                    $dataArray['blog_view'] = $blogRow['blog_view'];
                    $dataArray['blog_comment'] = $blogRow['blog_comment'];
                    $dataArray['blog_index'] = $blogRow['blog_index'];
                    $dataArray['blog_follow'] = $blogRow['blog_follow'];
                    $dataArray['blog_status'] = $blogRow['blog_status'];
                    array_push($data['viewBlog'], $dataArray);
                }
            }

            $data['popularTitleBlog'] = $this->DataModel->viewData('blog_view '.'DESC', null, 5, BLOG_TABLE);
            $data['popularBlog'] = $this->DataModel->viewData('blog_view '.'DESC', null, 5, BLOG_TABLE);
            
    		$this->load->view('header', $data);
    		$this->load->view('blogs', $data);
    		$this->load->view('footer', $data);
        } else {
            redirect('error');
        }
	}
	
	public function categories($mainCategorySlug){
	    $mainCategorySlugData = $this->DataModel->getData('main_category_slug = "'.$mainCategorySlug.'"', MAIN_CATEGORY_TABLE);
	    if($mainCategorySlugData !== null && isset($mainCategorySlugData['main_category_slug']) && $mainCategorySlugData['main_category_slug'] == $mainCategorySlug){
	        $mainCategoryID = $mainCategorySlugData['main_category_id'];
    	    $data['headerMainCategory'] = $this->DataModel->viewData(null, 'main_category_show = "true"', null, MAIN_CATEGORY_TABLE);
            foreach($data['headerMainCategory'] as $headerMainCategoryKey => &$headerMainCategoryRow){
                $headerMainCategoryRow['headerSubCategory'] = $this->DataModel->viewData(null, 'main_category_id = ' . $headerMainCategoryRow['main_category_id'], null, SUB_CATEGORY_TABLE);
    
                if(empty($headerMainCategoryRow['headerSubCategory'])){
                    unset($data['headerMainCategory'][$headerMainCategoryKey]);
                    continue;
                }
    
                foreach($headerMainCategoryRow['headerSubCategory'] as $headerSubCategoryKey => &$headerSubCategoryRow){
                    $headerSubCategoryRow['headerBlog'] = $this->DataModel->viewData('blog_view '.'DESC', 'sub_category_id = ' . $headerSubCategoryRow['sub_category_id'], 4, BLOG_TABLE);
    
                    if(empty($headerSubCategoryRow['headerBlog'])){
                        unset($headerMainCategoryRow['headerSubCategory'][$headerSubCategoryKey]);
                    }
                }
    
                if(empty($headerMainCategoryRow['headerSubCategory'])){
                    unset($data['headerMainCategory'][$headerMainCategoryKey]);
                }
            }
            $data['headerMainCategory'] = array_values($data['headerMainCategory']);
            foreach($data['headerMainCategory'] as &$headerMainCategoryRow){
                $headerMainCategoryRow['headerSubCategory'] = array_values($headerMainCategoryRow['headerSubCategory']);
            }
            
            $data['footerPopularBlog'] = $this->DataModel->viewData('blog_view '.'DESC', null, 3, BLOG_TABLE);
        
            $data['footerMainCategory'] = $this->DataModel->viewData(null, null, null, MAIN_CATEGORY_TABLE);
            foreach($data['footerMainCategory'] as $footerMainCategoryKey => &$footerMainCategoryRow){
                $footerMainCategoryRow['footerSubCategory'] = $this->DataModel->viewData(null, 'main_category_id = ' . $footerMainCategoryRow['main_category_id'], null, SUB_CATEGORY_TABLE);
    
                if(empty($footerMainCategoryRow['footerSubCategory'])){
                    unset($data['footerMainCategory'][$footerMainCategoryKey]);
                    continue;
                }
                
                $mainCategoryBlogCount = 0;
    
                foreach($footerMainCategoryRow['footerSubCategory'] as $footerSubCategoryKey => &$footerSubCategoryRow){
                    $footerSubCategoryRow['footerBlog'] = $this->DataModel->viewData('blog_view '.'DESC', 'sub_category_id = ' . $footerSubCategoryRow['sub_category_id'], 4, BLOG_TABLE);
    
                    if(empty($footerSubCategoryRow['footerBlog'])){
                        unset($footerMainCategoryRow['footerSubCategory'][$footerSubCategoryKey]);
                    } else {
                        $footerSubCategoryRow['countFooterBlog'] = $this->DataModel->countData('sub_category_id = '.$footerSubCategoryRow['sub_category_id'], BLOG_TABLE);
                        $mainCategoryBlogCount += $footerSubCategoryRow['countFooterBlog'];
                    }
                }
                
                $footerMainCategoryRow['countMainCategoryBlog'] = $mainCategoryBlogCount;
    
                if(empty($footerMainCategoryRow['footerSubCategory'])){
                    unset($data['footerMainCategory'][$footerMainCategoryKey]);
                }
            }
            $data['footerMainCategory'] = array_values($data['footerMainCategory']);
            foreach($data['footerMainCategory'] as &$footerMainCategoryRow){
                $footerMainCategoryRow['footerSubCategory'] = array_values($footerMainCategoryRow['footerSubCategory']);
            }
            
            $data['mainCategoryData'] = $this->DataModel->getData('main_category_id = ' . $mainCategoryID, MAIN_CATEGORY_TABLE);
            $subCategoryIdsArray = $this->DataModel->viewData(null, 'main_category_id = ' . $mainCategoryID, null, SUB_CATEGORY_TABLE);
            $subCategoryArray = array_column($subCategoryIdsArray, 'sub_category_id');
            $subCategoryIDs = $subCategoryArray;
            
            if(isset($_POST['reset_search'])){
                $this->session->unset_userdata('session_categories');
            }
            if(isset($_POST['submit_search'])){
                $searchCategories = $this->input->post('search_categories');
                $this->session->set_userdata('session_categories', $searchCategories);
            }
            $sessionCategories = $this->session->userdata('session_categories');
            
            //get rows count
            $conditions['search_categories'] = $sessionCategories;
            $conditions['returnType'] = 'count';
            
            $totalRec = $this->DataModel->viewCategoriesData($conditions, $subCategoryIDs, BLOG_TABLE);
    
            //pagination config
            $config['base_url']    = site_url($mainCategorySlug);
            $config['uri_segment'] = 2;
            $config['total_rows']  = $totalRec;
            $config['per_page']    = 10;
            
            //styling
            $config['num_tag_open'] = '<li class="page-item page-link">';
            $config['num_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="active page-item"><a href="javascript:void(0);" class="page-link" >';
            $config['cur_tag_close'] = '</a></li>';
            $config['next_link'] = '&raquo';
            $config['prev_link'] = '&laquo';
            $config['next_tag_open'] = '<li class="pg-next page-item page-link">';
            $config['next_tag_close'] = '</li>';
            $config['prev_tag_open'] = '<li class="pg-prev page-item page-link">';
            $config['prev_tag_close'] = '</li>';
            $config['first_tag_open'] = '<li class="page-item page-link">';
            $config['first_tag_close'] = '</li>';
            $config['last_tag_open'] = '<li class="page-item page-link">';
            $config['last_tag_close'] = '</li>';
            
            //initialize pagination library
            $this->pagination->initialize($config);
            
            //define offset
            $page = $this->uri->segment(2);
            $offset = !$page?0:$page;
            
            //get rows
            $conditions['returnType'] = '';
            $conditions['start'] = $offset;
            $conditions['limit'] = 10;
            
            $blog = $this->DataModel->viewCategoriesData($conditions, $subCategoryIDs, BLOG_TABLE);
            
            $data['viewBlog'] = array();
            if(is_array($blog) || is_object($blog)){
                foreach($blog as $blogRow){
                    $dataArray = array();
                    $dataArray['blog_id'] = $blogRow['blog_id'];
                    $dataArray['sub_category_id'] = $blogRow['sub_category_id'];
                    $dataArray['blog_image'] = $blogRow['blog_image'];
                    $dataArray['blog_thumbnail'] = $blogRow['blog_thumbnail'];
                    $dataArray['blog_slug'] = $blogRow['blog_slug'];
                    $dataArray['blog_canonical'] = $blogRow['blog_canonical'];
                    $dataArray['blog_created_by'] = $blogRow['blog_created_by'];
                    $dataArray['blog_title'] = $blogRow['blog_title'];
                    $dataArray['blog_meta_title'] = $blogRow['blog_meta_title'];
                    $dataArray['blog_description'] = $blogRow['blog_description'];
                    $dataArray['blog_meta_description'] = $blogRow['blog_meta_description'];
                    $dataArray['blog_image_alt'] = $blogRow['blog_image_alt'];
                    $dataArray['blog_image_credit'] = $blogRow['blog_image_credit'];
                    $dataArray['blog_image_credit_url'] = $blogRow['blog_image_credit_url'];
                    $dataArray['blog_date'] = $blogRow['blog_date'];
                    $dataArray['blog_view'] = $blogRow['blog_view'];
                    $dataArray['blog_comment'] = $blogRow['blog_comment'];
                    $dataArray['blog_index'] = $blogRow['blog_index'];
                    $dataArray['blog_follow'] = $blogRow['blog_follow'];
                    $dataArray['blog_status'] = $blogRow['blog_status'];
                    array_push($data['viewBlog'], $dataArray);
                }
            }
            
            $data['popularTitleBlog'] = $this->DataModel->viewData('blog_view '.'DESC', null, 5, BLOG_TABLE);

    		$this->load->view('header', $data);
    		$this->load->view('categories', $data);
    		$this->load->view('footer', $data);
        } else {
            redirect('error');
        }
	}
}

