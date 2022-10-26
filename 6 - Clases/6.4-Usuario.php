<?php

define("LONG_RACHA_CAMBIO_USUARIO", 6); //recomendado por Jorge para legibilidad de cambios en el futuro.

class Usuario {

    private static $niveles = [0,1,2,3,4,5,6];
   
    private $seguidas = 0;
    protected $paraSubir; //objetivo para subir

    protected $nombre;
    private $apellidos;
    private $deporte;
    private $nivel;
    private $partidos = [];


    public function __construct($nom,$ape,$dep){

        $this->nombre = $nom;
        $this->apellidos = $ape;
        $this->deporte = $dep;
        $this->nivel = self::$niveles[0];

        $this->paraSubir = LONG_RACHA_CAMBIO_USUARIO;

        echo ("<br><h3>Usuario $this->nombre creado.</h3><br><br>");
    }  

    public function modificarNivel($valor) {
        //si es + y el nivel no es el maximo ya
        if ($valor == "+" && $this->nivel != self::$niveles[array_key_last(self::$niveles)]) {
            $this->nivel++;
            $this->seguidas = 0;
            echo ("<br><span style='color:blue;font-weight:bold;'>$this->nombre sube a nivel $this->nivel</span><br><br>");
        }

        //si es - y el nivel no es el minimo ya
        if ($valor == "-" && $this->nivel != self::$niveles[0]) {
            $this->nivel--;
            $this->seguidas = 0;
            echo ("<br><span style='color:red;font-weight:bold;'>$this->nombre baja a nivel $this->nivel</span><br><br>");
        }
    }

    public function introducirResultado($vicDerr) {
        
        //appendo partido si valor ok.
        if ($vicDerr=="victoria"||"derrota"||"empate"){
            array_push($this->partidos,$vicDerr);
            echo ("Usuario $this->nombre acaba partido en $vicDerr <br>");

            //Voy acumulando seguidas.
            ($vicDerr == $this->partidos[array_key_last($this->partidos)])?$this->seguidas++:$this->seguidas=0;
        }

        //llego al max de victorias
        if ($this->seguidas == $this->paraSubir && $this->partidos[array_key_last($this->partidos)] == "victoria") {
            $this->modificarNivel("+");
        } else if ($this->seguidas == 6 && $this->partidos[array_key_last($this->partidos)] == "derrota") {
            $this->modificarNivel("-");
        } 
    }

    public function imprimirInformacion() {

        $victorias = 0;
        $derrotas = 0;
        $empates = 0;

        array_walk($this->partidos,function($val) use(&$victorias,&$derrotas,&$empates){
            switch ($val) {
                case "victoria":
                    $victorias++;
                    break;
                case "derrota":
                    $derrotas++;
                    break;
                default:
                $empates++;
            }
        });
        echo "
        <div style='font-family:Arial;background-color:lightblue;border: 1px solid;border-radius:25px;margin:5%;padding:5%'>
        <h1>$this->nombre $this->apellidos</h1>
        <h2>Jugador de $this->deporte nivel $this->nivel.</h2>
        <h3>$victorias Victorias - $derrotas Derrotas - $empates Empates</h3>
        Partidos:
            <ul>
                ";
                
                foreach ($this->partidos as $partido) {
                    echo "<li>$partido</li>";
                }
                
        echo "
            </ul>
        </div>
        ";
    }
}
