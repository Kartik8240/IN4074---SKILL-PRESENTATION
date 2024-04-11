<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <style>
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
       
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        
        nav {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
        
        nav a {
            color: #fff;
            text-decoration: none;
            padding: 0 20px;
            transition: all 0.3s ease;
        }
        
        nav a:hover {
            text-decoration: underline;
        }
        
        
        .about-section {
            margin-top: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .about-content {
            max-width: 600px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .about-content img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            object-position: center;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .about-content p {
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <nav>
        <a href="index.php">Home</a>
        <a href="#">About</a>
        <a href="#">Gallery</a>
        <a href="#">Contact</a>
    </nav>
    <div class="container">
    <h1>Kartik Gandhi</h1>
        <div class="about-section">
            <div class="about-content">
                <img src="kartik_gandhi.jpg" alt="Kartik Gandhi">
                <p>I'm Kartik Gandhi, the creator of this website. I'm deeply passionate about web development and have dedicated years to mastering the craft. My journey into coding began at a young age, and I've since delved into both front-end and back-end development.</p>
<p>With a Bachelor's degree in Computer Science from a reputable university, I've worked on numerous projects, from personal websites to large-scale enterprise applications. I'm known for my meticulous attention to detail and my commitment to delivering top-notch results.</p>
<p>Outside of coding, I find joy in nature and love playing musical instruments. I'm always eager to explore the latest technologies and continuously strive to expand my skill set. Lifelong learning is a cornerstone of my philosophy.</p>
<p>More than just a coder, I see myself as a visionary who thrives on innovation. I love tackling challenges and pushing the boundaries of what's possible. Sharing my knowledge with others and contributing to open-source projects are also passions of mine.</p>
<p>Join me on this journey of creativity and exploration in the world of web development!</p>

            </div>
        </div>
    </div>
</body>
</html>
