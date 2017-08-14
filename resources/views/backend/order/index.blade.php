@extends ('backend.layouts.app')

@section ('title', 'Заказы')

@section('after-styles')
@endsection

@section('page-header')
<h1>
    Заказы
    <small>Все заказы</small>
</h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Все заказы на {{ \Carbon\Carbon::now()->format('d.m.Y') }}!</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div><!-- /.box tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
            <table class="table table-responsive">
                <tr>
                    <th>Товар</th>
                    <th>Количестов</th>
                    <th>Фио клиента</th>
                    <th>Телефон</th>
                    <th>Дата</th>
                </tr>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->products }} {{ $order->color }}</td>
                        <td>{{ $order->count }}</td>
                        <td>{{ $order->user->last_name }}</td>
                        <td>{{ $order->user->phone }}</td>
                        <td>{{ $order->created_at }}</td>
                    </tr>
                @endforeach
            </table>
        </div><!-- /.box-body -->
    </div><!--box box-success-->
@endsection

@section('after-scripts')

@endsection
