<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Loan Calculator</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <style>
        .menu
{
    opacity: 0.8;
    height: 40px;
    word-spacing: 25px;
    margin-left: 500px;
}
a
{
    text-align: right;
    text-decoration: none;
    font-size: 25px;
    font-family:Georgia, 'Times New Roman', Times, serif;
    color:black;
}
a:hover
{
    color: darkgray;
}
#abt:hover
{
    background: black;
    opacity: 0.8;
    border-radius:4%;
} 
#svc:hover
{
    background: black;
    opacity: 0.8;
} 
</style>
</head>
<body style="background-color:#eee;">
<a href="index.php">
    <b style="opacity: 0.7;margin-left:50px;color:darkred;margin-top:50px;position:absolute;border:2px solid black;font-size:35px;">RHS BANK</b>
</a>
<a href="logout.php" class="pull-right btn-primary">Logout</a>
<br/><br/><br/>
    <p class="menu">
        <br/><br/>
        <a href="index.php">Home</a>
        <a href="account.php">Accounts</a>
        <a href="loan.php">Loans</a>
        <a href="services.php">Services</a>
        <a href="aboutus.php">About</a>
        <a href="contact.php">Contact</a>
        
    </p>
    <section class="section">
        <div class="container">
            <div class="content">
                <h1>Apply for a Loan</h1>
                <p>
                    The Simple Loan Calculator will determine your estimated payments for loan amounts, interest rates and terms.
                </p>
            </div>

            <div class="columns">
                <div class="column is-three-quarters">
                    <div class="card">
                        <div class="card-content">
                            <form id="loan-form">
                                <div class="level">
                                    <!-- Left side -->
                                    <div class="level-left is-marginless">
                                        <div class="level-item">
                                            <p class="number">1</p>
                                            Loan Amount
                                        </div>
                                    </div>

                                    <!-- Right side -->
                                    <div class="level-right">
                                        <div class="level-item">
                                            <div class="field">
                                                <div class="control has-icons-left ">
                                                    <input class="input" id="amount" type="number" />
                                                    <span class="icon is-small is-left">
                              <i class="fa fa-dollar-sign"></i>
                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="level">
                                    <!-- Left side -->
                                    <div class="level-left is-marginless">
                                        <div class="level-item">
                                            <p class="number">2</p>
                                            Interest Rate
                                        </div>
                                    </div>

                                    <!-- Right side -->
                                    <div class="level-right">
                                        <div class="level-item">
                                            <div class="field">
                                                <div class="control has-icons-right">
                                                    <input class="input" id="interest" type="number" />
                                                    <span class="icon is-small is-right">
                              <i class="fa fa-percentage"></i>
                              
                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="level">
                                    <!-- Left side -->
                                    <div class="level-left is-marginless">
                                        <div class="level-item">
                                            <p class="number">3</p>
                                            Number Of Years
                                        </div>
                                    </div>

                                    <!-- Right side -->
                                    <div class="level-right">
                                        <div class="level-item">
                                            <div class="field">
                                                <div class="control has-icons-left">
                                                    <input class="input" id="years" type="number" />
                                                    <span class="icon is-small is-left">
                              <i class="fa fa-calendar"></i>
                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="control">
                                    <button class="button is-large is-fullwidth is-primary is-outlined">
                      Calculate
                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- RESULTS -->
    <section class="section">
        <h1 class="title ">Calculated Results</h1>
        <div class="columns is-multiline">

            <div class="column is-12-tablet is-6-desktop is-3-widescreen">
                <div class="notification is-primary has-text">
                    <p id="monthlyPayment" class="title is-1">$</p>
                    <p class="subtitle is-4">Monthly Payments</p>
                </div>
            </div>

            <div class="column is-12-tablet is-6-desktop is-3-widescreen">
                <div class="notification is-info has-text">
                    <p id="totalInterest" class="title is-1">%</p>
                    <p class="subtitle is-4">Total Interest</p>
                </div>
            </div>

            <div class="column is-12-tablet is-6-desktop is-3-widescreen">
                <div class="notification is-link has-text">
                    <p id="totalPayment" class="title is-1">$</p>
                    <p class="subtitle is-4">Total Amount</p>
                </div>
            </div>

        </div>
    </section>
    <div class="control">
        <button class="button is-large is-fullwidth is-primary is-outlined">Apply</button>
    </div>


</body>

<script src="app.js"></script>

</html>