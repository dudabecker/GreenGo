<?php 

    class ZonaModel {

        private $idZona;
        private int $qntPlantas;

        public function setIdZona(int $idZona) {
            $this->idZona = $idZona;
        }

        public function getIdZona(): int {
            return $this->idZona;
        }

        public function setQntPlantas(string $qntPlantas){
            $this->qntPlantas = $qntPlantas;
        }

        public function getQntPlantas(){
            return $this->qntPlantas;
        }

    }