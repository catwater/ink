<?php
/**
 * Created by PhpStorm.
 * User: Cory
 * Date: 10/4/15
 * Time: 9:29 PM
 */
class Journal{
    public $customizable;
    public $feat1;
    public $feat2;
    public $feat3;
    public function __construct($customizable){
        $this->customizable = $customizable;
    }
    function addFeature1($feat){
        $this->feat1 = $feat;
    }
    function addFeature2($feat){
        $this->feat2 = $feat;
    }
    function addFeature3($feat){
        $this->feat3 = $feat;
    }
}
class OpenJournal extends Journal{
    public $customizable;
    public $feat1;
    public $feat2;
    public $feat3;
    public function __construct($customizable){
        super($customizable);
    }
    function addFeature1($feat){
        $this->feat1 = $feat;
    }
    function addFeature2($feat){
        $this->feat2 = $feat;
    }
    function addFeature3($feat){
        $this->feat3 = $feat;
    }
}
class ClosedJournal extends Journal{
    public $customizable;
    public $feat1;
    public $feat2;
    public $feat3;
    public function __construct($customizable){
        super($customizable);
    }
    function addFeature1($feat){
        $this->feat1 = $feat;
    }
    function addFeature2($feat){
        $this->feat2 = $feat;
    }
    function addFeature3($feat){
        $this->feat3 = $feat;
    }
}

?>