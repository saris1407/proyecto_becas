<?php
class ConvocatioBaremableIdioma {
    
    private $idConvocatoria;
    private $idNivel;

    public function getIdConvocatoria() {
        return $this->idConvocatoria;
    }

    public function setIdConvocatoria($idConvocatoria) {
        $this->idConvocatoria = $idConvocatoria;
    }

    public function getIdNivel() {
        return $this->idNivel;
    }

    public function setIdNivel($idNivel) {
        $this->idNivel = $idNivel;
    }

    public function __toString() {
        return "ConvocatioBaremableIdioma{ID Convocatoria: $this->idConvocatoria, ID Nivel: $this->idNivel}";
    }
}
