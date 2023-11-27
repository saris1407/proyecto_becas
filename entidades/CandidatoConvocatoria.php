
<?php
class CandidatoConvocatoria {
    private $idConv;
    private $DNI;

    public function getIdConv() {
        return $this->idConv;
    }

    public function setIdConv($idConv) {
        $this->idConv = $idConv;
    }

    public function getDNI() {
        return $this->DNI;
    }

    public function setDNI($DNI) {
        $this->DNI = $DNI;
    }

    public function __toString() {
        return "CandidatoConvocatoria{ID Convocatoria: $this->idConv, DNI Candidato: $this->DNI}";
    }
}
