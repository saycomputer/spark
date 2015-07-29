<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href='//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Main Content -->
    <div class="container spark-splash-screen">
        <!-- Branding / Navigation -->
        <div class="row splash-nav">
            <div class="col-md-10 col-md-offset-1">
                <div class="pull-left splash-brand">
                    <i class="fa fa-btn fa-sun-o"></i>Laravel Spark
                </div>

                <div class="pull-right splash-nav-list">
                    <ul class="list-inline">
                        <li class="splash-nav-link"><a href="/features">Features</a></li>
                        <li class="splash-nav-link splash-nav-link-highlight"><a href="/login">Login</a></li>
                        <li class="splash-nav-link splash-nav-link-highlight-border"><a href="/register">Register</a></li>
                    </ul>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>

        <!-- Inspiration -->
        <div class="row splash-inspiration-row">
            <div class="col-md-5 col-md-offset-1">
                <div id="splash-inspiration-heading">
                    Create Amazing Experiences.
                </div>

                <div id="splash-inspiration-text">
                    More junk about how this is gonna be an amazing, awesome experience.
                    More junk about how this is gonna be an amazing, awesome experience.
                </div>
            </div>

            <!-- Browser Window -->
            <div class="col-md-5">
                <div class="splash-browser-window">
                    <div class="splash-browser-dots-container">
                        <ul class="list-inline splash-browser-dots">
                            <li><i class="fa fa-circle red"></i></li>
                            <li><i class="fa fa-circle yellow"></i></li>
                            <li><i class="fa fa-circle green"></i></li>
                        </ul>
                    </div>
                    <div>
                        <img src="https://placehold.it/455x300">
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Heading -->
        <div class="row">
            <div class="col-md-10 col-md-offset-1 splash-row-heading">
                Features You'll Adore
            </div>
        </div>

        <!-- Feature Icons -->
        <div class="row splash-features-icon-row">
            <div class="col-md-10 col-md-offset-1 text-center">
                <div class="col-md-4">
                    <div class="splash-feature-icon">
                        <i class="fa fa-rocket"></i>
                    </div>

                    <div class="splash-feature-heading">
                        Amazing Deployment
                    </div>

                    <div class="splash-feature-text">
                        Some description of the feature that makes sense to you. It's convincing you to use this service.
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="splash-feature-icon">
                        <i class="fa fa-rocket"></i>
                    </div>

                    <div class="splash-feature-heading">
                        Amazing Deployment
                    </div>

                    <div class="splash-feature-text">
                        Some description of the feature that makes sense to you. It's convincing you to use this service.
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="splash-feature-icon">
                        <i class="fa fa-rocket"></i>
                    </div>

                    <div class="splash-feature-heading">
                        Amazing Deployment
                    </div>

                    <div class="splash-feature-text">
                        Some description of the feature that makes sense to you. It's convincing you to use this service.
                    </div>
                </div>
            </div>
        </div>

        <!-- Pricing Heading -->
        <div class="row">
            <div class="col-md-10 col-md-offset-1 splash-row-heading">
                Simple Pricing
            </div>
        </div>

        <!-- Pricing Table -->
        <div class="row splash-pricing-table-row text-center">
            <div class="col-md-10 col-md-offset-1">
                @foreach (Laravel\Spark\Spark::plans()->active() as $plan)
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading splash-plan-heading">
                                {{ $plan->name }}
                            </div>

                            <div class="panel-body">
                                <ul class="splash-plan-feature-list">
                                    @foreach ($plan->features as $feature)
                                        <li>{{ $feature }}</li>
                                    @endforeach
                                </ul>

                                <hr>

                                <div class="splash-plan-price">
                                    {{ $plan->currencySymbol }}{{ $plan->price }}
                                </div>

                                <div class="splash-plan-interval">
                                    {{ $plan->interval }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Call To Action Button -->
        <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center">
                <button class="btn btn-primary splash-get-started-btn">
                    Get Started!
                </button>
            </div>
        </div>

        <!-- Customers Heading -->
        <div class="row">
            <div class="col-md-10 col-md-offset-1 splash-row-heading">
                What Our Customers Say
            </div>
        </div>

        <!-- Customer Testimonials -->
        <div class="row splash-customer-row">
            <div class="col-md-10 col-md-offset-1 text-center">
                <div class="col-md-4">
                    <div class="splash-customer-avatar">
                        <img src="https://s3.amazonaws.com/uifaces/faces/twitter/msurguy/128.jpg">
                    </div>

                    <div class="splash-customer-quote">
                        Some description of the feature that makes sense to you. It's convincing you to use this service.
                    </div>

                    <div class="splash-customer-identity">
                        <div class="splash-customer-name">Maksim Surguy</div>
                        <div class="splash-customer-title">CEO, Reddit</div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="splash-customer-avatar">
                        <img src="https://s3.amazonaws.com/uifaces/faces/twitter/allisongrayce/128.jpg">
                    </div>

                    <div class="splash-customer-quote">
                        Some description of the feature that makes sense to you. It's convincing you to use this service.
                    </div>

                    <div class="splash-customer-identity">
                        <div class="splash-customer-name">Maksim Surguy</div>
                        <div class="splash-customer-title">CEO, Reddit</div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="splash-customer-avatar">
                        <img src="https://s3.amazonaws.com/uifaces/faces/twitter/richcsmith/128.jpg">
                    </div>

                    <div class="splash-customer-quote">
                        Some description of the feature that makes sense to you. It's convincing you to use this service.
                    </div>

                    <div class="splash-customer-identity">
                        <div class="splash-customer-name">Maksim Surguy</div>
                        <div class="splash-customer-title">CEO, Reddit</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="row">
            <div class="col-md-10 col-md-offset-1 splash-footer">
                <div class="pull-left splash-footer-company">
                    Copyright © Your Company
                </div>

                <div class="pull-right splash-footer-social-icons">
                    <i class="fa fa-btn fa-facebook-square"></i>
                    <i class="fa fa-twitter-square"></i>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <!-- Footer Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>