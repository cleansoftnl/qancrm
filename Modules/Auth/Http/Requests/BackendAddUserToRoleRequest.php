<?php
namespace Cms\Modules\Auth\Http\Requests;

use Cms\Http\Requests\Request;

class BackendAddUserToRoleRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $tblPrefix = config('cms.auth.table-prefix', 'auth_');
        return [
            'username' => 'required|exists:' . $tblPrefix . 'users,username',
        ];
    }
}
