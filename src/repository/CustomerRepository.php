<?php

namespace App\Repository;

class CustomerRepository
{
    public static function filter($data, $filters = null)
    {
        $filtered = $data;
        
        foreach($filters as $key => $filter)
        {
            if (sizeof($filter) > 0) {
                $filtered = array_filter($filtered, function($v, $k) use ($key, $filter) {
                    return $v[$key] == $filter;
                }, ARRAY_FILTER_USE_BOTH);
            }
        }

        return $filtered;
    }
}
