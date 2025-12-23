<div class="contact section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="section-heading text-center">
                    <h6>| Contact Us</h6>
                    <h2>Let’s Discuss Your Business Needs</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div id="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5295146946937!2d106.8665774037752!3d-6.193642799937569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4f512d7b117%3A0xf9cc0ac18afa22f6!2sJl.%20Utan%20Kayu%20Raya%20No.50%2C%20RT.9%2FRW.5%2C%20Utan%20Kayu%20Utara%2C%20Kec.%20Matraman%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2013120!5e0!3m2!1sid!2sid!4v1766413782665!5m2!1sid!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="item phone">
                            <img src="assets/images/phone-icon.png" alt="" style="max-width: 52px;">
                            <h6>081392370103<br><span>Phone Number</span></h6>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="item email">
                            <img src="assets/images/email-icon.png" alt="" style="max-width: 52px;">
                            <h6>tropical.com<br><span>Business Email</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <form id="contact-form" action="{{ route('contact.store') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="name">Full Name</label>
                                <input type="text" name="name" id="name" placeholder="Your Name..."
                                    autocomplete="on" required>
                            </fieldset>
                        </div>

                        <div class="col-lg-12">
                            <fieldset>
                                <label for="email">Email Address</label>
                                <input type="email" name="email" id="email" placeholder="Your E-mail..."
                                    required>
                            </fieldset>
                        </div>

                        <div class="col-lg-12">
                            <fieldset>
                                <label for="subject">Subject</label>
                                <input type="text" name="subject" id="subject" placeholder="Subject...">
                            </fieldset>
                        </div>

                        <div class="col-lg-12">
                            <fieldset>
                                <label for="message">Message</label>
                                <textarea name="message" id="message" placeholder="Your Message" required></textarea>
                            </fieldset>
                        </div>

                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="orange-button">
                                    Send Message
                                </button>
                            </fieldset>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
