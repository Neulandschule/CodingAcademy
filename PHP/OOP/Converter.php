<?php

trait Converter {
    function gb2mb() {
        return $this->ram * 1024;
    }
}