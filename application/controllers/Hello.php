<?php
class Hello extends CI_Controller
{
   public function index()
   {
   echo "Hello World!";
   }
   public function about()
   {
   echo "Welcome"; 
   }
   public function all()
   {
   $this->load->view('JC');
   }   
   public function model()
   {
   $this->load->model('UserModel');
   }
   
   ?>