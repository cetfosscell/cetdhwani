<?php

/*
 * author : sujith3g@gmail.com
 * 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$config = array(
    'controller/login' => array(
        array(
        'field' => 'e_mail',
        'label' => 'E Mail',
        'rules' => 'min_length[5]|required|valid_email'
        ),
        array(
        'field' => 'password',
        'label' => 'Password',
        'rules' => 'required'
        )
    ),
    'controller/login' => array(
    array(
    'field' => 'e_mail',
    'label' => 'E Mail',
    'rules' => 'min_length[5]|required|valid_email'
    ),
    array(
    'field' => 'password',
    'label' => 'Password',
    'rules' => 'required'
    )
    ),

    'controller/captcha' => array(
        array(
        'field' => 'captcha_text',
        'label' => 'Captcha',
        'rules' => 'required'
        )
    ),

    'controller/password_recovery' => array(
        array(
        'field' => 'e_mail',
        'label' => 'E Mail',
        'rules' => 'min_length[5]|required|valid_email'
        )
    ),
    'controller/registration' => array(
        array(
        'field' => 'stu_name',
        'label' => 'Student Name',
        'rules' => 'min_length[5]|required|trim'
        ),
        array(
        'field' => 'college',
        'label' => 'College',
        'rules' => 'min_length[3]|required'
        ),
        array(
        'field' => 'e_mail',
        'label' => 'E Mail',
        'rules' => 'min_length[5]|is_unique[stu_profile.e_mail]|required|valid_email'
        ),
        array(
        'field' => 'mob_no',
        'label' => 'Mobile Number',
        'rules' => 'exact_length[10]|integer|is_unique[stu_profile.mob_no]|required'
        ),
        array(
        'field' => 'password',
        'label' => 'Password',
        'rules' => 'required|matches[re_password]|min_length[5]'
        ),
        array(
        'field' => 're_password',
        'label' => 'Re Enter Password',
        'rules' => 'required|min_length[5]'
        ),
        
        array(
        'field' => 'captcha_text',
        'label' => 'Captcha Text',
        'rules' => 'required'
        )
    )
);
?>
