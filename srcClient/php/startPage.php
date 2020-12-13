<?php
    
    function fillSobre(){
        
        $dsn = 'mysql:host=localhost;dbname=rodizeira_bdd';
        $user = 'root';
        $pass = '';
    
        $conn = new PDO($dsn, $user, $pass);
        
        $resID = $_GET["msg"];
        
        try{
            if(empty($resID)){
                $resID = 0;
            }

            $query = 'SELECT * 
                        FROM restaurant_info
                       WHERE restaurant_id = '.$resID;
                    
            $query_result = $conn->query($query);
            $result = $query_result->fetch(PDO::FETCH_OBJ);
            
            echo '<script> SetRestaurantInfo("'.$result->nome.'", "'.$result->logo.'", "'.$result->telefone.'", "'.$result->email.'", "'.$result->cep.'", "'.$result->estado.'", "'.$result->cidade.'", "'.$result->endereco.'"); </script>';
            
        }catch(PDOException $e){
            echo 'Erro: '.$e->getCode().' // Mensagem: '.$e->getMessage();
        }
    }
    
    function fillRodizio(){
        $dsn = 'mysql:host=localhost;dbname=rodizeira_bdd';
        $user = 'root';
        $pass = '';
    
        $conn = new PDO($dsn, $user, $pass);
        
        $resID = $_GET["msg"];
        
        try{
            if(empty($resID)){
                $resID = 0;
            }

            $query = 'SELECT * 
                        FROM rodizios
                       WHERE restaurant_id = '.$resID;
                    
            $query_result = $conn->query($query);
            $result_list = $query_result->fetchAll(PDO::FETCH_OBJ);
            
            foreach($result_list as $key => $value){
                echo '<script> CreateDivRodizio("'.$value->nome_rodizio.'", "'.$value->preco_rodizio.'", "'.$value->descricao_rodizio.'", "'.$value->etiquetas_rodizio.'"); </script>';
            }
            
        }catch(PDOException $e){
            echo 'Erro: '.$e->getCode().' // Mensagem: '.$e->getMessage();
        }
    }
    
    function fillCardapio(){

        $dsn = 'mysql:host=localhost;dbname=rodizeira_bdd';
        $user = 'root';
        $pass = '';
    
        $conn = new PDO($dsn, $user, $pass);
        
        $resID = $_GET["msg"];
        
        try{
            if(empty($resID)){
                $resID = 0;
            }

            $query = 'SELECT * 
                        FROM cardapios
                       WHERE restaurant_id = '.$resID;
                    
            $query_result = $conn->query($query);
            $result_list = $query_result->fetchAll(PDO::FETCH_OBJ);
            
            foreach($result_list as $key => $value){
                echo '<script> CreateDivItemCardapio("'.$value->nome.'", "'.$value->descricao.'", "'.$value->etiquetas.'", "'.$value->item_id.'"); </script>';
            }
            
        }catch(PDOException $e){
            echo 'Erro: '.$e->getCode().' // Mensagem: '.$e->getMessage();
        }
    }
?>