<?php

namespace App\Http\Controllers;

use App\Investment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    public function index()
    {
        $plan = request()->plan ? request()->plan : 1000;
        $increment = $plan;
        $investement = $plan;
        $reinvestment = $plan;
        $weeks_reinvestem = request()->frequency ? request()->frequency : 4;
        $fee = 0.93;
        $weeks = request()->weeks ? request()->weeks : 52;
        $start = Carbon::create(2019, 6, 17, 0, 0, 0, 'America/Caracas');
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
                <th>Real Inversion</th>
                <th>Real Limite</th>
                <th>Real Porcentaje</th>
                <th>Real Ganancia</th>
                <th>Real Retiro</th>
            </tr>";
        $acum = 0;
        $profit_acum = 0;
        $simulation = [];
        $real_investement = Investment::all()->toArray();
        for ($i=0; $i < $weeks; $i++) {
            $limit = $investement * 2;
            //9.08% / 8.67%
            //$percent = rand(490, 500)/10000;
            $percent = 1000/10000;
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
            $date = $start->addWeek()->toFormattedDateString();
            if (isset($real_investement[$i])) {
                $real_amount = $real_investement[$i]['amount'];
                $real_limit = $real_investement[$i]['limit'];
                $real_percent = $real_investement[$i]['percent'];
                $real_retirement = $real_investement[$i]['retirement'];
            } else {
                $real_amount = 0;
                $real_limit = 0;
                $real_percent = 0;
                $real_retirement = 0;
            }
            $html .=  "<tr style='color: " . $color . "'>
                <td>". $week ."</td>
                <td>". $date ."</td>
                <td>". number_format($investement, 2) ."</td>
                <td>". number_format($limit, 2) ."</td>
                <td>". number_format($percent * 100, 2) ."%</td>
                <td>". number_format($profit, 2) ."</td>
                <td>". number_format($profit_acum, 2) ."</td>
                <td>". number_format($retirement, 2) ."</td>
                <td>". number_format($acum, 2) ."</td>
                <td>". number_format($real, 2) ."</td>
                <td>". number_format($real_amount, 2) ."</td>
                <td>". number_format($real_limit, 2) ."</td>
                <td>". number_format($real_percent * 100, 2) ." %</td>
                <td>". number_format($real_amount * $real_percent , 2) ."</td>
                <td>". number_format($real_amount * $real_percent * $fee , 2) ."</td>
            </tr>";
                $simulation[$i]['color'] = $color;
                $simulation[$i]['week'] = $week;
                $simulation[$i]['date'] = $date;
                $simulation[$i]['investement'] = $investement;
                $simulation[$i]['limit'] = $limit;
                $simulation[$i]['percent'] = $percent;
                $simulation[$i]['profit'] = $profit;
                $simulation[$i]['profit_acum'] = $profit_acum;
                $simulation[$i]['retirement'] = $retirement;
                $simulation[$i]['acum'] = $acum;
                $simulation[$i]['real'] = $real;
                $simulation[$i]['real_amount'] = $real_amount;
                $simulation[$i]['real_limit'] = $real_limit;
                $simulation[$i]['real_percent'] = $real_percent;
                $simulation[$i]['real_profit'] = $real_amount * $real_percent;
                $simulation[$i]['real_retirement'] = $real_amount * $real_percent * $fee;
            if ($profit_acum >= ($increment * 2)) {
                $investement = $investement - $increment;
                $limit = $investement * 2;
                $profit_acum -= $increment * 2;
            }
        }
        $html .= "</table>";
        return response()->json($simulation);
        //return $html;
    }
}
