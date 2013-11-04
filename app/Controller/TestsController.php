<?php
class TestsController extends AppController {
	
	var $name = 'Test';

    public function hello() {
        $this->set('action','Splooping');
    }

    public function index($id) {
    	$this->loadModel('Variant');
        $this->set('firstrecord', $this->Variant->find('first', array('conditions' => array('Variant.id' => 1))));
    	$this->set('somerecord', $this->Variant->read(NULL, $id));
    }
    public function view($id) {
    	$this->set('somerecord', $this->Variant->read(NULL, $id));
    }
}