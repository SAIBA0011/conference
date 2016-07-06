<div class="modal-window" data-modal="email-ticket" style="background-color: rgba(2, 2, 2, 0.85);">
    <div class="modal-box small animated" data-animation="zoomIn" data-duration="700">
        <span class="close-btn icon icon-office-52"></span>

        <h5 class="align-center"><span class="highlight">I’m interested</span></h5>

        {!! Form::open(['class' => 'form registration-form']) !!}

            <fieldset class="col-md-12">
                {!! Form::label('first_name', 'First Name') !!}
                {!! Form::input('text', 'first_name', null) !!}
            </fieldset>

            <fieldset class="col-md-12">
                {!! Form::label('last_name', 'Last Name') !!}
                {!! Form::input('text', 'last_name', null) !!}
            </fieldset>

            <fieldset class="col-md-12">
                {!! Form::label('phone', 'Contact Number') !!}
                {!! Form::input('text', 'phone', null) !!}
            </fieldset>

            <fieldset class="col-md-12">
                {!! Form::label('email', 'Email Address') !!}
                {!! Form::input('text', 'email', null) !!}
            </fieldset>

            <fieldset class="col-md-12">
                {!! Form::label('member_body', 'Member Body') !!}
                {!! Form::input('text', 'member_body', null) !!}
            </fieldset>

            <fieldset class="col-md-12">
                {!! Form::label('country', 'Country') !!}
                {!! Form::input('text', 'country', null) !!}
            </fieldset>

            <fieldset class="col-md-12">
                {!! Form::label('body_sa', 'Profesional Body South Africa') !!}
                {!! Form::input('text', 'body_sa', null) !!}
            </fieldset>

            <fieldset class="col-md-12">
                {!! Form::label('option', 'Please Select') !!}
                {!! Form::select('option', [
                    'option_1' =>'EARLY BIRD NON-IAFEI MEMBER',
                    'option_2' =>'EARLY BIRD IAFEI MEMBER BODY / PROFESSIONAL BODY MEMBER',
                    'option_3' =>'GALA DINNER',
                    'option_4' =>'NON-IAFEI MEMBER & GALA DINNER',
                    'option_5' =>'IAFEI MEMBER & GALA DINNER',
                    ], null) !!}
            </fieldset>

            <fieldset class="col-md-12">
                {!! Form::submit('Submit', ['class' => 'btn']) !!}
            </fieldset>

        {!! Form::close() !!}
        {{--<form class="form registration-form align-center">--}}

            {{--<fieldset class="col-sm-12">--}}
                {{--<label for="first_name">First Name</label>--}}
                {{--<input id="first_name" name="first_name" type="text">--}}
            {{--</fieldset>--}}

            {{--<fieldset class="col-sm-12">--}}
                {{--<label for="last_name">Last Name</label>--}}
                {{--<input id="last_name" name="last_name" type="text">--}}
            {{--</fieldset>--}}

            {{--<fieldset class="col-sm-12">--}}
                {{--<label for="email">Email</label>--}}
                {{--<input id="email" name="email" type="email">--}}
            {{--</fieldset>--}}

            {{--<fieldset class="col-sm-6">--}}
                {{--<label for="pass1">Ticket type</label>--}}
                {{--<select id="pass1" name="pass1">--}}
                    {{--<option value="" selected disabled>-- Select --</option>--}}
                    {{--<option value="0">Early Bird</option>--}}
                    {{--<option value="1">Silver Pass</option>--}}
                    {{--<option value="2">Gold Pass</option>--}}
                    {{--<option value="3">Ultimate Mega Ultra Legendary Pass</option>--}}
                {{--</select>--}}
            {{--</fieldset>--}}

            {{--<fieldset class="col-sm-6">--}}
                {{--<label for="pass2"># tickets</label>--}}
                {{--<select id="pass2" name="pass2">--}}
                    {{--<option value="a">Variant A</option>--}}
                    {{--<option value="b">Variant B</option>--}}
                    {{--<option value="c">Variant C</option>--}}
                    {{--<option value="d">Variant D</option>--}}
                    {{--<option value="e">Variant E</option>--}}
                    {{--<option value="f" disabled>Variant F</option>--}}
                    {{--<option value="g">Variant G</option>--}}
                    {{--<option value="h">Variant H</option>--}}
                    {{--<option value="i">Variant I</option>--}}
                    {{--<option value="j">Variant J</option>--}}
                    {{--<option value="k">Variant K</option>--}}
                    {{--<option value="l">Variant L</option>--}}
                    {{--<option value="m">Variant M</option>--}}
                {{--</select>--}}
            {{--</fieldset>--}}

            {{--<fieldset class="col-sm-12">--}}
                {{--<input id="privacy" name="privacy" type="checkbox"><label for="privacy">I read & agree with <a href="#">Terms of service</a> </label>--}}
                {{--<br />--}}
                {{--<br />--}}
            {{--</fieldset>--}}

            {{--<input type="submit" value="submit" class="btn">--}}
        {{--</form>--}}

    </div>
</div>

{{--<div class="modal-window" data-modal="0" style="background-color: rgba(2, 2, 2, 0.85);">--}}
    {{--<div class="modal-box iframe-box iframe-video">--}}
        {{--<span class="close-btn icon icon-office-52"></span>--}}

        {{--<iframe src="https://www.youtube.com/embed/goH-Pv1w6xo?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>--}}
    {{--</div>--}}
{{--</div>--}}