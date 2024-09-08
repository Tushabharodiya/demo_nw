<?php defined('BASEPATH') OR exit('No direct script access allowed');

class DataModel extends CI_Model {
    function __construct() {
		parent::__construct();
	}
	
	// ======================================================== //
    /* Extra Functions */
    // ======================================================== //
	function countData($where, $table){
		$this->db->select('*');
		if($where){
		    $this->db->where($where);
		}
		$this->db->from($table);
		$result = $this->db->count_all_results();
		return $result;
	}

	// ======================================================== //
    /* Common Functions */
    // ======================================================== //
	function insertData($table, $data){
		$result = $this->db->insert($table, $data);
		if($result)
			return $this->db->insert_id();
		else
			return false;
	}
	
	function getData($where, $table){
		$this->db->select('*');
		$this->db->from($table);
		if($where){ $this->db->where($where); }
		$query = $this->db->get();
		$result = $query->row_array();
		return $result;
	}
	
	function viewData($order, $where, $limit, $table){
	    $this->db->select('*');
		$this->db->from($table);
		$this->db->order_by($order);
		if($order){ $this->db->order_by($order); }
		if($where){ $this->db->where($where); }
		if($limit){ $this->db->limit($limit); }
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}
	
	function editData($where, $table, $editData){
		$this->db->where($where);
        $result = $this->db->update($table, $editData);
		if($result)
			return  true;
		else
			return false;
	}
	
	function deleteData($where, $table){
		$this->db->where($where);
		$result = $this->db->delete($table);
		if($result)
			return true;
		else
			return false;
	}
	
	function viewBlogsData($params, $where, $table){
	    $this->db->select('*');
		$this->db->from($table);
		$this->db->order_by('blog_id','DESC');
		if(!empty($params['search_blogs'])){
            $searchBlogs = $params['search_blogs'];
            $likeArr = array('blog_title' => $searchBlogs, 'blog_description' => $searchBlogs, 'blog_created_by' => $searchBlogs);
            $this->db->group_start();
            $this->db->or_like($likeArr);
            $this->db->group_end();
        }
        $this->db->where('sub_category_id', $where);
        if(array_key_exists("blog_id",$params)){
            $this->db->where('blog_id',$params['blog_id']);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
                $result = $this->db->count_all_results();
            }else{
                $query = $this->db->get();
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
        }
        return $result;
    }
	
	function viewCategoriesData($params, $where, $table){
	    $this->db->select('*');
		$this->db->from($table);
		if(!empty($params['search_categories'])){
            $searchCategories = $params['search_categories'];
            $likeArr = array('blog_title' => $searchCategories, 'blog_description' => $searchCategories, 'blog_created_by' => $searchCategories);
            $this->db->group_start();
            $this->db->or_like($likeArr);
            $this->db->group_end();
        }
        $this->db->where_in('sub_category_id', $where);
        if(array_key_exists("blog_id",$params)){
            $this->db->where('blog_id',$params['blog_id']);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
                $result = $this->db->count_all_results();
            }else{
                $query = $this->db->get();
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
        }
        return $result;
    }
}