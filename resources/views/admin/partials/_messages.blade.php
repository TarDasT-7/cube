@if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong style="color: black;font-size: 18px"> موفقیت آمیز :</strong> <span style="font-size: 16px">{{ Session::get('success') }}</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if(Session::has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong style="color: black;font-size: 18px"> هشدار :</strong><span style="font-size: 16px">{{ Session::get('error') }}</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
