<?php
/**
 * Created by PhpStorm.
 * User: sheldonlynn
 * Date: 2018-01-14
 * Time: 5:05 PM
 */

class Student {
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    function add_grade($grade) {
        $this->grades[] = $grade;
    }
}