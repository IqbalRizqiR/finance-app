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
        <div class="sidebar">
        <div class="logo">
            <img width="60px" height="60px" src="Akk.png" alt="">
        </div>
        <ul class="menu">
            <li class="active">
                <a href="#">
                    <i class="fa fa-home"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="account.html">
                    <i class="fa fa-user"></i>
                    <span>Profile</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-cog"></i>
                    <span>Settings</span>
                </a>
            </li>
            <li class="logout">
                <a href="#">
                    <i class="fa fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>Primary</span>
                <h2>Dashboard</h2>
            </div>
            <div class="user--info">
                <div class="search--box">
                    <i class="fa-solid fa-search">
                    <input type="text" placeholder="Search">
                    </i>
                </div>
                <img style="object-fit: cover;" src="https://web.rupa.ai/wp-content/uploads/2023/07/aruna3619_A_professional-looking_male_profile_picture_in_a_mini_998d7c7a-cc37-4401-813c-3674a117d857.png" alt="">
            </div>
        </div>
        <div class="card--container">
            <h1 class="main--title">Today's Data</h1>
            <div class="card--wrapper">
                <div class="payment-card">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">
                                Current Balance
                            </span>
                            <span class="amount--value">
                                Rp.500.000
                            </span>
                        </div>
                        <i class="fas fa-rupiah-sign icon">
                        </i>
                    </div>
                    <span class="card--detail">
                        **** **** **** 6013
                    </span>
                </div>
                <div class="payment-card">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">
                                target balance
                            </span>
                            <span class="amount--value">
                                Rp.50.000.000
                            </span>
                        </div>
                        <i class="fas fa-rupiah-sign icon">
                        </i>
                    </div>
                    <span class="card--detail">
                        **** **** **** 6013
                    </span>
                </div>
                <div class="payment-card">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">
                                other needs
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
                <div class="payment-card">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">
                                worship
                            </span>
                            <span class="amount--value">
                                Rp.10.000.000
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
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        2023-01-01
                                    </td>
                                    <td>
                                        Income
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Rp.500.000
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Edit
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2023-01-01
                                    </td>
                                    <td>
                                        Income
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Rp.500.000
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Edit
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2023-01-01
                                    </td>
                                    <td>
                                        Income
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Rp.500.000
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Edit
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2023-01-01
                                    </td>
                                    <td>
                                        Income
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Rp.500.000
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Edit
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2023-01-01
                                    </td>
                                    <td>
                                        Income
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Rp.500.000
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Edit
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2023-01-01
                                    </td>
                                    <td>
                                        Income
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Rp.500.000
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Edit
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2023-01-01
                                    </td>
                                    <td>
                                        Income
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Rp.500.000
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Edit
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2023-01-01
                                    </td>
                                    <td>
                                        Income
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Rp.500.000
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Edit
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2023-01-01
                                    </td>
                                    <td>
                                        Income
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Rp.500.000
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Edit
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2023-01-01
                                    </td>
                                    <td>
                                        Income
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Rp.500.000
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Edit
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2023-01-01
                                    </td>
                                    <td>
                                        Income
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Rp.500.000
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Edit
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2023-01-01
                                    </td>
                                    <td>
                                        Income
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Rp.500.000
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Edit
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2023-01-01
                                    </td>
                                    <td>
                                        Income
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Rp.500.000
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Edit
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2023-01-01
                                    </td>
                                    <td>
                                        Income
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Rp.500.000
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Edit
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2023-01-01
                                    </td>
                                    <td>
                                        Income
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Rp.500.000
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Edit
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2023-01-01
                                    </td>
                                    <td>
                                        Income
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Rp.500.000
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Edit
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2023-01-01
                                    </td>
                                    <td>
                                        Income
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Rp.500.000
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Edit
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2023-01-01
                                    </td>
                                    <td>
                                        Income
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Rp.500.000
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Edit
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2023-01-01
                                    </td>
                                    <td>
                                        Income
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Rp.500.000
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Edit
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2023-01-01
                                    </td>
                                    <td>
                                        Income
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Rp.500.000
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Edit
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2023-01-01
                                    </td>
                                    <td>
                                        Income
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Rp.500.000
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Edit
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2023-01-01
                                    </td>
                                    <td>
                                        Income
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Rp.500.000
                                    </td>
                                    <td>
                                        Salary
                                    </td>
                                    <td>
                                        Edit
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="7">
                                        Total : Rp.1.500.000
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
