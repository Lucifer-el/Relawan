<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Ingin Bergabung Dengan Kami?</h2>
            <h3 class="section-subheading text-muted">Isi form dibawah ya!</h3>
        </div>
        <form id="contactForm" action="https://formspree.io/f/xdkogpyv" method="POST">
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <!-- Name input-->
                        <input class="form-control" id="name" name="name" type="text" placeholder="Masukan Namamu *" data-sb-validations="required" required />
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>
                    <div class="form-group mb-md-0">
                        <!-- Phone number input-->
                        <input class="form-control" id="phone" name="phone" type="tel" placeholder="Masukan Nomormu *" data-sb-validations="required" pattern="[0-9]*" required 
                               oninput="this.value = this.value.replace(/[^0-9]/g, '');" />
                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <!-- Message input-->
                        <textarea class="form-control" id="message" name="message" placeholder="Apa Alasanmu Masuk? *" data-sb-validations="required" required></textarea>
                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                    </div>
                </div>
            </div>
            <!-- Submit success message-->
            <div class="d-none" id="submitSuccessMessage">
                <div class="text-center text-white mb-3">
                    <div class="fw-bolder">Form berhasil dikirim!</div>
                    <br/>
                </div>
            </div>
            <!-- Submit error message-->
            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error dalam mengirim pesan, tolong coba lagi!</div></div>
            <!-- Submit Button-->
            <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Kirim</button></div>
        </form>
    </div>
</section>
