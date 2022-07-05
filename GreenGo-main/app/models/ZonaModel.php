<?php 

    class ZonaModel {

        private $id;
        private int $qntPlantas;

        public function setId(int $id) {
            $this->id = $id;
        }

        public function getId(): int {
            return $this->id;
        }

        public function setQntPlantas(string $qntPlantas){
            $this->qntPlantas = $qntPlantas;
        }

        public function getQntPlantas(){
            return $this->qntPlantas;
        }

    }