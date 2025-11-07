<?php
/* Template Name: Contact Page */
get_header();
?>

<div class="container contact-page" style="padding: 4rem 0;">
    <h1 class="section-title" style="text-align: center; margin-bottom: 3rem;">Contact Us</h1>

    <div class="contact-content" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">

        <!-- Contact Form -->
        <div class="contact-form">
            <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
                <input type="hidden" name="action" value="submit_contact_form">

                <input type="text" name="name" placeholder="Your Name" required style="width:100%;padding:12px;margin-bottom:1rem;border:2px solid #ddd;border-radius:5px;">
                <input type="email" name="email" placeholder="Your Email" required style="width:100%;padding:12px;margin-bottom:1rem;border:2px solid #ddd;border-radius:5px;">
                <input type="text" name="subject" placeholder="Subject" style="width:100%;padding:12px;margin-bottom:1rem;border:2px solid #ddd;border-radius:5px;">
                <textarea name="message" placeholder="Your Message" rows="6" required style="width:100%;padding:12px;margin-bottom:1rem;border:2px solid #ddd;border-radius:5px;"></textarea>
                <button type="submit" class="search-button" style="background:#ff6b35;color:white;padding:12px 20px;border:none;border-radius:5px;cursor:pointer;font-weight:bold;">Send Message</button>
            </form>
        </div>

        <!-- Contact Info -->
        <div class="contact-info" style="background:#f8f9fa;padding:2rem;border-radius:10px;box-shadow:0 5px 20px rgba(0,0,0,0.05);">
            <h2>Get in Touch</h2>
            <p><strong>Address:</strong> 123 AutoDealer St, CarCity, CA 90000</p>
            <p><strong>Phone:</strong> (123) 456-7890</p>
            <p><strong>Email:</strong> info@autodealerpro.com</p>
            <p><strong>Business Hours:</strong> Mon - Fri: 9am - 6pm</p>
        </div>

        <!-- Google Map -->
        <div class="map" style="height:100%; min-height:400px;">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.086079492556!2d-122.41941568468132!3d37.77492977975947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808c1b98aaab%3A0xc4eaccc9e48d6577!2s123%20AutoDealer%20St%2C%20San%20Francisco%2C%20CA%2094103!5e0!3m2!1sen!2sus!4v1600000000000!5m2!1sen!2sus"
                width="100%"
                height="100%"
                style="border:0;"
                allowfullscreen=""
                loading="lazy">
            </iframe>
        </div>

    </div>
</div>

<?php get_footer(); ?>
