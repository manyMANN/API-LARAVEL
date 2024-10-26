<?php

namespace App\Filters;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class DepartamentoFilter extends ApiFilter
{
    protected $safeParams = [
        'id' => ['eq', 'lt', 'lte', 'gt', 'gte'],
        'nombre' => ['eq'],
        'activo' => ['eq'],
    ];
    protected $columnMap = [];
    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'ne' => '!=',
    ];
}
