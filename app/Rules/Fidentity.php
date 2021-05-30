<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Passport;

class Fidentity implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $data = Passport::where('passport',$value)->get();
        if(!empty($data) && empty($data->user_id)){
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Already has account with this PAssport.';
    }
}
