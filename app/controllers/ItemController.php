<?php

class ItemController extends BaseController {
    
    public function index() {
        return View::make('items.index');
    }
    
}
