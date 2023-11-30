@extends('layout.app')
@section('appContents')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>MS Dhoni's Achievements</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }
    h1 {
      text-align: center;
    }
    .achievement {
      margin-bottom: 20px;
    }
    .achievement h2 {
      margin-bottom: 5px;
    }
    .achievement p {
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <h1>MS Dhoni's Achievements</h1>
  <img src="https://pbs.twimg.com/media/E4nNhllUcAILwrn.jpg" alt="MS Dhoni">


  <div class="achievement">
    <h2>1. ICC Trophies Won:</h2>
    <p> - ICC T20 World Cup (2007)</p>
    <p> - ICC Cricket World Cup (2011)</p>
    <p> - ICC Champions Trophy (2013)</p>
  </div>

  <div class="achievement">
    <h2>2. Records:</h2>
    <p> - Only captain to win all three major ICC trophies</p>
    <p> - Holds the record for most international stumpings</p>
    <p> - First Indian wicketkeeper to score a double century in ODIs</p>
  </div>

  <div class="achievement">
    <h2>3. Awards and Honors:</h2>
    <p> - Padma Bhushan Award (2018)</p>
    <p> - ICC ODI Player of the Year (2008, 2009)</p>
    <p> - Rajiv Gandhi Khel Ratna Award (2007-08)</p>
  </div>

  <div class="achievement">
    <h2>4. Indian Premier League (IPL):</h2>
    <p> - Captained Chennai Super Kings to multiple IPL titles</p>
    <p> - Known for his leadership and successful captaincy in the IPL</p>
  </div>

</body>
</html>

@endsection
