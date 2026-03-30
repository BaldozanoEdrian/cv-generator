<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Generator</title>
    <link rel="stylesheet" href="assets/css/form.css">
</head>
</head>
<body>
    <div class="container">
    <header>
        <h1>INFORMATIONS</h1>
        <p>Fill in your details to create a professional resume.</p>
        <p> <i><u>-Edrian-Maker</u></i></p>
    </header>

    <form action="display.php" method="POST">
        <div class="form-section">
            <h3>Personal Information</h3>
            <div class="grid-row">
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="fullname" required placeholder="John Doe">
                </div>
                <div class="form-group">
                    <label>Job Title</label>
                    <input type="text" name="title" placeholder="e.g., Backend Developer">
                </div>
            </div>
            
            <div class="grid-row three-cols">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" required placeholder="name@email.com">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="phone" placeholder="+63 9xx...">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" placeholder="City, Country">
                </div>
            </div>
        </div>

        <div class="form-section">
            <h3>Professional Content</h3>
            <div class="form-group">
                <label>Professional Summary</label>
                <textarea name="summary"></textarea>
            </div>
            
            
            <div class="grid-row">
                <div class="form-group">
                    <label>Work Experience</label>
                    <textarea name="experience" placeholder="Company - Role (Year)"></textarea>
                </div>
                <div class="form-group">
                    <label>Education</label>
                    <textarea name="education" placeholder="Degree - University (Year)"></textarea>
                </div>
            </div>

            <div class="grid-row">
                <div class="form-group">
                    <label>Technologies</label>
                    <input type="text" name="skills" placeholder="Go, SQL, Docker...">
                </div>
                <div class="form-group">
                    <label>Languages</label>
                    <input type="text" name="languages" placeholder="English, Tagalog...">
                </div>
            </div>
        </div>

        <button type="submit" class="btn-submit">Generate CV</button>
    </form>
</div>
</body>
</html>