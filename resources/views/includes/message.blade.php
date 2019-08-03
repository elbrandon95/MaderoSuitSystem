@if(session("message"))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        <h4><i class="icon fa fa-check"></i> Mensaje Madero Suit</h4>
        <ul>
            <li>{{session("message")}}</li>
        </ul>
    </div>
@endif