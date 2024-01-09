<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class LuhnValidationRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $cardNumber = toEngNumber($value);
        if (!luhn($cardNumber) || !is_numeric($cardNumber) || $cardNumber == 0) {
            $fail('شماره کارت وارد شده نامعتبر می‌باشد.');
        }
    }
}
