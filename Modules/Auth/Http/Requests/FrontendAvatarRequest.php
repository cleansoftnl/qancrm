<?php
namespace Modules\Auth\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class FrontendAvatarRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'avatar' => 'required',
        ];
    }
}
