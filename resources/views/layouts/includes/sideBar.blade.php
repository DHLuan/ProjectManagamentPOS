<nav class="active" id="sidebar">
    <ul class="list-unstyled lead">
        <li >
            <a href="" ><i class="fa fa-home fa-lg"></i> Home </a>
        </li>
        <li>
            <a href="{{ route('orders.index')}}"><i class="fa fa-box fa-lg"></i> Orders </a>
        </li>
        <li>
            <a href="{{ route('transactions.index')}}"><i class="fa fa-money-bill fa-lg"></i> Transactions </a>
        </li>
        <li>
            <a href="{{ route('products.index')}}"><i class="fa fa-truck fa-lg"></i> Products </a>
        </li>
    </ul>
</nav>

<style>
    #sidebar ul.lead {
        border-bottom: 1px solid #47748b;
        width: fit-content;
    }

    #sidebar ul li a {
        padding: 10px;
        font-size: 1.1em;
        display: block;
        width: 30vh;
        color: #008888;
    }

    #sidebar ul li a:hover {
        color: #ffffff;
        background: #008888;
        text-decoration: none !important;
    }

    #sidebar ul li a i {
        margin-right: 10px !important;
    }

    #sidebar ul li.active>a, a[aria-expanded="true"] {
        color: #ffffff;
        background: #008888;
    }
</style>
