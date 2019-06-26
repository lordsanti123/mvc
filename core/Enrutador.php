<?php

    class Enrutador{

        public function cargar($ruta){

            switch ($ruta) {

                case 'listaralumnos';
                    include "controlador/Alumnos.php";
                    $alumno = new Alumnos;
                    $alumno->listar();
                    break;
                   
                    case 'listarcursos';
                    include "controlador/Cursos.php";
                    $curso = new Cursos;
                    $curso->listar();
                    break;

                default:
                    echo "No existe ese controlador";
                    break;



            }




        }










    }







?>