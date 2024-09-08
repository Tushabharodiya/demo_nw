<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Error404 extends CI_Controller {

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
        
		$this->load->view('header', $data);
		$this->load->view('error');
		$this->load->view('footer', $data);
	}
}
