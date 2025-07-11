<?php

namespace App\Filament\Resources\Filament\WidgetsResource\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Scarf;
use Illuminate\Support\Carbon;

class ScarfStats extends ChartWidget
{
    protected static ?string $heading = 'الوشاح حسب الشهر';
    protected static ?int $sort = 4;

    protected function getData(): array
    {
        $months = collect(range(1, 12))->map(fn($m) => Carbon::create()->month($m)->format('F'));

        $data = Scarf::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->pluck('count', 'month');

        return [
            'datasets' => [
                [
                    'label' => 'عدد الأوشحة',
                    'data' => $months->keys()->map(fn($m) => $data[$m + 1] ?? 0)->toArray(),
                    'backgroundColor' => 'rgba(75, 192, 192, 0.7)',
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
