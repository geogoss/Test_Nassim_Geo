{{-- // message en cas de succes --}}
@if( = Session::get("success"))
    <div class="alert alert-success alert-block">
        <strong>{{}}</strong>
    </div>
@endif

{{-- // message en cas de warning --}}
@if( = Session::get("warning"))
    <div class="alert alert-warning alert-block">
        <strong>{{}}</strong>
    </div>
@endif   

{{-- // message en cas de warning --}}
@if( = Session::get("danger"))
    <div class="alert alert-danger alert-block">
        <strong>{!!!!}</strong>
    </div>
@endif    

{{-- // message en cas de errors --}}
@if(->any())
    <div class="alert alert-danger alert-block">
        <ul>
            @foreach (->all() as )
                <li>{{}}</li>
            @endforeach
        </ul>
    </div>
@endif
