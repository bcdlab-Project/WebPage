<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;

class Participate extends BaseController
{
    use ResponseTrait;

    private $validationRules = [
        'requested_username' => 'required|max_length[25]',
        'requested_email'    => 'required|max_length[254]|valid_email',
        'why_participate' => 'required',
        'work_role' => 'max_length[25]',
        'github_profile' => 'max_length[150]|valid_url_strict'
    ];

    private $paramAlias = [
        'requested_username' => 'Username',
        'requested_email'    => 'Email',
        'why_participate' => 'Why participate field',
        'work_role' => 'Work Role',
        'github_profile' => 'GitHub Profile field'
    ];

    public function getIndex() {
        $data['title'] = 'Participate';
        $data['pageMargin'] = false;
        $data['view'] = 'participate';
        $data['scripts'] = ['forms.js'];

        return view('templates/header', $data)
            . view('participate/main')
            . view('templates/footer');
    }

    public function postValidate($part) {
        $rulesFirst = array_intersect_key($this->validationRules, array_flip(['requested_username','requested_email']));

        if ($part == 'first') {
            $data = $this->request->getPost(['requested_username','requested_email']);
            $rules = $rulesFirst; // uses only the first 2 rules
        } else {
            $data = $this->request->getPost(['requested_username','requested_email','why_participate','work_role','github_profile']);
            $rules = $this->validationRules; // uses the page rules
        }

        if (empty($data['github_profile'])) { $data['github_profile'] = null; unset($rules['github_profile']);}
        if (empty($data['work_role'])) { $data['work_role'] = null; }

        if (! $this->validateData($data, $rules)) {
            $errors = $this->validator->getErrors();
            foreach ($errors as $key => $value) {
                $errors[$key] =  str_replace($key,$this->paramAlias[$key],$value);
            }

            return $this->setResponseFormat('json')->respond($errors, 200);
        } else {
            return $this->setResponseFormat('json')->respond(['ok' => true], 200);
        }
    }

    public function postIndex() {
        helper('text');

        $data = $this->request->getPost(['requested_username','requested_email','why_participate','work_role','github_profile']);
        $rules = $this->validationRules;

        if (empty($data['github_profile'])) { $data['github_profile'] = null; unset($rules['github_profile']);}
        if (empty($data['work_role'])) { $data['work_role'] = null; }

        if (! $this->validateData($data, $rules)) {
            $errors = $this->validator->getErrors();
            foreach ($errors as $key => $value) {
                $errors[$key] =  str_replace($key,$this->paramAlias[$key],$value);
            }
            return $this->setResponseFormat('json')->respond($errors, 200);
        } else {
            $token = random_string('alnum',32);
            $data["email_token"] = password_hash($token, PASSWORD_DEFAULT);
            $data['id'] = model('FormModel')->insert(['type' => 1],true);
            $result = model('ParticipationFormModel')->insert($data);
            if ($result) {
                model('ParticipationFormModel')->find($result)->initializeEmailConfirmation($token);
                return $this->setResponseFormat('json')->respond(['ok' => true], 200);
            } else {
                return $this->setResponseFormat('json')->respond(['ok' => false], 200);
            }
            
        }
    }

    public function getConfirmEmail() {
        $inputs = $this->request->getGet(['id','token']);
        
        $data['title'] = 'Confirm Email';
        $data['pageMargin'] = false;
        $data['view'] = 'confirmEmail';

        $data['messageok'] = false;

        if (!isset($inputs['id']) || !isset($inputs['token'])) {
            $data['message'] = 'Something went wrong. Please try again later.';
        } else {
            $form = model('ParticipationFormModel')->find($inputs['id']);
    
            if ($form == null) {
                $data['message'] = 'Something went wrong. Please try again later.';
            } else if ($form->email_verified == 1) {
                $data['messageok'] = true;
                $data['message'] = 'Email already confirmed';
            } else if ($form->hasExpiredEmailConfirmation()) {
                $data['message'] = 'Email confirmation has expired. Please try to make a new Participation Request.';
            } else if ($form->confirmEmail($inputs['token'])) {
                $data['messageok'] = true;
                $data['message'] = 'Email confirmed successfully';
                $form->sendInfoEmail();
            } else {
                $data['message'] = 'Something went wrong. Please try again later.';
            }
        }

        return view('templates/header', $data)
            . view('participate/confirmEmail')
            . view('templates/footer');
    }
}