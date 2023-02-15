<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FotosGaleriaController extends Controller
{
    public function obtenerVistaFotos()
    {
         $fotos = [ 
            "https://www.gadzambiza.gob.ec/wp-content/uploads/2022/03/zam_03-800x531.jpg", 
            "https://www.gadzambiza.gob.ec/wp-content/uploads/2022/03/zam_11-800x531.jpg", 
            "https://www.gadzambiza.gob.ec/wp-content/uploads/2022/03/zam_06-800x531.jpg", 
            "https://www.gadzambiza.gob.ec/wp-content/uploads/2022/03/zam_05-800x531.jpg", 
            "https://www.gadzambiza.gob.ec/wp-content/uploads/2022/03/zam_08-800x531.jpg", 
            "https://www.gadzambiza.gob.ec/wp-content/uploads/2022/03/zam_09-rotated-800x1204.jpg", 
            "https://www.gadzambiza.gob.ec/wp-content/uploads/2022/03/zam_01-800x531.jpg", 
            "https://www.gadzambiza.gob.ec/wp-content/uploads/2022/03/zam_10-800x531.jpg", 
            "https://www.gadzambiza.gob.ec/wp-content/uploads/2022/08/20220801_110119-scaled-800x360.jpg", 
            "https://www.gadzambiza.gob.ec/wp-content/uploads/2022/03/zam_12-800x640.jpg", 
            "https://www.gadzambiza.gob.ec/wp-content/uploads/2022/03/zam_13-rotated-800x1204.jpg", 
            "https://www.gadzambiza.gob.ec/wp-content/uploads/2022/08/WhatsApp-Image-2022-08-05-at-9.04.12-AM-800x449.jpeg", 
            "https://www.gadzambiza.gob.ec/wp-content/uploads/2022/08/20220801_111411-scaled-800x360.jpg", 
            "https://www.gadzambiza.gob.ec/wp-content/uploads/2022/08/20220801_115155-scaled-800x360.jpg", 
            "https://www.gadzambiza.gob.ec/wp-content/uploads/2022/03/zam_02-rotated-800x1204.jpg", 
            "https://www.gadzambiza.gob.ec/wp-content/uploads/2022/03/zam_04-800x531.jpg", 
            "https://www.gadzambiza.gob.ec/wp-content/uploads/2022/03/zam_07-800x531.jpg" 
        ];
        return view('fotos_galeria.fotos_galeria',['fotos' => $fotos]);
    
    }
    
}

