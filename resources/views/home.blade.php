@extends('layouts.app')

@section('titulo', 'Home')

@section('conteudo')
        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
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