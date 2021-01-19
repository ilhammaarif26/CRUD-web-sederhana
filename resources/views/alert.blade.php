@if (session()->has('success'))
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-success">
                    {{session()->get('success')}}
                </div>
            </div>
        </div>
    </div>
@endif

@if (session()->has('successUpdate'))
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-success">
                    {{session()->get('successUpdate')}}
                </div>
            </div>
        </div>
    </div>
@endif

@if (session()->has('successDelete'))
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-success">
                    {{session()->get('successDelete')}}
                </div>
            </div>
        </div>
    </div>
@endif

@if (session()->has('categoryCreate'))
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-success">
                    {{session()->get('categoryCreate')}}
                </div>
            </div>
        </div>
    </div>
@endif

@if (session()->has('categoryUpdate'))
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-success">
                    {{session()->get('categoryUpdate')}}
                </div>
            </div>
        </div>
    </div>
@endif

@if (session()->has('categoryDelete'))
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-success">
                    {{session()->get('categoryDelete')}}
                </div>
            </div>
        </div>
    </div>
@endif
