<?php

function getResult(int $difficult, int $dices): array
{
    $results = [];
    for ($i = 0; $i < 10000; $i++) {
        $success = 0;
        for ($d =0; $d < $dices; $d++) {
            $result = mt_rand(1, 10);
            if ($result >= $difficult) {
                $success++;
            }
        }
        if (isset($results[$success])) {
            $results[$success] += 1;
        } else {
            $results[$success] = 1;
        }

    }

    return $results;
}



function getWeightedRandom() {
    $weights = [
        1 => 10,
        2 => 10,
        3 => 10,
        4 => 10,
        5 => 15,
        6 => 20,
        7 => 10,
        8 => 10,
        9 => 10,
        10 => 10,
    ];
    $totalWeight = array_sum($weights);
    $randomNumber = mt_rand(1, $totalWeight);
    $currentWeight = 0;

    foreach ($weights as $value => $weight) {
        $currentWeight += $weight;
        if ($randomNumber <= $currentWeight) {
            return $value;
        }
    }
    return mt_rand(1, 10);
}

function getResultNew(int $difficult, int $dices): array
{
    $results = [];
    for ($i = 0; $i < 10000; $i++) {
        $success = 0;
        if (mt_rand(0, 200) !== -1) {
            for ($d = 0; $d < $dices; $d++) {
                $result = getWeightedRandom();
                if ($result >= $difficult) {
                    $success++;
                }
            }
        }
        if (isset($results[$success])) {
            $results[$success] += 1;
        } else {
            $results[$success] = 1;
        }

    }

    return $results;
}

?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body>
        <div id="app">
            @for($dices = 5; $dices < 11; $dices++)
                @for($difficult = 4; $difficult < 8; $difficult++)
                    <h1>Кубиков: {{ $dices }} сложность: {{ $difficult }}</h1>
                    <h3>Стандарт</h3>
                    <table border="1" cellpadding="5" cellspacing="0" style="border: black 1px">
                        <tr>
                            <td width="100px">Успехов</td>
                            @for($i = 0; $i <= $dices; $i++)
                                <td align="center" width="30px">{{ $i }}</td>
                            @endfor
                        </tr>
                        <tr>
                            <td>Бросков</td>
                                <?php $results = getResult($difficult, $dices) ?>
                            @for($i = 0; $i <= $dices; $i++)
                                <td>{{ $results[$i] ?? 0 }}</td>
                            @endfor
                        </tr>
                    </table>
                    <h2>Подстанова</h2>
                    <table border="1" cellpadding="5" cellspacing="0" style="border: black 1px">
                        <tr>
                            <td width="100px">Успехов</td>
                            @for($i = 0; $i <= $dices; $i++)
                                <td align="center" width="30px">{{ $i }}</td>
                            @endfor
                        </tr>
                        <tr>
                            <td>Бросков</td>
                                <?php $results = getResultNew($difficult, $dices) ?>
                            @for($i = 0; $i <= $dices; $i++)
                                <td>{{ $results[$i] ?? 0 }}</td>
                            @endfor
                        </tr>
                    </table>
                @endfor
            @endfor
        </div>
    </body>
</html>
