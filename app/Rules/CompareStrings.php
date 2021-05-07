<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CompareStrings implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public $value;
    public $dbvalue;
    public $lineError;
    public $compareValue;

    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $this->dbvalue = "Sub HelloWorld()
        end sub";
        $this->value = $value;
/*        dd($this->dbvalue,$this->value);*/
        $compareValue = $this->compare($this->dbvalue,$value);
        if ($compareValue) {
            return true;
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
        return 'Es gab einen Fehler in Zeile ' . $this->lineError + 1;
    }

    function compare($dbvalue , $forminput) {
        $newdbvalue = array_values(array_filter(explode("\n", str_replace("\r", "", $dbvalue))));
        $newforminput = array_values(array_filter(explode("\n", str_replace("\r", "", $forminput))));
        // remove empty entrys
        /*dd($newdbvalue,$newforminput);*/
        foreach ($newdbvalue as $key => $value)
        {
            $valueWithoutSpace = strtolower(str_replace(' ', '', $value));
            $dbvalueWithoutSpace = strtolower(str_replace(' ', '', $newforminput[$key]));
            if (strcmp($valueWithoutSpace, $dbvalueWithoutSpace) !== 0) {
                $this->lineError =$key;
                return false;
            }
        }
        return true;
    }
}
