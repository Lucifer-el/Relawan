<section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Ingin Bergabung Dengan Kami?</h2>
                    <h3 class="section-subheading text-muted">Isi form dibawah ya!</h3>
                </div>
                <form id="contactForm" action="https://formspree.io/f/xrbzvjqp" method="POST" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Masukan Namamu *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Masukan Emailmu *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Masukan Nomormu *" data-sb-validations="required" 
                                       pattern="[0-9]*" oninput="this.value = this.value.replace(/[^0-9]/g, '');" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Apa Alasanmu Masuk? *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form berhasil dikirim!</div>
                            <br/>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error dalam mengirim pesan, tolong coba lagi!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Kirim</button></div>
                </form>
            </div>
        </section>

<footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">© 2023/2024 Relawan Neskar. Semua hak cipta dilindungi.</div
                </div>
            </div>
        </footer>
        