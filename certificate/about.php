<?php
    require "header.php";
?>

<style>
    
</style>
<!-- CSS Files -->
<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/abouts/about-1/assets/css/about-1.css" />
<!-- About 1 - Bootstrap Brain Component -->
<section class="py-3 py-md-5 py-xl-8">
  <div class="container">
    <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
      <div class="col-12 col-lg-6 col-xl-5">
        <img class="img-fluid rounded" loading="lazy" src="attachments/images.png" height="500px" width="500px" alt="">
      </div>
      <div class="col-12 col-lg-6 col-xl-7">
        <div class="row justify-content-xl-center">
          <div class="col-12 col-xl-11">
            <h2 class="h1 mb-3">Who Are We?</h2>
            <p class="lead fs-4 text-secondary mb-3">In an era where digitalization is transforming administrative processes across various sectors, the traditional method of manually creating and distributing certificates for events, programs, or achievements can be time-consuming, error-prone, and inefficient. Recognizing this challenge, the Certificate Generator project proposes a solution aimed at revolutionizing the certificate issuance process by leveraging web-based technology and automation.</p>
            <div class="row gy-4 gy-md-0 gx-xxl-5X">
              <div class="col-12 col-md-6">
                <div class="d-flex">
                  <div class="me-4 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                      <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                    </svg>
                  </div>
                  <div>
                    <h4 class="mb-3">Manual Data Entry and Processing</h4>
                    <p class="text-secondary mb-0">Traditional methods rely heavily on manual data entry, increasing the likelihood of errors and consuming valuable administrative time and resources.</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="d-flex">
                  <div class="me-4 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                      <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
                    </svg>
                  </div>
                  <div>
                    <h4 class="mb-3">Limited Customization Options</h4>
                    <p class="text-secondary mb-0">Existing systems often offer limited options for customizing certificate designs, fonts, colors, and branding elements, resulting in generic and unremarkable certificates.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--<div class="container">
    <div class="eight">
        <h1><strong>About</strong></h1>
    </div>

    <p>
    <h2>ABOUT THE CERTIFICATE MAILER </h2>
    Web applications like Certificate Mailer are most suitable for businesses hosting online webinars. It is a platform
    where, by following few  instructions, one may create certificates for each participant and have them addressed to
    their individual emails.
    <br>
    <br>
    <h2>WORKING OF THE APP </h2>
    The following instructions will help you utilise this app:
    <ul>
        <li>In the <strong><a href="displayUploads.php" style="color:black">Candidates</a></strong> area, you may view
            the Candidates and their information. Two buttons are provided below.
            More candidate information can be <strong><a href="uploadCSV.php" style="color:black">uploaded in a CSV
                    file</a></strong> with the first name, last name, and email address
            of each candidate listed in the first three columns. A second button allows you to <strong><a
                    href="deleteRecords.php" style="color:black">delete all previously
                    uploaded records</a></strong>.
        </li>
        <li>You may check out the mailing content on the <strong><a href="mailContent.php" style="color:black">Mail
                    Content</a></strong> tab and use the <strong><a href="updateContent.php" style="color:black">update
                    content button</a></strong> on same page to change the subject and body of the mail.</li>
        <li>On the <strong><a href="displayAttachments.php" style="color:black">attachments page</a></strong>, you may
            browse already-posted attachments and <strong><a href="attachmentsUpload.php" style="color:black">add new
                    ones</a></strong> or <strong><a href="deleteAttachments.php" style="color:black">remove
                    older</a></strong> ones. Fill in the X and Y coordinates for the text to be written in pixels when
            uploading attachments.</li>
        <li>The names of each candidate are listed on the certificate and saved in the database when you select the
            <strong><a href="generateCertificate.php" style="color:black">generate certificate</a></strong> tab. The
            button at the bottom displays a sample certificate for verifying coordinates of written text.</li>
        <li><strong><a href="sendMail.php" style="color:black">Send Email</a></strong> delivers the email to each candidate's inbox.
        </li>
    </ul>
    Voila! It's finished. Please feel free to drop your feedback on <strong><a href="contact.php"
            style="color:black">Contact Form</a></strong>.
    </ul>
    <br><br>
    <h2>ABOUT ME</h2>

    I'm Vrishti Bansal, a Software Developer and Graphic Designer based in Delhi, India
    <br>
    You can find more of my work on my <a href="http://www.beingvrishti.com/" style="color:black">personal website</a>.
    </p>
</div>-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script>
$("#about").addClass("active");
</script>
<?php
    require "footer.php";
?>