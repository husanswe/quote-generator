<?php 
    $quotes = [
    [
        "quote" => "The only way to do great work is to love what you do.",
        "author" => "Steve Jobs"
    ],
    [
        "quote" => "Innovation distinguishes between a leader and a follower.",
        "author" => "Steve Jobs"
    ],
    [
        "quote" => "Strive not to be a success, but rather to be of value.",
        "author" => "Albert Einstein"
    ],
    [
        "quote" => "The mind is everything. What you think you become.",
        "author" => "Buddha"
    ],
    [
        "quote" => "The best time to plant a tree was 20 years ago. The second best time is now.",
        "author" => "Chinese Proverb"
    ],
    [
        "quote" => "Talk is cheap. Show me the code.",
        "author" => "Linus Torvalds"
    ],
    [
        "quote" => "Programs must be written for people to read, and only incidentally for machines to execute.",
        "author" => "Harold Abelson"
    ],
    [
        "quote" => "Any fool can write code that a computer can understand. Good programmers write code that humans can understand.",
        "author" => "Martin Fowler"
    ],
    [
        "quote" => "Simplicity is the soul of efficiency.",
        "author" => "Austin Freeman"
    ],
    [
        "quote" => "Before software can be reusable it first has to be usable.",
        "author" => "Ralph Johnson"
    ],
    [
        "quote" => "Make it work, make it right, make it fast.",
        "author" => "Kent Beck"
    ],
    [
        "quote" => "Code is like humor. When you have to explain it, it’s bad.",
        "author" => "Cory House"
    ],  
    [
        "quote" => "First, solve the problem. Then, write the code.",
        "author" => "John Johnson"
    ],
    [
        "quote" => "The best way to predict the future is to invent it.",
        "author" => "Alan Kay"
    ],
    [
        "quote" => "Experience is the name everyone gives to their mistakes.",
        "author" => "Oscar Wilde"
    ],
    [
        "quote" => "In the middle of difficulty lies opportunity.",
        "author" => "Albert Einstein"
    ],
    [
        "quote" => "When something is important enough, you do it even if the odds are not in your favor.",
        "author" => "Elon Musk"
    ],
    [
        "quote" => "Failure is an option here. If things are not failing, you are not innovating enough.",
        "author" => "Elon Musk"
    ],
    [
        "quote" => "I think it is possible for ordinary people to choose to be extraordinary.",
        "author" => "Elon Musk"
    ],
    [
        "quote" => "If you get up in the morning and think the future is going to be better, it is a bright day. Otherwise, it's not.",
        "author" => "Elon Musk"
    ],
    [
        "quote" => "Persistence is very important. You should not give up unless you are forced to give up.",
        "author" => "Elon Musk"
    ],
    [
        "quote" => "The first step is to establish that something is possible; then probability will occur.",
        "author" => "Elon Musk"
    ],
    [
        "quote" => "With artificial intelligence, we are summoning the demon.",
        "author" => "Elon Musk"
    ],
    [
        "quote" => "Engineering is the closest thing to magic that exists in the world.",
        "author" => "Elon Musk"
    ],
    [
        "quote" => "In less than 20 years, working at all will be optional... like a hobby pretty much.",
        "author" => "Elon Musk (2025)"
    ],
    [
        "quote" => "AGI could be achieved as early as 2026.",
        "author" => "Elon Musk (2025)"
    ]
];

    $random_key = array_rand($quotes);
    $random_quote = $quotes[$random_key];

    echo "<div class='quote-text'>\"" . htmlspecialchars($random_quote['quote']) . "\"</div>";
    echo "<div class='quote-author'>- " . htmlspecialchars($random_quote['author']) . "</div>";
?>

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
        
        <div class="position-absolute top-0 start-0 w-100 p-3 bg-primary text-center text-white">
            <h1>Quote of the Day Generator</h1>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-6">
                    <div class="card border-primary border-2 bg-transparent text-center shadow-lg">
                        <div class="card-body p-5 d-flex flex-column align-items-center justify-content-center text-center">
                            <i class="fas fa-quote-left text-primary display-1 mb-4 opacity-25"></i>
                            
                            <p class="card-text fs-3 fw-light lh-lg mb-5 px-4" id="quoteText">
                                
                            </p>
                            
                            <p class="text-muted fst-italic fs-5 mb-5" id="quoteAuthor">

                            </p>
                            
                            <button class="btn btn-primary btn-lg px-5 shadow-lg" onclick="getNewQuote()">
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