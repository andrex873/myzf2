<?php
namespace Helloworld\Service;

class LoginService {
    
    public function getMetodo() {
        
        if(date('H')<8)
            return "antes de las 11";
        else if (date('H')>=8 && date('H')<18)
            return "es la tarde";
        else if (date('H')>18)
            return "es noche";
        else 
            return "No entro por ninguno: " . date('H');
    }

}