<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>فاتورة إلكترونية</title>
    <style>
        body {
            font-family: 'Cairo', sans-serif;
            background-color: #f4f4f4;
            padding: 40px;
            direction: rtl;
        }

        .invoice-box {
            background: #fff;
            max-width: 800px;
            margin: auto;
            border: 1px solid #ddd;
            padding: 30px 40px;
            box-shadow: 0 0 15px rgba(0, 0, 0, .1);
            border-radius: 10px;
        }

        .invoice-header {
            text-align: center;
            border-bottom: 2px solid #bfa67a;
            padding-bottom: 15px;
            margin-bottom: 30px;
        }

        .invoice-header h1 {
            font-size: 28px;
            margin: 0;
            color: #333;
        }

        .invoice-header small {
            color: #777;
            font-size: 14px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        td {
            padding: 10px 5px;
            vertical-align: top;
        }

        td strong {
            color: #333;
        }

        .total {
            font-size: 18px;
            font-weight: bold;
            text-align: left;
            color: #bfa67a;
        }

        .signature {
            margin-top: 60px;
            text-align: left;
        }

        .signature-line {
            border-top: 1px solid #999;
            width: 200px;
            margin-top: 40px;
        }

        .no-print {
            text-align: center;
            margin-top: 30px;
        }

        .no-print button {
            padding: 10px 30px;
            font-size: 16px;
            background-color: #bfa67a;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .no-print button:hover {
            background-color: #a48c63;
        }

        @media print {
            .no-print {
                display: none;
            }

            body {
                background: white;
            }
        }
    </style>
</head>

<body>

    <div class="invoice-box">
        <div class="invoice-header">
            <h1>فاتورة إلكترونية</h1>
            <small>رقم: {{ $design->id }} | التاريخ: {{ $design->created_at->format('Y-m-d') }}</small>
        </div>

        <table>
            <tr>
                <td><strong>نوع التصميم:</strong>
                    {{ $design->design_type === 'individual' ? 'تصميم فردي' : 'تصميم دفعة' }}</td>
                <td><strong>اللون:</strong> {{ $design->color }}</td>
            </tr>
            <tr>
                <td><strong>اسم العميل:</strong> {{ $design->name_customer }}</td>
                <td><strong>رقم الهاتف:</strong> {{ $design->phone_number }}</td>
            </tr>
            <tr>
                <td><strong>عرض الكتف:</strong> {{ $design->shoulder_width }} سم</td>
                <td><strong>طول الذراع:</strong> {{ $design->arm_length }} سم</td>
            </tr>
            <tr>
                <td><strong>الطول الكلي:</strong> {{ $design->total_length }} سم</td>
                <td><strong>الروب:</strong> {{ $design->robe?->name ?? 'سيتم تحديده لاحقاً' }}</td>
            </tr>
            <tr>
                <td><strong>القبعة:</strong> {{ $design->hood?->name ?? 'سيتم تحديدها لاحقاً' }}</td>
                <td><strong>الوشاح:</strong> {{ $design->scarf?->name ?? 'سيتم تحديده لاحقاً' }}</td>
            </tr>
            <tr>
                <td colspan="2" class="total">
                    السعر الإجمالي: {{ number_format($design->total_price, 2) }} دينار
                </td>
            </tr>
        </table>

        <div class="signature">
            <p><strong>التوقيع:</strong></p>
            <div class="signature-line"></div>
        </div>
    </div>

    <div class="no-print">
        <button onclick="window.print()">🖨 طباعة الفاتورة</button>
    </div>

</body>

</html>
