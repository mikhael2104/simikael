<?php

namespace App\Policies;

use App\Models\AjuanPkl;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class AjuanPklPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        if($user->hasAnyRole(['admin','guru', 'siswa']))
            return true;
        else
            return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, AjuanPkl $ajuanPkl): bool
    {
        if($user->hasAnyRole(['admin','guru', 'siswa']))
            return true;
        else
            return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        if($user->hasAnyRole(['admin','guru', 'siswa']))
            return true;
        else
            return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, AjuanPkl $ajuanPkl): bool
    {
        if($user->hasAnyRole(['admin','guru', 'siswa']))
            return true;
        else
            return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, AjuanPkl $ajuanPkl): bool
    {
        if($user->hasAnyRole(['admin','guru', 'siswa']))
            return true;
        else
            return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, AjuanPkl $ajuanPkl): bool
    {
        if($user->hasAnyRole(['admin','guru', 'siswa']))
            return true;
        else
            return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, AjuanPkl $ajuanPkl): bool
    {
        if($user->hasAnyRole(['admin','guru', 'siswa']))
            return true;
        else
            return false;
    }
}
