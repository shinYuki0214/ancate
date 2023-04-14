@extends('layouts.app')

@section('content')
    <div class="p-4">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    アンケート結果
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>待ち時間について</th>
                            <th>説明のわかりやすさについて</th>
                            <th>治療の痛みについて</th>
                            <th>満足度について</th>
                            <th>意見・要望・感想</th>
                        </tr>
                        @foreach ($datas as $data)
                            <tr>
                                <td>{{ $data->q1 }}</td>
                                <td>{{ $data->q2 }}</td>
                                <td>{{ $data->q3 }}</td>
                                <td>{{ $data->q4 }}</td>
                                <td>{{ $data->q5 }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection
