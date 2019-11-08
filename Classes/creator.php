<?php

class Creator implements SplSubject{
	//Creator is a publisher in an observer design pattern.
	//	The use of this Creator class is to spread new posts from Publishers to Subscribers
	//
	//------Fields------
	private $name;	//subject name
	private $observers 	= array();//array of observers
	private $Content;
	
	
	//------Functions------
	//	constructor
		//	attach--adds a particular sub to the array
		//	detach--Searchs the array of subs and removes a particular one
		//	notify--notifys all observers of content
		//	getContent-- returns content to subs
	public function _construct(){
		
	}
	
	public function attach(SplObserver $observer){
		//Attach an SplObserver
		$this->$observers[]	=	$observer;
	}
	
	public function detach(SplObserver $observer){
		//Detach an observer
		 $key	=	array_search($observer,$this->$observers, true);
        if($key){
            unset($this->$observers[$key]);
		}
	}
	
	public function notify(){
		//Notify an observer
		foreach ($this->$observers as $subs) {
            $subs->$update($this);
		}
	}
	
	public function getContent(){
		//returns content for subs
		return $this->$content;
	}
	
	
}

?>