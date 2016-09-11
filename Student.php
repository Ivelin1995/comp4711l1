<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Student Class
 *
 * @author Ivelin
 */
class Student {

    //constructor
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    //adds an email to a student class
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }

    //adds a grade to a student class
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    //calculates average of grades
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }

    //function to print out the student's info
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";
        foreach ($this->emails as $which => $what)
            $result .= $which . ': ' . $what . "\n";
        $result .= "\n";
        return '<pre>' . $result . '</pre>';
    }

}
