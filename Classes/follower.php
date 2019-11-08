<?php

class Follower implements SplObserver{
	//Follower is a Subscriber in an observer design pattern.
	//	The use of this Follower class is to spread new posts from Publishers to Subscribers
	//	
	//	SplObserver 
	//		Update ::Receive update from subject
	
	//------Fields------
	private $user;//ID of User
	//------Functions------
	//	constructor---creates an sub
	//	Update---receives updates and grabs content from publishers
	public function _construct($userID){
		$user=$userID;
	}
	//Update 
	public function update(SplSubject $publisher){
		return $publisher->$getContent();
	}
}

?>