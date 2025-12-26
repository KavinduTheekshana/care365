<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Payment Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            color: #333;
            margin: 30px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 3px solid #2563eb;
            padding-bottom: 15px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            color: #2563eb;
        }
        .header p {
            margin: 5px 0;
            color: #666;
        }
        .receipt-info {
            margin: 20px 0;
            background-color: #f0f9ff;
            padding: 15px;
            border-left: 4px solid #2563eb;
        }
        .receipt-info table {
            width: 100%;
            border-collapse: collapse;
        }
        .receipt-info td {
            padding: 5px 0;
        }
        .receipt-info td:first-child {
            font-weight: bold;
            width: 150px;
        }
        .payment-details {
            margin: 30px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
        }
        .payment-details h2 {
            margin-top: 0;
            color: #2563eb;
            font-size: 18px;
            border-bottom: 2px solid #2563eb;
            padding-bottom: 10px;
        }
        .detail-row {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }
        .detail-row:last-child {
            border-bottom: none;
        }
        .detail-label {
            font-weight: bold;
            color: #555;
        }
        .detail-value {
            color: #333;
        }
        .amount-box {
            background-color: #fef3c7;
            border: 2px solid #f59e0b;
            padding: 15px;
            text-align: center;
            margin: 20px 0;
            border-radius: 5px;
        }
        .amount-box .label {
            font-size: 14px;
            color: #92400e;
            margin-bottom: 5px;
        }
        .amount-box .amount {
            font-size: 28px;
            font-weight: bold;
            color: #92400e;
        }
        .footer {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 2px solid #ddd;
            text-align: center;
            color: #666;
            font-size: 10px;
        }
        .notes {
            margin: 20px 0;
            padding: 15px;
            background-color: #f9fafb;
            border-left: 4px solid #6b7280;
        }
        .notes h3 {
            margin-top: 0;
            font-size: 14px;
            color: #374151;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>CARE 365</h1>
        <p>Payment Receipt</p>
        @if($branch_name)
            <p><strong>Branch:</strong> {{ $branch_name }}</p>
        @endif
    </div>

    <div class="receipt-info">
        <table>
            <tr>
                <td>Receipt Number:</td>
                <td>#{{ str_pad($payment->id, 6, '0', STR_PAD_LEFT) }}</td>
            </tr>
            <tr>
                <td>Date:</td>
                <td>{{ $payment->payment_date->format('F d, Y') }}</td>
            </tr>
            <tr>
                <td>Client:</td>
                <td>{{ $client_name }}</td>
            </tr>
            <tr>
                <td>Registration Number:</td>
                <td>{{ $client_reg_number }}</td>
            </tr>
        </table>
    </div>

    <div class="payment-details">
        <h2>Payment Details</h2>

        <div class="detail-row">
            <span class="detail-label">Payment Type:</span>
            <span class="detail-value">{{ $payment->payment_type }}</span>
        </div>

        <div class="detail-row">
            <span class="detail-label">Description:</span>
            <span class="detail-value">{{ $payment->description }}</span>
        </div>
    </div>

    <div class="amount-box">
        <div class="label">Total Amount</div>
        <div class="amount">LKR {{ number_format($payment->amount, 2) }}</div>
    </div>

    @if($guardian_name)
    <div class="notes">
        <h3>Billed To:</h3>
        <p><strong>{{ $guardian_name }}</strong></p>
        @if($guardian_email)
            <p>Email: {{ $guardian_email }}</p>
        @endif
        @if($guardian_phone)
            <p>Phone: {{ $guardian_phone }}</p>
        @endif
    </div>
    @endif

    <div class="footer">
        <p>This is an automatically generated receipt.</p>
        <p>Generated on {{ now()->format('F d, Y \a\t H:i') }}</p>
        <p>Thank you for your payment.</p>
    </div>
</body>
</html>
