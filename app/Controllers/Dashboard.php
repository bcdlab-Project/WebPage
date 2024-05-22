<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function getIndex() {
        $data['title'] = 'bcdlab-Project';
        $data['pageMargin'] = false;
        $data['view'] = 'dashboard';

        return view('templates/header', $data)
            . view('dashboard')
            . view('templates/footer');
    }
}