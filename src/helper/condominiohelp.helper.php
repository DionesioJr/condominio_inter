<?php

class CondominioHelp
{

    public static function getStatusName($status_id)
    {
        if ($status_id == 1) {
            return "Ativo";
        }

        if ($status_id == 2) {
            return "Inativo";
        }
    }
}
