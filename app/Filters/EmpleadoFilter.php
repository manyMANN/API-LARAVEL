<?php

namespace App\Filters;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class EmpleadoFilter extends ApiFilter
{
    protected $safeParams = [
        'id' => ['eq', 'lt', 'lte', 'gt', 'gte'],
        'nombre' => ['eq'],
        'fechanaci' => ['eq', 'lt', 'lte', 'gt', 'gte'],
        'correo' => ['eq'],
        'activo' => ['eq'],
        'id_departamento' => ['eq', 'lt', 'lte', 'gt', 'gte'],
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
