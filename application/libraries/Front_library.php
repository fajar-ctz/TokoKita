<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Front_library {

    var $CI;

    function __construct() {
        $this->CI = &get_instance();
//        $this->isLogin();
    }

    function getFeaturedProducts() {
        $this->CI->load->model('Products_model');
        $products = $this->CI->Products_model->getProductsPublished();
        return $products;
    }

    function getNewProducts() {
        $this->CI->load->model('Products_model');
        $products = $this->CI->Products_model->getNewProducts();
        return $products;
    }

    function getProductsByCategoryId($categoryId) {
        $this->CI->load->model('Products_model');
        $products = $this->CI->Products_model->getProductsByCategoryId($categoryId);
        return $products;
    }

    function getCategories() {
        $this->CI->load->model('Categories_model');
        $categories = $this->CI->Categories_model->getCategories();
        return $categories;
    }

    function getDiscountedProducts() {
        $this->CI->load->model('Products_model');
        $products = $this->CI->Products_model->getDiscountedProducts();
        return $products;
    }

    function getPagesByPermalink($permalink) {
        $this->CI->load->model('Pages_model');
        $page = $this->CI->Pages_model->getPagesByPermalink($permalink);
        return $page;
    }

    function generateRandomCode($length = 8) {
        // Available characters
        $chars = '0123456789abcdefghjkmnoprstvwxyz';

        $Code = '';
        // Generate code
        for ($i = 0; $i < $length; ++$i) {
            $Code .= substr($chars, (((int) mt_rand(0, strlen($chars))) - 1), 1);
        }
        return strtoupper($Code);
    }

}

?>
