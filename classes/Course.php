<?php

class Course {
    private string $name;
    private bool $status;

    public function __construct(string $name, bool $status) {
        $this->setName($name);
        $this->status = $status;
    }

    public function getName() {
        return $this->name;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setName($name) {
        if(!str_contains("A0", $name)) {
            return;
        } else {
            $this->name = $name;
        }
    }


}