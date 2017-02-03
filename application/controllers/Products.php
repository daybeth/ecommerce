<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Product');
	}
	public function index()
	{
		$products = $this->Product->get_all_products();
		$categories = $this->Product->get_all_categories();
		$this->load->view('main',[ "categories"=>$categories, "products" => $products]);
	}
	public function update_product_by_id($id){
		if($this->input->post('update')){
			$this->Product->update_product_by_id($this->input->post(),$id);
		}
		redirect('/users/admin_products');
	}

	//*********CONTROLLERS FOR PAGINATION-DAY**********
	public function get_all_products()
	{
		$products = $this->Product->get_all_products();
		header('Content-Type: application/json');
		echo json_encode($products);
	}
	public function get_page_products($num)
	{
		$products = $this->Product->get_page_products($num); 
		header('Content-Type: application/json');
		echo json_encode($products);
	}
	public function get_page_main($num)
	{
		$products = $this->Product->get_page_main($num); 
		header('Content-Type: application/json');
		echo json_encode($products);
	}
	//*********END OF CONTROLLERS FOR PAGINATION-DAY**********
	public function edit_product($id)
	{
		$products = $this->Product->get_product_by_id($id);
		$product_categories= $this->Product->get_product_categories_by_id($id);
		$this->load->view('edit_product',["product"=>$products, "categories"=>$product_categories]);
	}
	public function show($id)
	{
		$product = $this->Product->get_product_by_id($id);
		$this->load->view('show_product', ["product" => $product]);
	}
	public function image_upload($id)
	{
				$uploadpath = './assets/images/'.$id;

				if(!file_exists($uploadpath))
				{
					$new = mkdir($uploadpath, 0777);
				}

				$config['upload_path']          = $uploadpath;
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 99999;
                $config['max_width']            = 99999;
                $config['max_height']           = 99999;
				$this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('fileToUpload'))
                {
                        $error = $this->session->set_flashdata('errors', $this->upload->display_errors());
                        redirect("/products/edit_product/$id");
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        redirect("/products/edit_product/$id");
                }
	}
}