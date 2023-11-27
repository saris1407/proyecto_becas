<?php
class Destinatario {
    
    private $id;
    private $codigoGrupo;
    private $nombre;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getCodigoGrupo() {
        return $this->codigoGrupo;
    }

    public function setCodigoGrupo($codigoGrupo) {
        $this->codigoGrupo = $codigoGrupo;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function __toString() {
        return "Destinatario{ID: $this->id, Código Grupo: $this->codigoGrupo, Nombre: $this->nombre}";
    }
}
