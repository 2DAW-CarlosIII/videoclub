<?php

namespace App\Policies;

use App\Models\Pelicula;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PeliculaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */

    public function before(User $user, $ability)
    {
        if ($user->esAdministrador() == 1) {
            return true;
        }
    }

    public function viewAny(User $user)
    {
        return true; // Todos los usuarios van a poder ver el listado de materias peliculas.
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pelicula  $pelicula
     * @return mixed
     */
    public function view(User $user, Pelicula $pelicula)
    {
        return true; // Todos los usuarios van a poder ver el listado de materias peliculas.
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->esProovedor() == 1;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pelicula  $pelicula
     * @return mixed
     */
    public function update(User $user)
    {

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pelicula  $pelicula
     * @return mixed
     */
    public function delete(User $user)
    {
        return $user->esProovedor() == 1;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pelicula  $pelicula
     * @return mixed
     */
    public function restore(User $user)
    {

    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pelicula  $pelicula
     * @return mixed
     */
    public function forceDelete(User $user)
    {

    }
}
