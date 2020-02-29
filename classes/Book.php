<?php

class Book {

    private $id;
    private $title;
    private $resume;
    private $price;
    private $cover;
    private $category;
    private $authors = [];

    public function __construct(string $title, string $resume, $cover, $price, Category $category, $id=''){

        $this->title = $title;
        $this->resume = $resume;
        $this->cover = $cover;
        $this->price = $price;
        $this->category = $category;
        $this->id = $id;

    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getResume(){
        return $this->resume;
    }

    public function setResume(string $resume) {
        $this->resume = $resume;
    }

    public function getCover(){
        return $this->cover;
    }

    public function setCover(string $cover){
        $this->cover = $cover;
    }

    public function getAuthors(){
        return $this->authors;
    }

    public function setAuthors(Author $author){
        $this->authors[] = $authors;
    }
 
    public function getPrice(){
        return $this->price;
    }

    public function setPrice(string $price){
        $this->price = $price;
    }

    public function getCategory(){
        return $this->category;
    }
 
    public function setCategory(Category $category){
        $this->category = $category;
    }


    public function getId(){
        return $this->id;
    }


    public function setId($id){
        $this->id = $id;
    }
}
