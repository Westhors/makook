<?php

namespace App\Filament\Resources\Filament\WidgetsResource\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Hood;
use Illuminate\Support\Carbon;

class HoodStats extends ChartWidget
{
    protected static ?string $heading = 'القبعة حسب الشهر';
    protected static ?int $sort = 3;

    protected function getData(): array
    {
        $months = collect(range(1, 12))->map(fn ($m) => Carbon::create()->month($m)->format('F'));

        $data = Hood::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->pluck('count', 'month');

        return [
            'datasets' => [
                [
                    'label' => 'عدد القبعات',
                    'data' => $months->keys()->map(fn ($m) => $data[$m + 1] ?? 0)->toArray(),
                    'backgroundColor' => 'rgba(255, 206, 86, 0.7)',
                ],
            ],
            'labels' => $months->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
