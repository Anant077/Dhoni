
@extends('layout.app')
@section('appContents')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact MS Dhoni</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f9f9f9; color: #333;">

  <header style="background-color: #333; color: #fff; text-align: center; padding: 20px 0;">
    <h1 style="margin: 0;">Contact MS Dhoni</h1>
  </header>

  <main style="max-width: 800px; margin: 20px auto; padding: 20px; background-color: #fff; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <section class="contact-info" style="text-align: center;">
      <h2 style="margin-bottom: 20px;">MS Dhoni</h2>
      <div class="contact-details" style="display: flex; align-items: center; justify-content: center;">
        <div class="contact-item" style="margin: 10px;">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSh-SaIXVBKQLNQR1rCHEcHxLFQC5KjsvU6Xg&usqp=CAU" alt="MS Dhoni" style="max-width: 200px; border-radius: 50%;">
        </div>
        <div class="contact-item" style="margin: 10px;">
          <p style="margin: 5px 0;"><strong>Email:</strong> msdhoni@example.com</p>
          <p style="margin: 5px 0;"><strong>Phone:</strong> +91 1234567890</p>
          <p style="margin: 5px 0;"><strong>Social Media:</strong></p>
          <ul style="padding: 0; list-style: none;">
            <li style="display: inline; margin-right: 10px;">
              <a href="https://twitter.com/msdhoni" target="_blank" style="text-decoration: none; color: #333; background-color: #f4f4f4; padding: 5px 10px; border-radius: 3px; transition: background-color 0.3s ease;">Twitter</a>
            </li>
            <li style="display: inline; margin-right: 10px;">
              <a href="https://www.instagram.com/msdhoni" target="_blank" style="text-decoration: none; color: #333; background-color: #f4f4f4; padding: 5px 10px; border-radius: 3px; transition: background-color 0.3s ease;">Instagram</a>
            </li>
            <!-- Add more social media links if needed -->
          </ul>
        </div>
      </div>
    </section>
  </main>

</body>
</html>


@endsection
