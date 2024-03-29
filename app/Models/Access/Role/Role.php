<?php

namespace App\Models\Access\Role;

use Illuminate\Database\Eloquent\Model;
use App\Models\Access\Role\Traits\RoleAccess;
use App\Models\Access\Role\Traits\Scope\RoleScope;
use App\Models\Access\Role\Traits\Attribute\RoleAttribute;
use App\Models\Access\Role\Traits\Relationship\RoleRelationship;

/**
 * Class Role
 * @package App\Models\Access\Role
 */
class Role extends Model
{
    use RoleScope,
		RoleAccess,
		RoleAttribute,
		RoleRelationship;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table;
    protected $primaryKey = 'role_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'all', 'sort','allow_registration'];

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config('access.roles_table');
    }

    public static function roleList()
    {
        return Role::pluck('name', 'role_id');
    }
}
