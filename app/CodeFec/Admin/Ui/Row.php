<?php
namespace App\CodeFec\Admin\Ui;

class Row {

    public $row="col-md-12";

    public $content;
    
    public function row($row){
        $this->row = $row;
        return $this;
    }

    public function content($content){
        $this->content = $content;
        return $this;
    }

    public function render(){
        return view("admin.Ui.row",["row"=>$this->row,"content" => $this->content]);
    }

}