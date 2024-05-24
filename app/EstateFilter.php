<?php

namespace App;

class EstateFilter
{
    protected $builder;
    protected $request;
    public function __construct($builder,$request){
        $this->builder = $builder;
        $this->request = $request;
    }
    public function apply(){

        foreach ($this->filters() as $filter => $value){
           if(method_exists($this,$filter) && $value!=null && $value !="null"){
               $this->$filter($value);
           }

        }
        return $this->builder;
    }

    public function minSquare($value){
        $this->builder= $this->builder->where('square','>=',"$value");
    }
    public function maxSquare($value){
        $this->builder= $this->builder->where('square','<=',"$value");
    }
    public function minPrice($value){
        $this->builder= $this->builder->where('price','>=',"$value");
    }
    public function maxPrice($value){
        $this->builder= $this->builder->where('price','<=',"$value");
    }
    public function typeEstate($value){
        $this->builder= $this->builder->where('apartment','=',"$value");
    }
    public function rooms($value){
        $this->builder= $this->builder->where('rooms','=',"$value");
    }
    public function typeTransaction($value){
        $this->builder= $this->builder->where('buy','=',"$value");
    }

    public function filters(){
        return $this->request->all();
    }
}
