<?php

if (!function_exists('persianToEng')) {
    function toEngNumber($string)
    {
        $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        $arabic = ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];
        $english = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

        $output = str_replace($persian, $english, $string);
        $output = str_replace($arabic, $english, $output);

        return $output;
    }

}

if (! function_exists('luhn')) {
    function luhn($value)
    {
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
    }
}
