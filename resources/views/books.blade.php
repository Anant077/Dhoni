
@extends('layout.app')
@section('appContents')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MS Dhoni - Books</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        .book {
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            overflow: hidden;
        }

        .book img {
            max-width: 100%;
            display: block;
            margin: 0 auto;
            border-radius: 8px;
        }

        .book-details {
            text-align: center;
        }

        .book-title {
            font-size: 24px;
            margin-bottom: 5px;
        }

        .book-author {
            font-style: italic;
            color: #555;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>MS Dhoni - Books</h1>
        <p> As of my last knowledge update in January 2022, Mahendra Singh Dhoni, the former Indian cricket captain, hasn't authored an autobiography. However, there are several books written about him that offer insights into his life, career, and leadership. Here is a fictional description of a potential book about Dhoni:<br><br>

            ---

            Title: "Captain Cool: The Untold Story of MS Dhoni"<br><br>

            Author: [Author's Name]<br><br>

            Description:<br><br>

            "Captain Cool: The Untold Story of MS Dhoni" delves into the life and career of one of India's most iconic cricketers, Mahendra Singh Dhoni. Written by [Author's Name], this book offers a compelling narrative that traces Dhoni's incredible journey from a small-town boy to becoming one of the most successful and revered cricket captains in the world.<br><br>

            The book provides an intimate portrayal of Dhoni's early life in Ranchi, Jharkhand, showcasing his determination, struggles, and relentless pursuit of excellence. It explores his rise through the ranks of Indian cricket, highlighting his breakthrough moments, his unique playing style, and his impact on the game.<br><br>

            Readers will gain insights into Dhoni's leadership philosophy and his approach to the game, earning him the moniker 'Captain Cool.' The book uncovers the behind-the-scenes moments of key matches, including the triumphant victories in the 2007 ICC World Twenty20, the 2011 ICC Cricket World Cup, and the 2013 ICC Champions Trophy.<br><br>

            Through interviews, anecdotes, and analysis, "Captain Cool" offers a nuanced portrayal of Dhoni's personality, showcasing his calm demeanor, tactical brilliance, and ability to handle high-pressure situations with grace.<br><br>

            Additionally, the book sheds light on Dhoni's influence beyond cricket, exploring his impact on Indian society and his contributions to various charitable causes.<br><br>

            With captivating storytelling and a deep understanding of the cricketing world, this book is a must-read for cricket enthusiasts, Dhoni fans, and anyone seeking inspiration from the extraordinary journey of a cricketing legend. </p>

        <div class="book">
            <img src="https://ashokbookcentre.com/wp-content/uploads/2022/04/71Ub2v4p7ES.jpg" alt="Book 1">
            <div class="book-details">
                <p class="book-title">The Dhoni tough </p>
                <p class="book-author">Bharat Sunderason</p>
            </div>
        </div>

        <div class="book">
            <img src="https://imgeng.jagran.com/images/2022/nov/Dhoni%2051668688081624.PNG" alt="Book 2">
            <div class="book-details">
                <p class="book-title">Think and Win like Dhoni</p>
                <p class="book-author">Sfurti Sahare</p>
            </div>
        </div>

        <!-- Add more books as needed -->

    </div>
</body>

</html>

@endsection
