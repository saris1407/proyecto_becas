<?php

class Proyecto {
    private $codigo;
    private $nombre;
    private $fechaInicio;
    private $fechaFin;

    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getFechaInicio() {
        return $this->fechaInicio;
    }

    public function setFechaInicio($fechaInicio) {
        $this->fechaInicio = $fechaInicio;
    }

    public function getFechaFin() {
        return $this->fechaFin;
    }

    public function setFechaFin($fechaFin) {
        $this->fechaFin = $fechaFin;
    }

    public function __toString() {
        return "Proyecto{Código: $this->codigo, Nombre: $this->nombre, Fecha de Inicio: $this->fechaInicio, Fecha de Fin: $this->fechaFin}";
    }
}
