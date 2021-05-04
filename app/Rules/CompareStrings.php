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
        end";
        $this->value = $value;
        $lineError = $this->compare($this->dbvalue,$value);
        if (!$lineError) {
            $this->lineError = $lineError;
            return false;
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Es gab einen Fehler in Zeile' . $this->lineError;
    }

    function compare($dbvalue , $forminput) {
        $newdbvalue = array_values(array_filter(explode("\n", str_replace("\r", "", $dbvalue))));
        $newforminput = array_values(array_filter(explode("\n", str_replace("\r", "", $forminput))));
        // remove empty entrys
        foreach ($newforminput as $key => $value)
        {
            $valueWithoutSpace = strtolower(str_replace(' ', '', $value));
            $dbvalueWithoutSpace = strtolower(str_replace(' ', '', $newdbvalue[$key]));

            if (strcmp($valueWithoutSpace, $dbvalueWithoutSpace) !== 0) {
                return  $key;
            }
            return true;
        }
    }
}
