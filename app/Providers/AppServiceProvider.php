<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /*Validator::extend('luhn', function ($attribute, $value, $parameters, $validator) {
            $value = str_replace(' ', '', $value); // حذف همه فاصله‌ها
            $length = strlen($value);
            $sum = 0;
            $parity = $length % 2;

            for ($i = 0; $i < $length; $i++) {
                $digit = (int) $value[$i];

                if ($i % 2 === $parity) {
                    $digit *= 2;

                    if ($digit > 9) {
                        $digit -= 9;
                    }
                }

                $sum += $digit;
            }

            return $sum % 10 === 0;
        });*/
    }
}
