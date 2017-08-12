<?php
namespace Cms\Modules\Auth\Models;
class Permission extends BaseModel
{
    protected $table = 'permissions';
    protected $fillable = ['id', 'type', 'action', 'resource_type', 'resource_id', 'readable_name'];

    public function roles()
    {
        return $this->belongsToMany(__NAMESPACE__ . '\Role', 'auth_permission_role');
    }

    public function users()
    {
        return $this->morphedByMany(config('cms.auth.config.user_model'), 'caller', 'auth_permissionables');
    }
}
