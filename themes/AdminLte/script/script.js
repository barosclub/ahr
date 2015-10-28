function DeathView(){
    $.ajax({ url:'index.php?r=indicat/death/index.php',
        success :function($data){
            $("#con").html($data);
        }
        
    }
            );
    
}
