<?php

namespace OpenprojectAPI\Service;

class KanbanService extends AbstractService
{
    /**
     * Returns all Kanban Board
     */
    public function all( $options = array() ) {
        return $this->client->request( 'api/v3/kanban_boards', 'get', $options );   
    }
    
    /**
    *  Returns one Kanban Board  
    */
    public function one( $project_id, $options = array() ) {
        return $this->client->request( 'api/v3/kanban_boards/'.$project_id.'', 'get', $options );   
    }
    
    /**
    *  Create Kanban Board  
    */
    public function create( $options = array() ) {
        return $this->client->request( 'api/v3/kanban_boards', 'post', $options );
    }
   
}