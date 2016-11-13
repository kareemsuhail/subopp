

    <section id="metrial">
        <div style="position: relative">
            <div id="map" style="width:100%;height:522px">
            </div>
            <div class="container">
                <div class="row ltr-dir">
                    <div class="col-md-4 contact-us">
                        <div>
                                    @foreach($errors->all() as $error)
                                        {{ $error }}
                                    @endforeach


                            {!! Form::open(array('route' => 'contact_store', 'class' => 'rtl-dir','align'=>'center')) !!}
                                <h3 class="bold-font text-right">
                                    إتصل بنا
                                </h3>
                                <input placeholder="الأسم بالكامل" type="text" value="" name="name" required>
                                <input placeholder="البرد الإلكتروني" type="email" name="email" 
                                       onblur="this.setAttribute('value', this.value);"
                                       value="" required>
                    <span class="validation-text">
                        البردي الإلكتروني خاطئ
                    </span> 
                                <textarea placeholder="نص الرسالة" type="text" rows="3" name="message" required></textarea>

                                <button class="send-btn btn">
                                    إرسال
                                </button>
                          {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="col-md-8"></div>
                </div>
            </div>
        </div>
    </section>
