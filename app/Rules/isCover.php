<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class isCover implements Rule
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

    
        if (!empty($value)) {
           if (gettype($value) == 'string') {
               return true;
           }else{
               $ext = $value->extension();
               if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif' || $ext == 'svg') {
                   return true;
               }else{
                   return false;
               }
           }
        }

        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'El campo :attribute debe ser del tipo jpeg, png, jpg, gif o svg';
    }
}
