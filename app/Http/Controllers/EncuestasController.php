<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\respuestas2;
use App\Models\Egresado;
use App\Models\Carrera;
use Illuminate\Support\Facades\Auth;
use File;
class EncuestasController extends Controller
{
   
    public function completar_cuenta($cuenta){

    }
    public function show($id){

        if(strlen(strval($id))<9){
            $cuenta='0'.strval($id);
        }else{
            $cuenta=strval($id);
        }
        
        $Encuesta=respuestas2::where('cuenta','=',$cuenta)->first();
        if(!$Encuesta){
            $Egresado=Egresado::where('cuenta',(int)$cuenta)->first();
            $Encuesta= new respuestas2();
            $Encuesta->cuenta=$cuenta;
            $Encuesta->nombre=$Egresado->nombre;
            $Encuesta->paterno=$Egresado->paterno;
            $Encuesta->materno=$Egresado->materno;
            $Encuesta->nombre=$Egresado->nombre;
            $Encuesta->nombre=$Egresado->nombre;
            $Encuesta->nbr3=$Egresado->carrera;
            $Encuesta->nbr3=$Egresado->plantel;
            $Encuesta->save();
            
        }
        $Egresado=Egresado::where('cuenta','=',$id)->first();
        $Carrera=Carrera::where('clave_carrera','=',$Egresado->carrera)->first()->carrera;
        $Plantel=Carrera::where('clave_plantel','=',$Egresado->plantel)->first()->plantel;
        return view('encuesta.show',compact('Encuesta','Egresado','Carrera','Plantel'));
}
public function edit($id){
    
    
    $Encuesta=respuestas2::where('registro','=',$id)->first();
    if(!$Encuesta){
        $Encuesta= new respuestas2();
    }
    $Egresado=Egresado::where('cuenta','=',$Encuesta->cuenta)->first();
    $Carrera=Carrera::where('clave_carrera','=',$Egresado->carrera)->first()->carrera;
    $Plantel=Carrera::where('clave_plantel','=',$Egresado->plantel)->first()->plantel;
    return view('encuesta.show',compact('Encuesta','Egresado','Carrera','Plantel'));

}
public function create(){

}
public function store( Request $request){




}
public function update2(Request $request,$id){
    
$Encuesta=respuestas2::where('registro',$id)->first();
$fileName = time().$Encuesta->cuenta.'.json';
$fileStorePath = public_path('storage/'.$fileName);
File::put($fileStorePath, json_encode($request->all()));

$Encuesta-> aplica  = Auth::user()->clave;
$Encuesta-> fec_capt  = now() ;
$Encuesta-> telcasa  = $request-> telcasa ;
$Encuesta-> TELCEL  = $request-> TELCEL ;
$Encuesta-> teltra  = $request-> teltra ;
$Encuesta-> exttra  = $request-> exttra ;
$Encuesta-> dianac  = substr($request->fechaNac,-2);
$Encuesta-> mesnac  = substr($request->fechaNac,5,-3);
$Encuesta-> yernac  = substr($request->fechaNac,0,4);
$Encuesta-> nar1  = $request-> nar1 ;
$Encuesta-> nar1_a  = $request-> nar1_a ;
$Encuesta-> nar2a  = $request-> nar2a ;
$Encuesta-> nar3a  = $request-> nar3a ;
$Encuesta-> nar4a  = $request-> nar4a ;
$Encuesta-> nar5a  = $request-> nar5a ;
$Encuesta-> nar7  = $request-> nar7 ;
$Encuesta-> nar8  = $request-> nar8 ;
$Encuesta-> nar9  = $request-> nar9 ;
$Encuesta-> nar10  = $request-> nar10 ;
$Encuesta-> nar11  = $request-> nar11 ;
$Encuesta-> nar11a  = $request-> nar11a ;
$Encuesta-> nar12  = $request-> nar12 ;
$Encuesta-> nar12a  = $request-> nar12a ;
$Encuesta-> nar13  = $request-> nar13 ;
$Encuesta-> nar13a  = $request-> nar13a ;
$Encuesta-> nar14  = $request-> nar14 ;
$Encuesta-> nar14otra  = $request-> nar14otra ;
$Encuesta-> nar15  = $request-> nar15 ;
$Encuesta-> nar15otra  = $request-> nar15otra ;
$Encuesta-> nar16  = $request-> nar16 ;
$Encuesta-> nar16otra  = $request-> nar16otra ;
$Encuesta-> nbr1  = $request-> nbr1 ;
$Encuesta-> nbr2  = $request-> nbr2 ;
$Encuesta-> nbr3  = $request-> nbr3 ;
$Encuesta-> nbr3_a  = $request-> nbr3_a ;
$Encuesta-> nbr6  = $request-> nbr6 ;
$Encuesta-> nbr7  = $request-> nbr7 ;
$Encuesta-> nbr8  = $request-> nbr8 ;
$Encuesta-> ncr1  = $request-> ncr1 ;
$Encuesta-> ncr2  = $request-> ncr2 ;
$Encuesta-> ncr2a  = $request-> ncr2a ;
$Encuesta-> ncr3  = $request-> ncr3 ;
$Encuesta-> ncr4  = $request-> ncr4 ;
$Encuesta-> ncr4otra  = $request-> ncr4otra ;
$Encuesta-> ncr5  = $request-> ncr5 ;
$Encuesta-> ncr6  = $request-> ncr6 ;
$Encuesta-> ncr6_a  = $request-> ncr6_a ;
$Encuesta-> ncr7_a  = $request-> ncr7_a ;
$Encuesta-> ncr7b  = $request-> ncr7b ;
$Encuesta-> ncr8  = $request-> ncr8 ;
$Encuesta-> ncr9  = $request-> ncr9 ;
$Encuesta-> ncr10  = $request-> ncr10 ;
$Encuesta-> ncr11  = $request-> ncr11 ;
$Encuesta-> ncr12_a  = $request-> ncr12_a ;
$Encuesta-> ncr15  = $request-> ncr15 ;
$Encuesta-> ncr16  = $request-> ncr16 ;
$Encuesta-> ncr17  = $request-> ncr17 ;
$Encuesta-> ncr18  = $request-> ncr18 ;
$Encuesta-> ncr19  = $request-> ncr19 ;
$Encuesta-> ncr20  = $request-> ncr20 ;
$Encuesta-> ncr21  = $request-> ncr21 ;
$Encuesta-> ncr21_a  = $request-> ncr21_a ;
$Encuesta-> ncr21b  = $request-> ncr21b ;
$Encuesta-> ncr22  = $request-> ncr22 ;
$Encuesta-> ncr23  = $request-> ncr23 ;
$Encuesta-> ncr24  = $request-> ncr24 ;
$Encuesta-> ncr24porque  = $request-> ncr24porque ;
$Encuesta-> ncr24_a  = $request-> ncr24_a ;
$Encuesta-> ndr1  = $request-> ndr1 ;
$Encuesta-> ndr2  = $request-> ndr2 ;
$Encuesta-> ndr2_a  = $request-> ndr2_a ;
$Encuesta-> ndr3  = $request-> ndr3 ;
$Encuesta-> ndr4  = $request-> ndr4 ;
$Encuesta-> ndr5  = $request-> ndr5 ;
$Encuesta-> ndr6  = $request-> ndr6 ;
$Encuesta-> ndr9  = $request-> ndr9 ;
$Encuesta-> ndr7  = $request-> ndr7 ;
$Encuesta-> ndr8  = $request-> ndr8 ;
$Encuesta-> ndr10  = $request-> ndr10 ;
$Encuesta-> ndr11  = $request-> ndr11 ;
$Encuesta-> ndr12  = $request-> ndr12 ;
$Encuesta-> NDR12A  = $request-> NDR12A ;
$Encuesta-> NDR12B  = $request-> NDR12B ;
$Encuesta-> NDR12C  = $request-> NDR12C ;
$Encuesta-> ndr13a  = $request-> ndr13a ;
$Encuesta-> ndr14  = $request-> ndr14 ;
$Encuesta-> ndr15  = $request-> ndr15 ;
$Encuesta-> ndr16  = $request-> ndr16 ;
$Encuesta-> ndr17  = $request-> ndr17 ;
$Encuesta-> ndr18  = $request-> ndr18 ;
$Encuesta-> ndr19  = $request-> ndr19 ;
$Encuesta-> ner1  = $request-> ner1 ;
$Encuesta-> NER1A  = $request-> NER1A ;
$Encuesta-> ner2  = $request-> ner2 ;
$Encuesta-> ner3  = $request-> ner3 ;
$Encuesta-> ner4  = $request-> ner4 ;
$Encuesta-> ner5  = $request-> ner5 ;
$Encuesta-> ner6  = $request-> ner6 ;
$Encuesta-> ner7  = $request-> ner7 ;
$Encuesta-> ner7_a  = $request-> ner7_a ;
$Encuesta-> ner7int  = $request-> ner7int ;
$Encuesta-> ner8  = $request-> ner8 ;
$Encuesta-> ner9  = $request-> ner9 ;
$Encuesta-> ner10  = $request-> ner10 ;
$Encuesta-> ner10a  = $request-> ner10a ;
$Encuesta-> ner11  = $request-> ner11 ;
$Encuesta-> ner12  = $request-> ner12 ;
$Encuesta-> ner12a  = $request-> ner12a ;
$Encuesta-> ner12b  = $request-> ner12b ;
$Encuesta-> ner13  = $request-> ner13 ;
$Encuesta-> ner14  = $request-> ner14 ;
$Encuesta-> ner15  = $request-> ner15 ;
$Encuesta-> ner16  = $request-> ner16 ;
$Encuesta-> ner17  = $request-> ner17 ;
$Encuesta-> ner18  = $request-> ner18 ;
$Encuesta-> ner19  = $request-> ner19 ;
$Encuesta-> ner19a  = $request-> ner19a ;
$Encuesta-> ner20  = $request-> ner20 ;
$Encuesta-> ner20txt  = $request-> ner20txt ;
$Encuesta-> ner20a  = $request-> ner20a ;
$Encuesta-> nfr0  = $request-> nfr0 ;
$Encuesta-> nfr1  = $request-> nfr1 ;
$Encuesta-> nfr1a  = $request-> nfr1a ;
$Encuesta-> nfr2  = $request-> nfr2 ;
$Encuesta-> nfr3  = $request-> nfr3 ;
$Encuesta-> nfr7  = $request-> nfr7 ;
$Encuesta-> nfr4  = $request-> nfr4 ;
$Encuesta-> nfr4_a  = $request-> nfr4_a ;
$Encuesta-> nfr5  = $request-> nfr5 ;
$Encuesta-> nfr5_a  = $request-> nfr5_a ;
$Encuesta-> nfr6  = $request-> nfr6 ;
$Encuesta-> nfr6_a  = $request-> nfr6_a ;
$Encuesta-> nfr8  = $request-> nfr8 ;
$Encuesta-> nfr9  = $request-> nfr9 ;
$Encuesta-> nfr10  = $request-> nfr10 ;
$Encuesta-> nfr11  = $request-> nfr11 ;
$Encuesta-> nfr11a  = $request-> nfr11a ;
$Encuesta-> nfr12  = $request-> nfr12 ;
$Encuesta-> nfr13  = $request-> nfr13 ;
$Encuesta-> nfr22  = $request-> nfr22 ;
$Encuesta-> nfr23  = $request-> nfr23 ;
$Encuesta-> nfr24  = $request-> nfr24 ;
$Encuesta-> nfr25  = $request-> nfr25 ;
$Encuesta-> nfr26  = $request-> nfr26 ;
$Encuesta-> nfr27  = $request-> nfr27 ;
$Encuesta-> nfr28  = $request-> nfr28 ;
$Encuesta-> nfr29  = $request-> nfr29 ;
$Encuesta-> nfr29a  = $request-> nfr29a ;
$Encuesta-> nfr30  = $request-> nfr30 ;
$Encuesta-> nfr31  = $request-> nfr31 ;
$Encuesta-> nfr32  = $request-> nfr32 ;
$Encuesta-> nfr33  = $request-> nfr33 ;
$Encuesta-> ngr1  = $request-> ngr1 ;
$Encuesta-> ngr2  = $request-> ngr2 ;
$Encuesta-> ngr3  = $request-> ngr3 ;
$Encuesta-> ngr3b  = $request-> ngr3b ;
$Encuesta-> ngr3c  = $request-> ngr3c ;
$Encuesta-> ngr3d  = $request-> ngr3d ;
$Encuesta-> ngr3e  = $request-> ngr3e ;
$Encuesta-> ngr4  = $request-> ngr4 ;
$Encuesta-> ngr5  = $request-> ngr5 ;
$Encuesta-> ngr6  = $request-> ngr6 ;
$Encuesta-> ngr6a  = $request-> ngr6a ;
$Encuesta-> ngr6b  = $request-> ngr6b ;
$Encuesta-> ngr6c  = $request-> ngr6c ;
$Encuesta-> ngr6d  = $request-> ngr6d ;
$Encuesta-> ngr6e  = $request-> ngr6e ;
$Encuesta-> ngr6f  = $request-> ngr6f ;
$Encuesta-> ngr6g  = $request-> ngr6g ;
$Encuesta-> ngr6_t  = $request-> ngr6_t ;
$Encuesta-> ngr7a  = $request-> ngr7a ;
$Encuesta-> ngr7b  = $request-> ngr7b ;
$Encuesta-> ngr7c  = $request-> ngr7c ;
$Encuesta-> ngr7d  = $request-> ngr7d ;
$Encuesta-> ngr7e  = $request-> ngr7e ;
$Encuesta-> ngr7f  = $request-> ngr7f ;
$Encuesta-> ngr7g  = $request-> ngr7g ;
$Encuesta-> ngr8  = $request-> ngr8 ;
$Encuesta-> ngr9a  = $request-> ngr9a ;
$Encuesta-> ngr9b  = $request-> ngr9b ;
$Encuesta-> ngr9c  = $request-> ngr9c ;
$Encuesta-> ngr9d  = $request-> ngr9d ;
$Encuesta-> ngr9e  = $request-> ngr9e ;
$Encuesta-> ngr11a  = $request-> ngr11a ;
$Encuesta-> ngr11  = $request-> ngr11 ;
$Encuesta-> ngr11_a  = $request-> ngr11_a ;
$Encuesta-> ngr13  = $request-> ngr13 ;
$Encuesta-> ngr13b  = $request-> ngr13b ;
$Encuesta-> ngr13c  = $request-> ngr13c ;
$Encuesta-> ngr13d  = $request-> ngr13d ;
$Encuesta-> ngr13e  = $request-> ngr13e ;
$Encuesta-> ngr14  = $request-> ngr14 ;
$Encuesta-> ngr15  = $request-> ngr15 ;
$Encuesta-> ngr16  = $request-> ngr16 ;
$Encuesta-> ngr17  = $request-> ngr17 ;
$Encuesta-> ngr18  = $request-> ngr18 ;
$Encuesta-> ngr19  = $request-> ngr19 ;
$Encuesta-> ngr20  = $request-> ngr20 ;
$Encuesta-> ngr21  = $request-> ngr21 ;
$Encuesta-> ngr22  = $request-> ngr22 ;
$Encuesta-> ngr23  = $request-> ngr23 ;
$Encuesta-> ngr24  = $request-> ngr24 ;
$Encuesta-> ngr25  = $request-> ngr25 ;
$Encuesta-> ngr26  = $request-> ngr26 ;
$Encuesta-> ngr27  = $request-> ngr27 ;
$Encuesta-> ngr28  = $request-> ngr28 ;
$Encuesta-> ngr29  = $request-> ngr29 ;
$Encuesta-> ngr30  = $request-> ngr30 ;
$Encuesta-> ngr31  = $request-> ngr31 ;
$Encuesta-> ngr32  = $request-> ngr32 ;
$Encuesta-> ngr33  = $request-> ngr33 ;
$Encuesta-> ngr34  = $request-> ngr34 ;
$Encuesta-> ngr35  = $request-> ngr35 ;
$Encuesta-> ngr36  = $request-> ngr36 ;
$Encuesta-> ngr37  = $request-> ngr37 ;
$Encuesta-> ngr37m  = $request-> ngr37m ;
$Encuesta-> ngr37_a  = $request-> ngr37_a ;
$Encuesta-> ngr38  = $request-> ngr38 ;
$Encuesta-> ngr39  = $request-> ngr39 ;
$Encuesta-> ngr40  = $request-> ngr40 ;
$Encuesta-> ngr40a  = $request-> ngr40a ;
$Encuesta-> ngr40_a  = $request-> ngr40_a ;
$Encuesta-> ngr40_b  = $request-> ngr40_b ;
$Encuesta-> ngr41  = $request-> ngr41 ;
$Encuesta-> ngr42  = $request-> ngr42 ;
$Encuesta-> ngr43  = $request-> ngr43 ;
$Encuesta-> ngr44  = $request-> ngr44 ;
$Encuesta-> ngr45  = $request-> ngr45 ;
$Encuesta-> ngr45_a  = $request-> ngr45_a ;
$Encuesta-> ngr45otra  = $request-> ngr45otra ;
$Encuesta-> CONOCE  = $request-> CONOCE ;
$Encuesta-> CUE_CRE  = $request-> CUE_CRE ;
$Encuesta-> UTILIZA  = $request-> UTILIZA ;
$Encuesta-> nrx  = $request-> nrx ;
$Encuesta-> nrxx  = $request-> nrxx ;
$Encuesta-> ngr11b  = $request-> ngr11b ;
$Encuesta-> ngr11c  = $request-> ngr11c ;
$Encuesta-> ngr11d  = $request-> ngr11d ;
$Encuesta-> ngr11e  = $request-> ngr11e ;
$Encuesta-> ngr11f  = $request-> ngr11f ;
// dd(strlen((str)$request->ngr11f));
$Encuesta->save();
$fileName = now().$Encuesta->cuenta.'.json';
$fileStorePath = public_path('storage/json/'.$fileName);

File::put($fileStorePath, json_encode($request->all()));

return response()->download($fileStorePath);
return response()->json($request->all());
return redirect()->route('encuestas.show',);

}
}
