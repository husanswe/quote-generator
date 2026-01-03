<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="quote.png">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <title>Quote of the Day Generator</title>
    </head>

    <body class="d-flex align-items-center justify-content-center min-vh-100 bg-dark text-white">
        
        <div class="container text-center mt-5">
            <h1>Quote of the Day Generator</h1>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-6">
                    <div class="card border-primary border-2 bg-transparent text-center shadow-lg">
                        <div class="card-body p-4 p-md-5">
                            <i class="text-primary display-4 mb-4"></i>
                            
                            <p class="card-text fs-4 fw-light lh-lg mb-4" id="quoteText">
                                
                            </p>
                            
                            <p class="text-muted fst-italic mb-5" id="quoteAuthor">

                            </p>
                            
                            <button class="btn btn-primary btn-lg px-5 shadow" onclick="getNewQuote()">
                                <i class="fas fa-sync-alt me-2"></i>
                                Click for a quote
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>