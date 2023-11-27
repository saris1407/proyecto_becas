<?php

class Convocatoria {
    private $id;
    private $movilidades;
    private $tipo;
    private $fechaInicio;
    private $fechaFin;
    private $fechaInicioPruebas;
    private $fechaFinPruebas;
    private $fechaInicioProvisional;
    private $fechaFinProvisional;
    private $codigoProyecto;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getMovilidades() {
        return $this->movilidades;
    }

    public function setMovilidades($movilidades) {
        $this->movilidades = $movilidades;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
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

    public function getFechaInicioPruebas() {
        return $this->fechaInicioPruebas;
    }

    public function setFechaInicioPruebas($fechaInicioPruebas) {
        $this->fechaInicioPruebas = $fechaInicioPruebas;
    }

    public function getFechaFinPruebas() {
        return $this->fechaFinPruebas;
    }

    public function setFechaFinPruebas($fechaFinPruebas) {
        $this->fechaFinPruebas = $fechaFinPruebas;
    }

    public function getFechaInicioProvisional() {
        return $this->fechaInicioProvisional;
    }

    public function setFechaInicioProvisional($fechaInicioProvisional) {
        $this->fechaInicioProvisional = $fechaInicioProvisional;
    }

    public function getFechaFinProvisional() {
        return $this->fechaFinProvisional;
    }

    public function setFechaFinProvisional($fechaFinProvisional) {
        $this->fechaFinProvisional = $fechaFinProvisional;
    }

    public function getCodigoProyecto() {
        return $this->codigoProyecto;
    }

    public function setCodigoProyecto($codigoProyecto) {
        $this->codigoProyecto = $codigoProyecto;
    }

    public function __toString() {
        return "Convocatoria{ID: $this->id, Tipo: $this->tipo, Movilidades: $this->movilidades, Fecha de Inicio: $this->fechaInicio, Fecha de Fin: $this->fechaFin}";
    }
}
