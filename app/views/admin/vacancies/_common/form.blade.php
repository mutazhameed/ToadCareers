 <fieldset>
<div class="form-group">
        {{ Form::label('title', 'Title', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Title')) }}
        </div>
        {{ $errors->first('title', '<p class="error">:message</p>') }}
</div>
<div class="form-group">
        {{ Form::label('location', 'Location', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::text('location', null, array('class' => 'form-control', 'placeholder' => 'Location')) }}
        </div>
        {{ $errors->first('location', '<p class="error">:message</p>') }}
</div>
<div class="form-group">
        {{ Form::label('open_date', 'Opening Date', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::text('open_date', null, array('class' => 'form-control', 'placeholder' => 'Opening Date', 'id' => 'datepicker')) }}
        </div>
        {{ $errors->first('open_date', '<p class="error">:message</p>') }}
</div>
<div class="form-group">
        {{ Form::label('closing_date', 'Closing Date', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::text('closing_date', null, array('class' => 'form-control', 'placeholder' => 'Closing Date', 'id' => 'datepicker')) }}
        </div>
        {{ $errors->first('closing_date', '<p class="error">:message</p>') }}
</div>
<div class="form-group">
        {{ Form::label('classification', 'Job Classification', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::select('classification', JobCalssificationsLookup::lists('name', 'id'), null, array('class' => 'form-control')) }}
        </div>
        {{ $errors->first('classification', '<p class="error">:message</p>') }}
</div>
<div class="form-group">
            {{ Form::label('company_id', 'Company', array('class' => 'col-lg-2 control-label')) }}
            <div class="col-lg-10">
            {{ Form::select('company_id', CompaniesLookup::lists('name', 'id'), null, array('class' => 'form-control')) }}
            </div>
            {{ $errors->first('company_id', '<p class="error">:message</p>') }}
</div>
<div class="form-group">
        {{ Form::label('cat_id', 'Job Category', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::select('cat_id', CategoriesLookup::lists('name', 'id'), null, array('class' => 'form-control')) }}
        </div>
        {{ $errors->first('cat_id', '<p class="error">:message</p>') }}
</div>
<div class="form-group">
        {{ Form::label('salary', 'Job salary', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::text('salary', null, array('class' => 'form-control', 'placeholder' => 'Salary')) }}
        </div>
        {{ $errors->first('salary', '<p class="error">:message</p>') }}
</div>
<div class="form-group">
        {{ Form::label('summary', 'Job summary', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::textarea('summary', null, array('class' => 'form-control')) }}
        </div>
        {{ $errors->first('summary', '<p class="error">:message</p>') }}
</div>
<div class="form-group">
        {{ Form::label('description', 'Job description', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::textarea('description', null, array('class' => 'form-control')) }}
        </div>
        {{ $errors->first('description', '<p class="error">:message</p>') }}
</div>
<div class="form-group">
        {{ Form::label('responsibilities', 'Job responsibilities', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::textarea('responsibilities', null, array('class' => 'form-control')) }}
        </div>
        {{ $errors->first('responsibilities', '<p class="error">:message</p>') }}
</div>
<div class="form-group">
        {{ Form::label('qualifications_experience', 'Job qualifications and experience', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::textarea('qualifications_experience', null, array('class' => 'form-control')) }}
        </div>
        {{ $errors->first('qualifications_experience', '<p class="error">:message</p>') }}
</div>
<div class="form-group">
        {{ Form::label('skills_knowledge', 'Job skills and knowledge', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::textarea('skills_knowledge', null, array('class' => 'form-control')) }}
        </div>
        {{ $errors->first('skills_knowledge', '<p class="error">:message</p>') }}
</div>
        {{ Form::text('posted_user', null, array('hidden' => 'true')) }}
</fieldset>