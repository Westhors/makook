<?php

namespace App\Filament\Resources\Filament\WidgetsResource\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Design;
use App\Models\Robe;
use App\Models\Hood;
use App\Models\Scarf;
use Illuminate\Support\Carbon;

class DashboardStats extends ChartWidget
{
    protected static ?string $heading = 'إحصائيات شهرية';

    protected static ?int $sort = 1;

    protected function getData(): array
    {
        $months = collect(range(1, 12))->map(fn($m) => Carbon::create()->month($m)->format('F'));

        $designCounts = Design::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->pluck('count', 'month');

        $robeCounts = Robe::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->pluck('count', 'month');

        $hoodCounts = Hood::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->pluck('count', 'month');

        $scarfCounts = Scarf::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->pluck('count', 'month');

        return [
            'datasets' => [
                [
                    'label' => 'الطلبات',
                    'data' => $months->keys()->map(fn($m) => $designCounts[$m + 1] ?? 0)->toArray(),
                    'backgroundColor' => 'rgba(255, 99, 132, 0.7)',
                ],
                [
                    'label' => 'الروب',
                    'data' => $months->keys()->map(fn($m) => $robeCounts[$m + 1] ?? 0)->toArray(),
                    'backgroundColor' => 'rgba(54, 162, 235, 0.7)',
                ],
                [
                    'label' => 'القبعة',
                    'data' => $months->keys()->map(fn($m) => $hoodCounts[$m + 1] ?? 0)->toArray(),
                    'backgroundColor' => 'rgba(255, 206, 86, 0.7)',
                ],
                [
                    'label' => 'الوشاح',
                    'data' => $months->keys()->map(fn($m) => $scarfCounts[$m + 1] ?? 0)->toArray(),
                    'backgroundColor' => 'rgba(75, 192, 192, 0.7)',
                ],
            ],
            'labels' => $months->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'bar'; // ممكن تخليها line أو pie حسب ما تحب
    }
}
