<?php
class Baremacion {
    private $dni;
    private $idConvocatoria;
    private $idItem;
    private $nota;
    private $url;

    public function getDni() {
        return $this->dni;
    }

    public function setDni($dni) {
        $this->dni = $dni;
    }

    public function getIdConvocatoria() {
        return $this->idConvocatoria;
    }

    public function setIdConvocatoria($idConvocatoria) {
        $this->idConvocatoria = $idConvocatoria;
    }

    public function getIdItem() {
        return $this->idItem;
    }

    public function setIdItem($idItem) {
        $this->idItem = $idItem;
    }

    public function getNota() {
        return $this->nota;
    }

    public function setNota($nota) {
        $this->nota = $nota;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public function __toString() {
        return "Baremacion{DNI: $this->dni, ID Convocatoria: $this->idConvocatoria, ID Item: $this->idItem, Nota: $this->nota, URL: $this->url}";
    }
}
