<?php

class main {

        public function generateCode() {
            $segment1 = $this->randomNumber(3);
            $segment2 = $this->randomNumber(3);
            $segment3 = $this->randomNumber(3);
            return $segment1 . '-' . $segment2 . '-' . $segment3;
        }
        public function randomNumber($n) {
            $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $randomString = '';
            for ($i = 0; $i < $n; $i++) {
                $index = rand(0, strlen($characters) - 1);
                $randomString .= $characters[$index];
            }
            return $randomString;
        }
    
}