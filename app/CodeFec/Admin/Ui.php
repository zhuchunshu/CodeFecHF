<?php
namespace App\Codefec\Admin;


class Ui {

    /**
     * 标题
     *
     * @var string
     */
    public $title="Home";

    /**
     * 页头右侧按钮数组
     *
     * @var array
     */
    public $headerBtn=[];

    /**
     * Body内容
     *
     */
    public $body="无内容";

    public function title($title){
        $this->title = $title;
        return $this;
    }

    public function body($body){
        $this->body = $body;
        return $this;
    }

    public function headerBtn(array $array){
        $this->headerBtn = $array;
        return $this;
    }

    public function render(){
        return view("admin.ui",['title'=>$this->title,"body" => $this->body,"headerBtn"=>$this->headerBtn]);
    }

}