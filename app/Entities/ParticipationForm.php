<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class ParticipationForm extends Entity
{
    function initializeEmailConfirmation($token) {
        if ($this->attributes['email_verified'] == 1) {
            return false;
        }

        $email = service('email');

        $email->setTo($this->attributes['requested_email']);
        $email->setSubject('Confirm your email to participate');
        $email->setMessage("To Confirm Your Email, please click on the following link: <a href='".site_url('participate/confirmEmail?id='.$this->attributes['id'].'&token='.$token)."'>Confirm Email</a>");

        return $email->send();
    }

    function hasExpiredEmailConfirmation() {
        $result = strtotime('+1 hour',strtotime(model('FormModel')->find($this->attributes['id'])['created_at'])) < time();
        if ($result) {
            model('ParticipationFormModel')->delete($this->attributes['id']);
            model('FormModel')->delete($this->attributes['id']);
        }

        return $result;
    }

    function confirmEmail($token) {        
        if ($this->hasExpiredEmailConfirmation()) {
            return false;
        }

        if (!password_verify($token, $this->attributes['email_token'])) {
            return false;
        }

        model('ParticipationFormModel')->update($this->attributes['id'], ['email_verified' => 1]);
        return true;
    }

    function sendInfoEmail() {
        $email = service('email');

        $email->setTo($this->attributes['requested_email']);
        $email->setSubject('Participation Form Submitted');
        $email->setMessage("Your participation form has been submitted successfully. We will get back to you soon.");

        return $email->send();
    }
}