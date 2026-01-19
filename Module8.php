<?php
date_default_timezone_set('Asia/Manila');
$holidays = [
  
    ["name" => "New Year's Day", "date" => "2026-01-01", "image" => "images/new_years_day.jpg", "type" => "National"],
    ["name" => "Independence Day", "date" => "2026-06-12", "image" => "images/independenceday.png", "type" => "National"],
    ["name" => "People Power Anniversary", "date" => "2026-02-25", "image" => "images/ppr.jpeg", "type" => "National"],
    ["name" => "Maundy Thursday", "date" => "2026-04-02", "image" => "images/maundythursday.jpg", "type" => "National"],
    ["name" => "Good Friday", "date" => "2026-04-03", "image" => "images/goodfriday.png", "type" => "National"],
    ["name" => "Araw ng Kagitingan", "date" => "2026-04-09", "image" => "images/araw ng kagitingan.jpg", "type" => "National"],
    ["name" => "Labor Day", "date" => "2026-05-01", "image" => "images/laborday.png", "type" => "National"],
    ["name" => "Christmas Day", "date" => "2026-12-25", "image" => "images/merrychristmas.jpg", "type" => "National"],

    ["name" => "Pampanga Day", "date" => "2026-03-15", "image" => "images/pampangaday.jpg", "type" => "Local"],
    ["name" => "Pinatubo Day", "date" => "2026-07-22", "image" => "images/pinatuboday.jpg", "type" => "Local"],
    ["name" => "Binulo Festival Day", "date" => "2026-11-15", "image" => "images/binulo.jpg", "type" => "Local"],
    ["name" => "Lantern Festival", "date" => "2026-12-13", "image" => "images/lanternfestival.jpg", "type" => "Local"],

];


function displayWorldTime($zone) {
    $now = new DateTime('now', new DateTimeZone($zone));
    return $now->format('h:i:s A');
}

$national = array_filter($holidays, function($h) { return $h['type'] === 'National'; });
$local = array_filter($holidays, function($h) { return $h['type'] === 'Local'; });

echo ""

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PH Holidays 2026</title>
    <style>
        :root {
            --primary: #0038a8; 
            --secondary: #ce1126; 
            --bg: #f8f9fa;
            --text: #333;
        }

        body {
            font-family: 'Inter', -apple-system, sans-serif;
            background: linear-gradient(135deg,rgb(83, 128, 231) 0%, #f8f9fa 40%,rgb(141, 141, 141) 100%, #0038a8 100%);
            color: var(--text);
            margin: 0;
            padding: 40px;
        }


        header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            border-bottom: 3px solid var(--primary);
            padding-bottom: 15px;
            margin-bottom: 40px;
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
            letter-spacing: -1px;
            color: var(--primary);
        }

        .updated-time {
            text-align: right;
            font-size: 0.95rem;
            color: #666;
            font-weight: 500;
        }

        .holiday-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr); 
            gap: 25px;
        }

        .holiday-card {
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: 1px solid #eee;
        }

        .holiday-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }

        .holiday-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-bottom: 4px solid var(--secondary);
        }

        .card-body {
            padding: 20px;
        }

        .card-body h3 {
            margin: 0 0 10px 0;
            font-size: 1.25rem;
            color: var(--primary);
        }

        .card-body p {
            margin: 0;
            font-weight: 600;
            color: var(--secondary);
            font-size: 0.9rem;
            text-transform: uppercase;
        }

        footer {
            margin-top: 60px;
            padding-top: 30px;
            border-top: 1px solid #ddd;
            text-align: center;
        }

        .world-clocks {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-bottom: 20px;
        }

        .clock-item {
            background: #fff;
            padding: 10px 20px;
            border-radius: 50px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            font-size: 0.85rem;
            border: 1px solid #eee;
        }

        .clock-item strong {
            color: var(--primary);
        }

        .creator-tag {
            font-size: 1.1rem;
            font-weight: bold;
            color: #444;
        }

        @media (max-width: 600px) {
            header { flex-direction: column; align-items: flex-start; }
            .world-clocks { flex-direction: column; gap: 10px; }
        }
    </style>
</head>
<body>

<header>
    <div>
        <h1>PHILIPPINE HOLIDAYS 2026</h1>
    </div>
    <div class="updated-time">
        Updated: <?php echo date('l, F d, Y | h:i A'); ?>
    </div>
</header>

<main>
    <h2 style="margin-bottom:10px;">National Holidays</h2>
    <div class="holiday-grid">
        <?php foreach ($national as $h): ?>
            <?php 
        
                $dateObj = new DateTime($h['date']); 
            ?>
            <div class="holiday-card">
                <img src="<?php echo $h['image']; ?>" alt="<?php echo $h['name']; ?>">
                <div class="card-body">
                    <h3><?php echo $h['name']; ?></h3>
                    <p><?php echo $dateObj->format('F d, Y (l)'); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <h2 style="margin:40px 0 10px 0;">Local Holidays</h2>
    <div class="holiday-grid">
        <?php foreach ($local as $h): ?>
            <?php 
                $dateObj = new DateTime($h['date']); 
            ?>
            <div class="holiday-card">
                <img src="<?php echo $h['image']; ?>" alt="<?php echo $h['name']; ?>">
                <div class="card-body">
                    <h3><?php echo $h['name']; ?></h3>
                    <p><?php echo $dateObj->format('F d, Y (l)'); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<footer>
    <div class="world-clocks">
        <div class="clock-item"><strong>London:</strong> <?php echo displayWorldTime('Europe/London'); ?></div>
        <div class="clock-item"><strong>New York:</strong> <?php echo displayWorldTime('America/New_York'); ?></div>
        <div class="clock-item"><strong>Tokyo:</strong> <?php echo displayWorldTime('Asia/Tokyo'); ?></div>
    </div>
    <div class="creator-tag">
        Creator: Rustine De Pedro
    </div>
</footer>

</body>
</html>