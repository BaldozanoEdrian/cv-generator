<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

$fullname = htmlspecialchars(trim($_POST['fullname'] ?? ''));
$title    = htmlspecialchars(trim($_POST['title'] ?? ''));
$email    = htmlspecialchars(trim($_POST['email'] ?? ''));
$phone    = htmlspecialchars(trim($_POST['phone'] ?? ''));
$address  = htmlspecialchars(trim($_POST['address'] ?? ''));
$summary  = nl2br(htmlspecialchars(trim($_POST['summary'] ?? '')));
$education = nl2br(htmlspecialchars(trim($_POST['education'] ?? '')));
$experience = nl2br(htmlspecialchars(trim($_POST['experience'] ?? '')));
$skills   = htmlspecialchars(trim($_POST['skills'] ?? ''));
$languages = htmlspecialchars(trim($_POST['languages'] ?? ''));

$skillsArray = array_map('trim', explode(',', $skills));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $fullname; ?> - CV</title>
    <link rel="stylesheet" href="assets/css/cv.css">
</head>
<body>
<div class="cv-container" id="cvPrintArea">
    <div class="cv-header">
    <div class="cv-photo">
        <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($fullname); ?>&background=f1f5f9&color=64748b&size=128" alt="Profile Photo">
    </div>
    
    <div class="header-text">
        <h1><?php echo $fullname; ?></h1>
        <div class="job-title"><?php echo $title ?: 'Professional'; ?></div>
        <div class="contact-info">
            <span><?php echo $email; ?></span>
            <?php if($phone): ?>
                <span><?php echo $phone; ?></span>
            <?php endif; ?>
            <?php if($address): ?>
                <span><?php echo $address; ?></span>
            <?php endif; ?>
        </div>
    </div>
</div>
    <div class="cv-body">
        <div class="sidebar">
            <?php if(!empty($skills)): ?>
            <div class="section">
                <h2>Skills</h2>
                <div class="Technologies">
                    <?php foreach($skillsArray as $skill): ?>
                        <?php if($skill !== ''): ?>
                            <span class="skill-tag"><?php echo htmlspecialchars($skill); ?></span>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>

            <?php if(!empty($languages)): ?>
            <div class="section">
                <h2>Languages</h2>
                <p><?php echo nl2br(htmlspecialchars($languages)); ?></p>
            </div>
            <?php endif; ?>
        </div>

        <div class="main-content">
            <?php if(!empty($summary)): ?>
            <div class="section">
                <h2>Profile</h2>
                <p><?php echo $summary; ?></p>
            </div>
            <?php endif; ?>

            <?php if(!empty($education)): ?>
            <div class="section">
                <h2>Education</h2>
                <div><?php echo $education; ?></div>
            </div>
            <?php endif; ?>

            <?php if(!empty($experience)): ?>
            <div class="section">
                <h2>Work Experience</h2>
                <div><?php echo $experience; ?></div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="print-btn">
    <button onclick="window.print();">Print / Save as PDF</button>
</div>
</body>
</html>