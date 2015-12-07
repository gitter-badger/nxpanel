<?php namespace App\Traits;

use App\Role;

trait UserHasRoles {
    /**
     * The roles that belong to the user.
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasRole($role) {

        //dd($role->intersect($this->roles)->count());

        if(is_string($role)) {
            return $this->roles->contains('name', $role);
        }

        return !! $role->intersect($this->roles)->count();
    }

    public function assignRole($role) {
        return $this->roles()->save(
            Roles::whereName($role)->firstOrFail()
        );
    }

}

