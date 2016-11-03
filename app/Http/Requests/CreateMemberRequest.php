<?php namespace App\Http\Requests;

class CreateMemberRequest extends Request {

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
        return [
            'name' => 'required|unique:members',
            'age' => 'required|numeric|unique:members',
            'phone_number' => 'max:255|required|regex:/^\d{11,14}(,\d{11,14})*$/|unique:members',

        ];
    }

}
