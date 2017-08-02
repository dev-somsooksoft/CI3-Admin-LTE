<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('lib_template');
        $this->load->helper('url');

        if (!$this->input->is_ajax_request()) {
            lib_template::setTitleLayout("My Template");
            lib_template::setLayoutsTemplate("layouts/layouts");
            lib_template::setAddPathCss(array(
                base_url('assets-lte/bootstrap/css/bootstrap.min.css'),
                'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css',
                'https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css',
                base_url('assets-lte/dist/css/AdminLTE.min.css'),
                base_url('assets-lte/dist/css/skins/_all-skins.min.css')
            ));
            lib_template::setAddPathJavascript(array(
                base_url('assets-lte/plugins/jQuery/jquery-2.2.3.min.js'),
                base_url('assets-lte/bootstrap/js/bootstrap.min.js'),
                base_url('assets-lte/plugins/slimScroll/jquery.slimscroll.min.js'),
                base_url('assets-lte/plugins/fastclick/fastclick.js'),
                base_url('assets-lte/dist/js/app.min.js'),
                base_url('assets-lte/dist/js/demo.js')
            ));
        }
    }

    public function index() {
        $data = array();
        $data['helloTemplate'] = 'Hello Template URL';
        $data['listData'] = array('001', '0002');
        lib_template::pushUrlPathCss(array(
            base_url('path_css/namecssfiles01.css'),  base_url('path_css/namecssfiles02.css')
        ));//Your can add another css files
         
         lib_template::pushUrlPathJavascript(array(
           base_url('path_javascript/namejavascriptfiles01.js'), 'path_javascript/namejavascriptfiles02.js'
          )); //Your can add another javascript files
         
        lib_template::setChildPathFiles('welcome/welcome_message', $data);
        lib_template::RenderNow();
    }

}
