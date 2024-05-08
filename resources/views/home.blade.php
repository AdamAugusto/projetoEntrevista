@extends('layouts.app')

@section('titulo', 'Home')

@section('conteudo')
    <div class="d-flex justify-content-center">
        <ul style="list-style: none; width: 1000px" class="text-center">
            <li class="d-flex justify-content-center">
                <canvas id="myChart" style="width:100%;max-width:800px"></canvas>
            </li>
            <li> porcentagem de realizados dentro do prazo:    {{($dentroPrazo/($dentroPrazo+$foraPrazo))*100}}%</li>
        </ul>
    </div>
        <script
        src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
        </script>
        <script>
        var xValues = ["Dentro do Prazo", "Fora do Prazo"];
        var yValues = [{{$dentroPrazo}}, {{$foraPrazo}}];
        var barColors = [
        "#008000",
        "#FF0000"
        ];

        new Chart("myChart", {
        type: "pie",
        data: {
            labels: xValues,
            datasets: [{
            backgroundColor: barColors,
            data: yValues
            }]
        },
        options: {
            title: {
            display: true,
            text: "Chamados atendidos dentro do prazo"
            }
        }
        });
        </script>

@endsection