<?php
class DestinatarioConvocatoria {
    private $idConvocatoria;
    private $idDestinatario;

    public function getIdConvocatoria() {
        return $this->idConvocatoria;
    }

    public function setIdConvocatoria($idConvocatoria) {
        $this->idConvocatoria = $idConvocatoria;
    }

    public function getIdDestinatario() {
        return $this->idDestinatario;
    }

    public function setIdDestinatario($idDestinatario) {
        $this->idDestinatario = $idDestinatario;
    }

    public function __toString() {
        return "DestinatarioConvocatoria{ID Convocatoria: $this->idConvocatoria, ID Destinatario: $this->idDestinatario}";
    }
}
