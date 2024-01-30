<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\User;
class UniqueEmailForUserType implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    protected $userType;

    public function __construct($userType)
    {
        $this->userType = $userType;
    }

    public function passes($attribute, $value)
    {
        // Check if there's already a user with the same email and user type
        return !User::where('email', $value)
            ->where('user_type', $this->userType)
            ->exists();
    }

    public function message()
    {
        return 'The email address has already been taken for this user type.';
    }
}
