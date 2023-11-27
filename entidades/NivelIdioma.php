<?php
class NivelIdioma {
    private $id;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function __toString() {
        return "NivelIdioma{ID: $this->id}";
    }
}
