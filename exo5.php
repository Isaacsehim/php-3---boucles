<?php 
$month = "FÉVRIER";
$totalDays = 28;
$specialDay = 14;
$daysOfweek = ["L", "M", "M", "J", "V", "S", "D"];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendrier</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f9f9f9;
        }
        .calendar {
            text-align: center;
            background: white;
            padding: 20px;
            border-radius: 10px;
        }
        .calendar h2 {
			display: flex;
            color: red;
            text-transform: uppercase;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            width: 14.28%;
            padding: 20px 5px 20px 5px;
            text-align: center;
        }
        td {
            color: black;
        }
        .weekend {
            color: gray;
        }
        .specialDay {
            background: red;
            color: white;
            border-radius: 50%;
            display: inline-block;
            width: 30px;
            height: 30px;
            line-height: 30px;
        }
    </style>
</head>
<body>
    <div class="calendar">
        <h2><?php echo $month; ?></h2>
        <table>
            <thead>
                <tr>
                    <th>L</th>
                    <th>M</th>
                    <th>M</th>
                    <th>J</th>
                    <th>V</th>
                    <th class="weekend">S</th>
                    <th class="weekend">D</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td><td></td><td></td><td></td><td></td><td class="weekend">1</td><td class="weekend">2</td>
                </tr>
                <tr>
                    <td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td class="weekend">8</td><td class="weekend">9</td>
                </tr>
                <tr>
                    <td>10</td><td>11</td><td>12</td><td>13</td><td><span class="specialDay">14</span></td><td class="weekend">15</td><td class="weekend">16</td>
                </tr>
                <tr>
                    <td>17</td><td>18</td><td>19</td><td>20</td><td>21</td><td class="weekend">22</td><td class="weekend">23</td>
                </tr>
                <tr>
                    <td>24</td><td>25</td><td>26</td><td>27</td><td>28</td><td></td><td></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>