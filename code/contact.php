 <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-6">Contact Us</h1>
                    <p class="text-primary fs-5 mb-0">If You Have Any Query, Please Contact Us</p>
                </div>
                <div class="col-lg-6 text-lg-end">
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="mb-2">Our office:</p>
                    <h4>Plot No.11, C/o. National Cement Pipe, Trimbak road, Near Ibis Hotel, Satpur MIDC, Nasik</h4>
                    <hr class="w-100">
                    <p class="mb-2">Call us:</p>
                    <h4>+91 99 2377 4806</h4>
                    <hr class="w-100">
                    <p class="mb-2">Mail us:</p>
                    <h4>sparkjpp2017@gmail.com</h4>
                    <hr class="w-100">
                    <p class="mb-2">Follow us:</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
  <!--                   <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p> -->
                    <form method="post" action="#">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="a1" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="a2" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="a3" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" name="a4" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-4" name="btn_submit" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

<?php
if(isset($_POST['btn_submit']))
{
    include "include/config.php";
        extract($_POST);

 /*echo "<pre>";
    print_r($_POST);
    echo "</pre>";*/
    $sql = "INSERT INTO `tbl_contact` (`id`, `name`, `email`, `subject`, `msg`, `time`) VALUES (NULL, '$a1', '$a2', '$a3', '$a4', '$currentDateTime')";
    if(mysqli_query($con,$sql)){
   //     echo "sucess";
}else{
  //  echo "fail";
}
}

?>
    <!-- Google Map Start -->

        <iframe class="w-100 mb-n2" style="height: 450px;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14996.923617245924!2d73.72156981351334!3d19.99882136635301!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddec63b4ed01d9%3A0x7edb5651123aac1!2sMIDC%2C%20Satpur%20Colony%2C%20Nashik%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1705234842981!5m2!1sen!2sin"
            frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- Google Map End -->