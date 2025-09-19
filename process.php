<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $burgerNames = isset($_POST["burgerName"]) ? $_POST["burgerName"] : [];
    $quantities = isset($_POST["quantity"]) ? $_POST["quantity"] : [];
    $qualities = isset($_POST["quality"]) ? $_POST["quality"] : [];


    $numEntries = count($burgerNames);


    $entries = [];

    for ($i = 0; $i < $numEntries; $i++) {
        $entries[] = [
            'Burger Name' => $burgerNames[$i],
            'Quantity' => $quantities[$i],
            'Quality' => $qualities[$i]
        ];
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Response - Burger Inventory System</title>
        <style>
            body {
                font-family: 'Arial', sans-serif;
                background-color: #f2f2f2;
                margin: 0;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .response-card {
                max-width: 800px;
                width: 100%;
                background-color: #2c3e50;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                overflow: auto;
                color: #ecf0f1;
            }

            .entry-container {
                display: flex;
                flex-wrap: wrap-reverse; /* Reverse the order */
                gap: 20px;
            }

            .entry {
                background-color: #3498db;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                flex-grow: 1;
            }

            

        </style>
    </head>
    <body>
        <div class="response-card">
            <h2><center>Inventory Update</h2></center>
            <div class="entry-container">
                <?php foreach ($entries as $entry): ?>
                    <div class="entry entry-column">
                        <p><strong>Burger Name:</strong> <?php echo $entry['Burger Name']; ?></p>
                        <p><strong>Quantity:</strong> <?php echo $entry['Quantity']; ?></p>
                        <p><strong>Quality:</strong> <?php echo $entry['Quality']; ?>/10</p>
                    </div>
                <?php endforeach; ?>
            </div>

           

            <!-- Form for new entry -->
            <div class="burger-entry-template entry-column">
               <p>hello?</p>
            </div>

            
        </div>
    </body>
    </html>

    <?php
}
?>
