<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Element extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function alert()
    {
        $data['title'] = 'Alerts';


        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/bootstrapui/alert', $data);
        $this->load->view('_layout/footer');
    }

    public function button()
    {
        $data['title'] = 'Buttons';


        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/bootstrapui/button', $data);
        $this->load->view('_layout/footer');
    }

    public function dropdown()
    {
        $data['title'] = 'Dropdowns';


        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/bootstrapui/dropdown', $data);
        $this->load->view('_layout/footer');
    }

    public function modal()
    {
        $data['title'] = 'Modals';


        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/bootstrapui/modal', $data);
        $this->load->view('_layout/footer');
    }

    public function popovers()
    {
        $data['title'] = 'Popovers';


        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/bootstrapui/popovers', $data);
        $this->load->view('_layout/footer');
    }

    public function progressbar()
    {
        $data['title'] = 'Progress Bar';


        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/bootstrapui/progressbar', $data);
        $this->load->view('_layout/footer');
    }

    public function form()
    {
        $data['title'] = 'Form';


        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/form', $data);
        $this->load->view('_layout/footer');
    }

    public function simpletable()
    {
        $data['title'] = 'Simple Table';


        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/table/simple-tables', $data);
        $this->load->view('_layout/footer');
    }

    public function datatable()
    {
        $data['title'] = 'Data Table';


        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/table/data-tables', $data);
        $this->load->view('_layout/footer');
    }

    public function uicolors()
    {
        $data['title'] = 'UI Colors';


        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/ui-colors', $data);
        $this->load->view('_layout/footer');
    }

    public function register()
    {
        $data['title'] = 'Register';


        $this->load->view('_layout/auth-header', $data);
        $this->load->view('element/page/register', $data);
        $this->load->view('_layout/auth-footers', $data);
    }

    public function login()
    {
        $data['title'] = 'Login';


        $this->load->view('_layout/auth-header', $data);
        $this->load->view('element/page/login', $data);
        $this->load->view('_layout/auth-footers', $data);
    }

    public function blank()
    {
        $data['title'] = 'Blank';


        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/page/blank', $data);
        $this->load->view('_layout/footer');
    }

    public function organization_chart()
    {
        $data['title'] = 'Environmental Organization Chart';
        $data['page_title'] = 'Environmental Organization Chart';
        $data['bc_item'] = 'People';
        $data['bc_subitem'] = 'Environmental Organization Chart';


        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/page/blank', $data);
        $this->load->view('_layout/footer');
    }

    public function igsc_dashboard()
    {
        $data['title'] = 'I-GSC Dashboard';
        $data['page_title'] = 'I-GSC Dashboard';
        $data['bc_item'] = 'System';
        $data['bc_subitem'] = 'I-GSC Dashboard';

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/page/blank', $data);
        $this->load->view('_layout/footer');
    }

    public function ppa()
    {
        $data['title'] = 'PPA';
        $data['page_title'] = 'Pengendalian Pencemaran Air';
        $data['bc_item'] = 'Process';
        $data['bc_subitem'] = 'Pengendalian Pencemaran Air';

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/page/blank', $data);
        $this->load->view('_layout/footer');
    }

    public function ppu()
    {
        $data['title'] = 'PPU';
        $data['page_title'] = 'Pengendalian Pencemaran Udara';
        $data['bc_item'] = 'Process';
        $data['bc_subitem'] = 'Pengendalian Pencemaran Udara';

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/page/blank', $data);
        $this->load->view('_layout/footer');
    }

    public function plb3()
    {
        $data['title'] = 'PLB3';
        $data['page_title'] = 'Pengolahan Limbah B3 (Bahan Berbahaya & Beracun)';
        $data['bc_item'] = 'Process';
        $data['bc_subitem'] = 'Pengolahan Limbah B3';

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/page/blank', $data);
        $this->load->view('_layout/footer');
    }

    public function kkl()
    {
        $data['title'] = 'KKL';
        $data['page_title'] = 'Kriteria Kerusakan Lahan';
        $data['bc_item'] = 'Process';
        $data['bc_subitem'] = 'Kriteria Kerusakan Lahan';

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/page/blank', $data);
        $this->load->view('_layout/footer');
    }

    public function enviro_incident()
    {
        $data['title'] = 'Environmental Incident';
        $data['page_title'] = 'Environmental Incident';
        $data['bc_item'] = 'Process';
        $data['bc_subitem'] = 'Environmental Incident';

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/page/blank', $data);
        $this->load->view('_layout/footer');
    }

    public function improvement()
    {
        $data['title'] = 'Project Improvement';
        $data['page_title'] = 'Project Improvement';
        $data['bc_item'] = 'Continual Improvement';
        $data['bc_subitem'] = 'Project Improvement';

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/page/blank', $data);
        $this->load->view('_layout/footer');
    }

    public function gallery()
    {
        $data['title'] = 'Gallery';
        $data['page_title'] = 'Gallery';
        $data['bc_item'] = 'Miscelaneous';
        $data['bc_subitem'] = 'Gallery';

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/page/blank', $data);
        $this->load->view('_layout/footer');
    }

    public function publication()
    {
        $data['title'] = 'Publication';
        $data['page_title'] = 'Publication';
        $data['bc_item'] = 'Miscelaneous';
        $data['bc_subitem'] = 'Publication';

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/page/blank', $data);
        $this->load->view('_layout/footer');
    }

    public function mailbox()
    {
        $data['title'] = 'Mailbox';
        $data['page_title'] = 'Mailbox';
        $data['bc_item'] = 'Miscelaneous';
        $data['bc_subitem'] = 'Mailbox';

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/page/blank', $data);
        $this->load->view('_layout/footer');
    }

    public function error_page()
    {
        $data['title'] = '404 Page';


        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/page/404', $data);
        $this->load->view('_layout/footer');
    }

    public function charts()
    {
        $data['title'] = 'Example Charts';


        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('element/charts', $data);
        $this->load->view('_layout/footer');
    }
}
