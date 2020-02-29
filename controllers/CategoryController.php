<?php 

    class CategoryController{

        public static function getCategories(){

            $conection = Database::connect();
    
            $query = $conection->prepare('SELECT * FROM categories');
    
            $query->execute();
    
            $categories = $query->fetchAll(PDO::FETCH_ASSOC);
    
            return $categories;
    
        }

    }

?>