<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
    'company' => [
        array(
                'field' => 'title',
                'label' => 'Title',
                'rules' => 'required|max_length[150]'
        ),
        array(
                'field' => 'phonenumber',
                'label' => 'Phone Number',
                'rules' => 'required|max_length[15]'
        ),
        array(
                'field' => 'address',
                'label' => 'Address',
                'rules' => 'required|max_length[200]'
        ),
        array(
                'field' => 'zipcode',
                'label' => 'Zip code',
                'rules' => 'required|max_length[20]'
        ),
        array(
                'field' => 'state',
                'label' => 'State',
                'rules' => 'required'
        ),
        array(
                'field' => 'city',
                'label' => 'City',
                'rules' => 'required|integer'
        ),
        array(
                'field' => 'description',
                'label' => 'Description',
                'rules' => 'required'
        ),
        array(
                'field' => 'category[]',
                'label' => 'Category',
                'rules' => 'required'
        )
    ]
);