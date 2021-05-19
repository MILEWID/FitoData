<?php 
class homeController extends Controller{

    function __construct()
    {
        parent::__construct();    
    }

    function index(){
        parent::render('php/index');
    }
}