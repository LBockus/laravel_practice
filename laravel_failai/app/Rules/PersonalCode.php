<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PersonalCode implements Rule
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
        if(strlen($value) === 11)                   // Tikrinimas ar ivestas teisingas kiekis skaiciu
        {
            return $this->checkDate($value);        // Tikrinama ar tokia gimimo data egzistuoja
        }
        else {
            return false;
        }
    }

    private function checkDate($value)
    {
        $century = $this->whichCentury($value);                                        // Gaunama kuriame amziuje gime zmogus
        $birthDate = $this->getBirthDate($century, $value);                            // Gaunama gimimo data
        $dateIntervalStart = date_create("1900-1-1");                          // Nustatoma 20 amziaus pradzia
        $dateIntervalEnd = now();                                                      // Data iki kurios tikrinama gimimo data
        return ($birthDate > $dateIntervalStart && $birthDate < $dateIntervalEnd);     // Tikrinama ar zmogaus gimimo data ieina i intervala
    }

    //--------------------------Gaunama kuriame amziuje zmogus gime is jo asmens kodo------------------------//
    private function whichCentury($value)
    {
        if((floor($value / 10000000000) == 3) || (floor($value / 10000000000) == 4))
        {
            return 1900;
        }
        else if((floor($value / 10000000000) == 5) || (floor($value / 10000000000) == 6))
        {
            return 2000;
        }
        else
        {
            return false;
        }
    }

    private function getBirthDate($century, $value)
    {
        $year = $century + (floor($value / 100000000) % 100);           // Gaunami zmogaus gimimo metai

        $monthVar = (floor($value / 1000000) % 100);                    // Gaunami menesio ir dienos kintamieji tikrinimui
        $dayVar = floor($value / 10000) % 100;

        switch($monthVar) {                                               // Tikriname kiek tas menuo turi dienu
            case 1 || 3 || 5 || 7 || 8 || 10 || 12:
                $monthLength = 31;
                break;
            case 4 || 6 || 9 || 11:
                $monthLength = 30;
                break;
            case 2:
                if ($year % 4 === 0){ $monthLength = 29; }          // Vasario menesio tikrinimas su keliamaisiais metais
                else { $monthLength = 28; }
                break;
            default:
                $monthLength = 0;
                break;
        }

        if(($monthVar > 0 && $monthVar < 12) && ($dayVar > 0 && $dayVar < $monthLength)) // Tikrinama ar data ivesta teisingai
        {
            $month = $monthVar;
            $day = $dayVar;
        }
        else{
            return false;
        }
        $birthDate = date_create();                     // Sukuriama gimimo data velesniam tikrinimui
        date_date_set($birthDate,$year,$month,$day);
        return $birthDate;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Netinkamas asmens kodo formatas.';
    }
}
