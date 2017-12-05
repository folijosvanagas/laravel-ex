<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Susisiekite</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 contacts">
            <ul>
                <li>
                    <a href="https://www.facebook.com/" title="" target="_blank">
                        <p><i class="fa fa-facebook-square" aria-hidden="true"></i> BesideMe</p>
                    </a>
                </li>
                <li>
                    <a href="mailto:besideme@gmail.com" target="_blank">
                        <p><i class="fa fa-envelope-o" aria-hidden="true"></i> besideme@gmail.com</p>
                    </a>
                </li>
                <li>
                    <a href="tel:+37065391341">
                        <p><i class="fa fa-phone" aria-hidden="true"></i> +370 653 913641</p>
                    </a>
                </li>
            </ul>

            @if (session()->has('success'))
                <script type="text/javascript">

                    $(document).ready(function () {
                        $.sweetModal({
                            content: 'Your message was sent successfully. <h1> Thank you!</h1>',
                            icon: $.sweetModal.ICON_SUCCESS
                        });
                    });
                </script>
            @endif
        </div>

        <div class="contact-form col-lg-6  col-lg-offset-3 col-sm-12">
            {!! Form::open(['route'=>'ContactMe']) !!}

            <div class="form-group {{ $errors->has('subject') ? 'has-error' : '' }}">
                {!! Form::label('Subject:') !!}
                {!! Form::text('subject', old('subject'), ['class'=>'form-control', 'placeholder'=>'Enter Subject']) !!}
                <span class="text-danger">{{ $errors->first('subject') }}</span>
            </div>

            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                {!! Form::label('Email:') !!}
                {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
                <span class="text-danger">{{ $errors->first('email') }}</span>
            </div>

            <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                {!! Form::label('Message:') !!}
                {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
                <span class="text-danger">{{ $errors->first('message') }}</span>
            </div>

            <div class="form-group">
                <button class="btn btn-success">Contact Me!</button>
            </div>

            {!! Form::close() !!}
        </div>
    </div>
</div>
