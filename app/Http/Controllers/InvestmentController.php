<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    public function index()
    {
        $plan = 1000;
        $increment = $plan;
        $investement = $plan;
        $reinvestment = $plan;
        $weeks_reinvestem = 4;
        $fee = 0.825;
        $weeks = 52;
        $start = Carbon::create(2019, 5, 24, 0, 0, 0, 'America/Caracas');
        $html = "<table border='1'>
            <tr>
                <th>Week</th>
                <th>Fecha</th>
                <th>Inversion</th>
                <th>Limite</th>
                <th>Porcentaje</th>
                <th>Ganancia</th>
                <th>Ganancia Acumulada</th>
                <th>Retiro</th>
                <th>Acumulado</th>
                <th>Dinero</th>
            </tr>";
        $acum = 0;
        $profit_acum = 0;
        for ($i=0; $i < $weeks; $i++) {
            $limit = $investement * 2;
            //$percent = 0.11715;
            $percent = rand(800, 1500)/10000;
            $profit = $investement * $percent;
            $retirement = $profit * $fee;
            $acum += $retirement;
            $profit_acum += $profit;

            $color = 'black';

            $real = 0;
            if (($i+1) % $weeks_reinvestem == 0) {
                $investement += $reinvestment;
                $real = -$reinvestment + $acum;
                $color = 'green';
            }

            if ($profit_acum >= ($increment * 2)) {
                $color = $color == 'green' ? 'purple' : 'red';
            }

            if ($real >= $reinvestment * 1) {
                $reinvestment = $reinvestment * 1;
            }
            $week = $i + 1;
            $html .=  "<tr style='color: " . $color . "'>
                <td>". $week ."</td>
                <td>". $start->addWeek()->toFormattedDateString() ."</td>
                <td>". number_format($investement, 2) ."</td>
                <td>". number_format($limit, 2) ."</td>
                <td>". number_format($percent * 100, 2) ."%</td>
                <td>". number_format($profit, 2) ."</td>
                <td>". number_format($profit_acum, 2) ."</td>
                <td>". number_format($retirement, 2) ."</td>
                <td>". number_format($acum, 2) ."</td>
                <td>". number_format($real, 2) ."</td>
            </tr>";
            if ($profit_acum >= ($increment * 2)) {
                $investement = $investement - $increment;
                $limit = $investement * 2;
                $profit_acum -= $increment * 2;
            }
        }
        $html .= "</table>";
        return $html;
    }
}
