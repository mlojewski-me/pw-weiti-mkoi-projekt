@extends('index')

@section('content')
    <ol class="breadcrumb">
        <li><a href="/">@lang('index.title')</a></li>
        <li><a href="/tests">@lang('menu.tests')</a></li>
        <li class="active">@lang('menu.chi-square')</li>
    </ol>
    <div class="panel panel-default">
        <div class="panel-heading">@lang('tests.results')</div>
        <div class="panel-body">
            @if(ResultsController::isBlumMicali())
                <div>
                    <p><b>@lang('menu.blum-micali')</b></p>
                    <?php $results = ChiSquareController::getChiSquareResults('bm'); ?>
                    <p>@lang('tests.result'): {{$results['calculated']}}</p>
                    @if($results['passed'])
                        <p>@lang('tests.passed')</p>
                    @else
                        <p>@lang('tests.failed')</p>
                    @endif
                </div>
            @endif
            @if(ResultsController::isRsa())
                <div>
                    <p><b>@lang('menu.rsa')</b></p>
                    <?php $results = ChiSquareController::getChiSquareResults('rsa'); ?>
                    <p>@lang('tests.result'): {{$results['calculated']}}</p>
                    @if($results['passed'])
                        <p>@lang('tests.passed')</p>
                    @else
                        <p>@lang('tests.failed')</p>
                    @endif
                </div>
            @endif
        </div>
    </div>
@stop
