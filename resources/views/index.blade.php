<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance-App</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900,100italic,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic" rel="stylesheet" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('asset/style.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
    @include('sidebar')
    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>Primary</span>
                <h2>Dashboard</h2>
            </div>
            <div class="user--info">
                <div class="search--box">
                    <i class="fa-solid fa-search">
                    </i>
                    <input type="text" placeholder="Search">
                </div>
                <img style="object-fit: cover;" src="https://web.rupa.ai/wp-content/uploads/2023/07/aruna3619_A_professional-looking_male_profile_picture_in_a_mini_998d7c7a-cc37-4401-813c-3674a117d857.png" alt="">
            </div>
        </div>
        <div class="card--container">
            <h1 class="main--title">Today's Data</h1>
             <div class="card--wrapper">
                <div class="payment-card ">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">
                                Current Balance
                            </span>


                            <span class="amount--value">

                                Rp. {{ number_format($total, 0, ',', '.') }}

                            </span>
                        </div>
                        <i class="fas fa-rupiah-sign icon">
                        </i>
                    </div>
                    <span class="card--detail">
                        **** **** **** 6013
                    </span>
                </div>
                <div class="payment-card ">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">
                                Target Savings
                            </span>

                                <input type="number" class="amount--value" name="target" value="" >



                        </div>
                        <i class="fas fa-rupiah-sign icon">
                        </i>
                    </div>
                    <span class="card--detail">
                        **** **** **** 6013
                    </span>
                </div>
                <div class="payment-card ">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">
                                Debit
                            </span>
                            <span class="amount--value">
                                Rp.1.000.000
                            </span>
                        </div>
                        <i class="fas fa-rupiah-sign icon">
                        </i>
                    </div>
                    <span class="card--detail">
                        **** **** **** 6013
                    </span>
                </div>
            </div>
        </div>
        <div class="tabular--wrapper">
                <h3 class="main--title">Finance Data</h3>
                <div class="table--container">
                    <table>
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Transaction Type</th>
                                <th>Description</th>
                                <th>Amount</th>
                                <th>Category</th>

                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($transactionLogs as $row)
                                    <tr>
                                        <td>{{ $row->created_at->toDateString() }}</td>
                                        <td>{{ $row->transaction_type }}</td>
                                        <td>{{ $row->description }}</td>
                                        <td>Rp.{{ number_format($row->amount, 0, ',', '.') }}</td>
                                        <td>{{ $row->source }}</td>


                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="7">
                                        Total : Rp.{{ number_format($total, 0, ',', '.') }}
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <button onclick="openModal()">
                    <div class="button-plus">
                        <i class="fas fa-bars icon"></i>
                    </div>
                </button>
                @include('pop-up')
            </div>
</body>
<script src="{{ asset('asset/main.js') }}"></script>
</html>
