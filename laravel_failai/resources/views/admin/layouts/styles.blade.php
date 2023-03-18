<style>

    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
    }
    nav {
        margin: 0;
        position: absolute;
        top: 50px; /* atstumas nuo puslapio viršaus */
        left: 0;
        right: 0;
        height: 50px;
        background-color: #2c3e50;
        border-radius: 8px;
        font-size: 0;
    }
    nav a {
        line-height: 50px;
        height: 100%;
        font-size: 20px;
        display: inline-block;
        position: relative;
        z-index: 1;
        text-decoration: none;
        text-transform: uppercase;
        text-align: center;
        color: white;
        cursor: pointer;
        font-family: sans-serif;

    }
    nav a:hover {
        color: #2c3e50;
        background-color: #2BD6B4;
        border-radius: 1px;
    }

    a:nth-child(1) {
        width: 100px;

    }
    a:nth-child(2) {
        width: 110px;
    }
    a:nth-child(3) {
        width: 100px;
    }
    a:nth-child(4) {
        width: 160px;
    }
    a:nth-child(5) {
        width: 120px;
    }
    a:nth-child(6) {
        width: 130px;
    }
    a:nth-child(7) {
        width: 120px;
    }
    a:nth-child(8) {
        width: 120px;
    }
    a:nth-child(9) {
        width: 120px;
    }
    a:nth-child(10) {
        width: 120px;
    }
    a:nth-child(11) {
        width: 120px;
    }
    a:nth-child(12) {
        width: 120px;
    }

    h1 {
        position: absolute;
        top: 10px;
        left: 1px; /* atstumas nuo kairio puslapio krašto */
        font-size: 16px;
        color: #000303;
        font-family: 'Cherry Swash',cursive;
        font-weight: bold;
    }
    h2 {
        left: 50%;
    }

    p {
        position: absolute;
        top: 80px;
        left: 30px;
        width: 100%;
        text-align: center;
        color: #ecf0f1;
        font-family: 'Cherry Swash',cursive;
        font-size: 16px;
    }

    span {
        color: #2BD6B4;
    }

    .logo img {
        position: absolute;
        top: 0;
        left: 0;
        height: 260px;
        width: 150px;
        display: inline-block;
    }
    footer {
        background-color: #333333;
        color: #ffffff;
        padding: 1px ;
        text-align: left;
        bottom: 0;
        width: 100%;
        position: fixed;
        font-size: 20px;
    }
    footer p {
        color: #ffffff;
    }

    footer ul li a {
        color: #cccccc;
        border-bottom: 1px solid #cccccc;
        padding-bottom: 5px;
    }

    footer ul li a:hover {
        color: #ffffff;
        border-bottom: 1px solid #ffffff;
    }
    table {
        border: 1px solid #ccc;
        border-collapse: collapse;
        margin: 0;
        padding: 0;
        width: 100%;
        table-layout: fixed;
    }

    table caption {
        font-size: 1.5em;
        margin: .5em 0 .75em;
    }

    table tr {
        background-color: #f8f8f8;
        border: 1px solid #ddd;
        padding: .135em;
    }

    table th,
    table td {
        padding: .625em;
        text-align: center;
    }

    table th {
        font-size: .85em;
        letter-spacing: .1em;
        text-transform: uppercase;
    }
        table tr {
            border-bottom: 1px solid #ddd;
            padding: .35em;
        }

        table th,
        table td {
            padding: .725em;
            text-align: left;
        }

        table th {
            background-color: #f8f8f8;
            font-size: .85em;
            letter-spacing: .1em;
            text-transform: uppercase;
            font-weight: bold;
            border-bottom: 2px solid #ddd;
        }
    .table-container {
        display: flex;
        justify-content: space-between;
        padding-left: 170px; /* Atstumas nuo kairiojo krašto */
        padding-right: 10px;
        padding-top: 15px;
        gap: 1px;
    }
    .table-wrapper {
        flex-basis: 30%;
        box-sizing: border-box;

        width: 50%; /*!* Nustatomas fiksuotas plotis *!*/
    }
    table th:nth-child(1),
    table td:nth-child(2) {
        width: 5%;
    }

    .users-table {
        width: 122%; /* Lentelės plotis  */
    }

    .users-table th,
    .users-table td {
        /* Stilius skirtas tik Vartotojų lentelės stulpeliams */
        padding: 44px; /* Tarpas tarp stulpelių */
    }
    .products-table {
        margin-left: 53px;/*  poslinkis į dešinę */
        height: calc(100vh - 200px); /* keiskite šią reikšmę pagal tai, kaip ilgą lentelę norite turėti */


    }

</style>
