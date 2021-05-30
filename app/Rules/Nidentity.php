<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\NidCard;

class Nidentity implements Rule
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
        $data = NidCard::where('nid',$value)->first();
        if(!empty($data) && $data->user_id == null ){
            
            return true;
        }
        
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Already has account with this NID.';
    }
}
