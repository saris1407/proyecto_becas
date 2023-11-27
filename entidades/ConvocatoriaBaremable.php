<?php
class ConvocatoriaBaremable {
    private $idConvocatoria;
    private $idBaremo;
    private $maximo;
    private $requisito;

    public function getIdConvocatoria() {
        return $this->idConvocatoria;
    }

    public function setIdConvocatoria($idConvocatoria) {
        $this->idConvocatoria = $idConvocatoria;
    }

    public function getIdBaremo() {
        return $this->idBaremo;
    }

    public function setIdBaremo($idBaremo) {
        $this->idBaremo = $idBaremo;
    }

    public function getMaximo() {
        return $this->maximo;
    }

    public function setMaximo($maximo) {
        $this->maximo = $maximo;
    }

    public function getRequisito() {
        return $this->requisito;
    }

    public function setRequisito($requisito) {
        $this->requisito = $requisito;
    }

    public function __toString() {
        return "ConvocatoriaBaremable{ID Convocatoria: $this->idConvocatoria, ID Baremo: $this->idBaremo, Máximo: $this->maximo, Requisito: $this->requisito}";
    }
}
