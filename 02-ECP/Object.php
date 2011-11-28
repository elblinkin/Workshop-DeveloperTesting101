<?php

class Object {

    function handleName(Collaborator $c) {
        // Do something with getName()
    }
    
    function handleAge(Collaborator $c) {
        // Do something with getAge()
    }
    
    function handleInterest(Collaborator $c) {
        // Do something with isInterested()
    }
    
    function handleCollaborator(Collaborator $c) {
        $this->handleName($c);
        $this->handleAge($c);
        $this->handleInterest($c);
    }
}

class Collaborator {

    /*String*/ function getName() {}
    
    /*Integer*/ function getAge() {}
    
    /*boolean*/ function isInterested() {}
}