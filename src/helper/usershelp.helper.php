<?php

class UsersHelp
{

    public static function getStatusName($status_id)
    {
        if ($status_id == 1) {
            return "Ativado";
        }

        if ($status_id == 2) {
            return "Atrasado";
        }

        if ($status_id == 3) {
            return "Inativo";
        }
    }

    public static function getAdminName($admin_id)
    {
        if ($admin_id == 0) {
            return "Condômino";
        }

        if ($admin_id == 1) {
            return "Administrador";
        }
    }
}
