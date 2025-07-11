<?php

namespace App\Filament\Resources\Filament\WidgetsResource\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Robe;
use Illuminate\Support\Carbon;

class RobeStats extends ChartWidget
{
    protected static ?string $heading = 'الروب حسب الشهر';
    protected static ?int $sort = 2;

    protected function getData(): array
    {
        $months = collect(range(1, 12))->map(fn($m) => Carbon::create()->month($m)->format('F'));

        $data = Robe::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->pluck('count', 'month');

        return [
            'datasets' => [
                [
                    'label' => 'عدد الروب',
                    'data' => $months->keys()->map(fn($m) => $data[$m + 1] ?? 0)->toArray(),
                    'backgroundColor' => 'rgba(54, 162, 235, 0.7)',
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
