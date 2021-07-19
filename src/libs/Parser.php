<?php

namespace App\Libs;

class Parser
{
    protected $validators;

    protected $parsed = [];
    

    public function __construct($validators)
    {
        $this->validators = $validators;    
    }

    public function normalize($data)
    {
        foreach ($data as $key => $value)
        {
            $phoneArray = explode(' ', $value);

            $parsed[$key]['country'] = $this->country($value);
            $parsed[$key]['state'] = $this->state($value);
            $parsed[$key]['code'] = $this->code($value);
            $parsed[$key]['number'] = end($phoneArray);
        }

        return $parsed;
    }

    protected function country($value)
    {
        foreach ($this->validators as $key => $validator)
        {
            preg_match('/' . substr($validator['regex'], 0, 10) . '/', $value, $matches);
            
            if (sizeof($matches) > 0) {
                $country = $key;
            }
        }

        return $country;
    }

    protected function state($value)
    {
        $valid = "false";

        foreach ($this->validators as $key => $validator)
        {
            preg_match('/' . $validator['regex'] . '/', $value, $matches);
            
            if (sizeof($matches) > 0) {
                $valid = "true";
            }
        }

        return $valid;
    }

    protected function code($value)
    {
        foreach ($this->validators as $key => $validator)
        {
            preg_match('/' . substr($validator['regex'], 0, 10) . '/', $value, $matches);
            
            if (sizeof($matches) > 0) {
                $code = $validator['code'];
            }
        }

        return $code;
    }
}