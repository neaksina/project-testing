<?php

class UserController extends BaseController {
    public function index() {
        $this->view('users/users-list');
    }
}