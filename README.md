FilterExpression library
=====

Usage
-----

    // Create a filter expression
    $expression = new FilterExpression;
    $expression->adjectives[] = 'featured';
    $expression->noun = 'events';
    $expression->thats[] = 'are happening in the future';
    print $expression; // "Featured events that are happening in the future"
