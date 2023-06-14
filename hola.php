<div class="form-floating mb-3">
                                    <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                    <label for="name">Nombre completo</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">Un nombre es requerido.</div>
                                </div>
                                <!-- Email address input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                    <label for="email">Correo electronico</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">Un correo es requerido.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">El correo no es valido.</div>
                                </div>
                                <!-- Phone number input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                    <label for="phone">Teléfono</label>
                                    <div class="invalid-feedback" data-sb-feedback="phone:required">Se requiere un numero telefónico.</div>
                                </div>
                                <!-- Message input-->
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                    <label for="message">Mensaje</label>
                                    <div class="invalid-feedback" data-sb-feedback="message:required">Se requiere un mensaje.</div>
                                </div>
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Formulario enviado con éxito!</div>
                                        To activate this form, sign up at
                                        <br />
                                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>
                                <!-- Submit error message-->
                                <!---->
                                <!-- This is what your users will see when there is-->
                                <!-- an error submitting the form-->
                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error al enviar mensaje!</div></div>
                                <!-- Submit Button-->
                                <div class="d-flex justify-content-center">
                                <button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Enviar</button>
                                </div>*/