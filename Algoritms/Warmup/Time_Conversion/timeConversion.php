<?php
function timeConversion($s) {
    return date('H:i:s', strtotime($s));
}